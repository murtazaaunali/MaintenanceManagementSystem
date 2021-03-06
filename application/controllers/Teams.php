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
        $this->output->set_title('Primo CMMS | Teams');
        $this->output->set_template('default');

        $this->load->model('Teams_m');
        $this->load->model('Employee_Team_m');
        $this->load->model('Employees_m');
    }

    public function index() {
        $this->data['page_title'] = 'Teams';
        $this->data['Teams'] = $this->Teams_m->get_all();
        $this->load->view("Teams/index", $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Teams > Add New Team';
        $this->data['team_Employees'] = $this->Employees_m->get_dropdown();
        $this->load->view("Teams/add", $this->data);

        if ($this->input->post()) {
            print_r($this->input->post());
            $insert = $this->Teams_m->insert(array(
                'name' => $this->input->post('team_name'),
                'description' => $this->input->post('team_description'),
                'status' => '1',
                'modified_by' => $this->ion_auth->user()->row()->id
            ));

            $team_id = $this->Teams_m->get_next_id() - 1;
            foreach ($this->input->post('team_employee') as $employee_id) {
                print_r($employee_id);
                $insert = $this->Employee_Team_m->insert(array(
                    'employee_id' => $employee_id,
                    'team_id' => $team_id
                ));
            }



            if ($insert === FALSE) {
                $this->load->view('Erorr');
            } else {
                redirect('Teams/index');
            }
        }
    }

    public function edit($id = NULL) {
        $this->data['page_title'] = 'Work Orders > Edit > Order Title';
        $this->load->view("Teams/edit");
    }

    public function add_employee() {
        
    }

    public function delete() {
        
    }

}
