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
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        # multiple groups (by name)
        $group = array('admin', 'manager');
        if (!$this->ion_auth->in_group($group)) {
            $this->session->set_flashdata('message', 'You must be a gangsta OR a hoodrat to view this page');
            redirect('/');
        }

        $this->output->set_title('Primo CMMS | Employee');
        $this->output->set_template('default');
        $this->load->model('Employees_m');
        $this->load->model('Users_m');
    }

    public function index() {
        $this->data['page_title'] = 'Employees';
        $this->data['employees'] = $this->Employees_m->get_all();
        $this->load->view("Employees/index", $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Work Orders > Add New Work Order';
        $this->load->view("Employees/add", $this->data);
        if ($this->input->post()) {
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $group = $this->input->post('employee_type');
            $additional_data = array(
                'first_name' => $this->input->post('First_Name'),
                'last_name' => $this->input->post('Last_name'),
                'company' => $this->input->post('Company_name'),
                'phone' => $this->input->post('Phone_number')
            );
            $insert_user = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
            if ($insert_user === FALSE) {
                $this->load->view('Error');
            } else {
                $insert_employee = $this->Employees_m->insert(array(
                    'email' => $this->input->post('email'),
                    'first_name' => $this->input->post('First_Name'),
                    'last_name' => $this->input->post('Last_name'),
                    'job_title' => $this->input->post('Job_tittle'),
                    'phone_number' => $this->input->post('Phone_number'),
                    'company_name' => $this->input->post('Company_name'),
                    'status' => $this->input->post('status'),
                    'modified_by' => $this->ion_auth->user()->row()->id
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
                $this->ion_auth->remove_from_group(NULL, $id);
                $data = array(
                    'first_name' => $this->input->post('First_Name'),
                    'last_name' => $this->input->post('Last_name'),
                    'password'
                );
                $update_user = $this->ion_auth->update($id, $data);

                if ($this->input->post('password')) {
                    $data = array(
                        'password' => $this->input->post('password')
                    );
                    $update_user_password = $this->ion_auth->update($id, $data);
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
                        'modified_by' => $this->ion_auth->user()->row()->id
                    ));


                    if ($update_employee === FALSE) {
                        $this->load->view('Erorr');
                    } else {
                        redirect('Employees');
                    }
                }
            }
            $this->load->view("Employees/edit", $this->data);
        } else {
            redirect(site_url('Employees/index'));
        }
    }

    public function delete() {
        
    }

}
