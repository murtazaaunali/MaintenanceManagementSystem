<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Teams
 *
 * @author Murtaza
 */
class Teams extends CI_Controller {

    public $page_title;

    function __construct() {
        parent::__construct();
        $this->output->set_title('Primo CMMS | Teams');
        $this->output->set_template('default');
        
        $this->load->model('Teams_m');
        $this->load->model('Employees_m');
    }

    public function index() {
        $this->data['page_title'] = 'Teams';
        $this->data['Teams'] = $this->Teams_m->get_all();
        $this->load->view("Teams/Index", $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Teams > Add New Team';
        $this->data['team_Employees'] = $this->Employees_m->get_dropdown();
        $this->load->view("Teams/Add", $this->data);

        if ($this->input->post()) {
            $insert = $this->Teams_m->insert(array(
                'name' => $this->input->post('team_name'),
                'description' => $this->input->post('team_description'),
                'emp_name' => $this->input->post('team_employee'),
                'status' => '1',
                'date_created' => $this->input->post('date_created'),
                'date_modified' => $this->input->post('date_modified'),
                'modified_by' => '1'
            ));
            if ($insert === FALSE) {
                $this->load->view('Erorr');
            } else {
                redirect('Teams/index');
            }
        }
    }

    public function edit($id = NULL) {
        $this->data['page_title'] = 'Work Orders > Edit > Order Title';
        $this->load->view("Teams/Edit");
    }

    public function add_employee() {
        
    }

    public function delete() {
        
    }

}
