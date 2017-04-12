<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employees_m
 *
 * @author Murtaza
 */
class Employees extends CI_Controller {

    public $page_title;

    function __construct() {
        parent::__construct();
        $this->output->set_title('Primo CMMS | Employee');
        $this->output->set_template('default');
        $this->load->model('Employees_m');
        $this->load->model('Users_m');
    }

    public function index() {
        $this->data['page_title'] = 'Employees';
        $this->data['employees'] = $this->Employees_m->get_all();
        $this->load->view("Employees/Index", $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Work Orders > Add New Work Order';
        $this->load->view("Employees/Add", $this->data);
        if ($this->input->post()) {
            $employee_id = $this->Users_m->get_unused_id();
            $insert_user = $this->Users_m->insert(array(
                'user_id' => $employee_id,
                'username' => NULL,
                'email' => $this->input->post('email'),
                'auth_level' => $this->input->post('employee_type'),
                'passwd' => password_hash($this->input->post('password'), PASSWORD_BCRYPT, ['cost' => 11]),
                'created_at' => date('Y-m-d H:i:s')
            ));
            if ($insert_user === FALSE) {
                $this->load->view('Erorr');
            } else {
                $insert_employee = $this->Employees_m->insert(array(
                    'email' => $this->input->post('email'),
                    'first_name' => $this->input->post('First_Name'),
                    'last_name' => $this->input->post('Last_name'),
                    'job_title' => $this->input->post('Job_tittle'),
                    'phone_number' => $this->input->post('Phone_number'),
                    'company_name' => $this->input->post('Company_name'),
                    'status' => '1',
                    'modified_by' => '1'
                ));
                if ($insert_employee === FALSE) {
                    $this->load->view('Erorr');
                } else {
                    redirect('Employees');
                }
            }
        }
    }

    public function edit($id = NULL) {
        if ($id) {
            $this->data['page_title'] = 'Work Orders > Edit > Order Title';
            $this->data['Employees'] = $this->Employees_m->get_all();
            $employee = $this->Employees_m->get_by('id', $id);
            $user = $this->Users_m->get_by('email', $employee->email);
            $this->data['employees'] = $employee;
            $this->data['user'] = $user;

            if ($this->input->post()) {
                $update_user = $this->Users_m->update($this->input->post($user->user_id), array(
                    'auth_level' => $this->input->post('employee_type')
                ));

                if ($this->input->post('password')) {
                    $update_user_password = $this->Users_m->update($this->input->post($user->user_id), array(
                        'passwd' => password_hash($this->input->post('password'), PASSWORD_BCRYPT, ['cost' => 11])
                    ));
                }
                if ($update_user === FALSE) {
                    $this->load->view('Erorr');
                } else {
                    $update_employee = $this->Employees_m->update($this->input->post('id'), array(
                        'first_name' => $this->input->post('first_name'),
                        'last_name' => $this->input->post('last_name'),
                        'job_title' => $this->input->post('job_title'),
                        'phone_number' => $this->input->post('phone_number'),
                        'company_name' => $this->input->post('company_name'),
                        'status' => $this->input->post('status'),
                        'modified_by' => '1'
                    ));
                    

                    if ($update_employee === FALSE) {
                        $this->load->view('Erorr');
                    } else {
                        redirect('Employees');
                    }
                }
            }
            $this->load->view("Employees/Edit", $this->data);
        } else {
            redirect(site_url('Employees/index'));
        }
    }

    public function delete() {
        
    }

}
