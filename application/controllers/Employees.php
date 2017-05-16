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
    }

    public function index() {
        $this->data['page_title'] = 'Employees';
        $this->data['employees'] = $this->Employees_m->get_all();
        $this->load->view("Employees/index", $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Work Orders > Add New Work Order';
        $this->load->view("Employees/add", $this->data);
    }

    public function edit($id = NULL) {
        if ($id) {
            $this->data['page_title'] = 'Work Orders > Edit > Order Title';
            $this->data['Employees'] = $this->Employees_m->get_all();
            $this->data['employees'] = $this->Employees_m->get_by('id', $id);
            
            if ($this->input->post()) {

                $this->Employees_m->update($this->input->post('id'), array(
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'account_type' => $this->input->post('employee_type'),
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'job_title' => $this->input->post('job_tittle'),
                    'phone_number' => $this->input->post('phone_number'),
                    'company_name' => $this->input->post('company_name'),
                    'status' => '1',
                    'date_modified' => $this->input->post('date_modified'),
                    'modified_by' => '1'
                ));
            }
            $this->load->view("Employees/edit", $this->data);
        } else {
            redirect(site_url('Employees/index'));
        }
    }

    public function delete() {
        
    }

}
