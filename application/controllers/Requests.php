<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Requests
 *
 * @author Murtaza
 */
class Requests extends CI_Controller {

    public $page_title;

    function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        $this->output->set_title('Primo CMMS | Requests');
        $this->output->set_template('default');
        $this->load->model('Requests_m');
        $this->load->model('Workorders_m');
    }

    public function index() {
        $this->data['page_title'] = 'Work Orders';
        if ($this->ion_auth->is_admin()) {
            $this->data['requests'] = $this->Requests_m->get_all();
        } else {
            $user = $this->ion_auth->user()->row();
            $this->data['requests'] = $this->Requests_m->get_many_by(array('modified_by' => $user->id));
        }

        $this->load->view("Requests/index", $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Requests > Add New Request';
        $this->data['request_Workorders'] = $this->Workorders_m->get_dropdown();
        $this->load->view("Requests/add", $this->data);
        if ($this->input->post()) {
            $insert = $this->Requests_m->insert(array(
                'title' => $this->input->post('request_info'),
                'description' => $this->input->post('request_description'),
                'priority' => $this->input->post('request_priority'),
                'workorder_name' => $this->input->post('request_workorder_name'),
                'status' => '1',
                'date_created' => $this->input->post('date_created'),
                'date_modified' => $this->input->post('date_modified'),
                'modified_by' => $this->ion_auth->user()->row()->id
            ));
            if ($insert === FALSE) {
                $this->load->view('Erorr');
            } else {
                redirect('Requests/index');
            }
        }
    }

    public function edit($id = NULL) {
        if ($id) {
            $this->data['page_title'] = 'Requests > Edit > Request Title';
            $this->data['Requests'] = $this->Requests_m->get_all();
            $this->data['Request'] = $this->Requests_m->get_by('id', $id);
            $this->data['request_Workorders'] = $this->Workorders_m->get_dropdown();

            if ($this->input->post()) {

                $this->Requests_m->update($this->input->post('id'), array(
                    'title' => $this->input->post('request_title'),
                    'description' => $this->input->post('request_description'),
                    'priority' => $this->input->post('request_priority'),
                    'workorder_name' => $this->input->post('request_workorder_name'),
                    'status' => '1',
                    'date_modified' => $this->input->post('date_modified'),
                    'modified_by' => $this->ion_auth->user()->row()->id
                ));
            }
            $this->load->view('Requests/edit', $this->data);
        } else {
            redirect(site_url('Requests/index'));
        }
    }

    public function change_status() {
        
    }

}
