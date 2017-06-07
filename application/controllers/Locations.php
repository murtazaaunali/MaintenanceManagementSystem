<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Locations
 *
 * @author Murtaza
 */
class Locations extends CI_Controller {

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
        $this->output->set_title('Primo CMMS | Locations');
        $this->output->set_template('default');
        $this->load->model('Locations_m');
    }

    public function index() {
        $this->data['page_title'] = 'Customers';
        $this->data['locations'] = $this->Locations_m->get_all();
        $this->load->view("Locations/index", $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Locations > Add New Locations';
        $this->load->view("Locations/add", $this->data);
        $this->data['page_title'] = 'Customers > Add New Customers';
        $this->load->view("Locations/add", $this->data);
        if ($this->input->post()) {
            $insert = $this->Locations_m->insert(array(
                'name' => $this->input->post('Location_name'),
                'address' => $this->input->post('Location_address'),
                'makani_no' => $this->input->post('makani_no'),
                'contact_number' => $this->input->post('contact_number'),
                'nationality' => $this->input->post('nationality'),
                'email' => $this->input->post('email'),
                'date_created' => $this->input->post('date_created'),
                'date_modified' => $this->input->post('date_modified'),
                'status' => '1',
                'modified_by' => $this->ion_auth->user()->row()->id
            ));
            if ($insert === FALSE) {
                $this->load->view('Erorr');
            } else {
                redirect('Locations/index');
            }
        }
    }

    public function edit($id = NULL) {
        if($id){
        $this->data['page_title'] = 'Customers > Edit > Customers';
        $this->data['Locations'] = $this->Locations_m->get_all();
        $this->data['Location'] = $this->Locations_m->get_by('id', $id);
        
        
           if ($this->input->post()) {
                
                $this->Locations_m->update($this->input->post('id'), array(
                    'name' => $this->input->post('location_name'),
                    'address' => $this->input->post('location_address'),
                    'makani_no' => $this->input->post('makani_no'),
                    'contact_number' => $this->input->post('contact_number'),
                    'nationality' => $this->input->post('nationality'),
                    'email' => $this->input->post('email'),
                    'status' => '1',
                    'date_modified' => $this->input->post('date_modified'),
                    'modified_by' => $this->ion_auth->user()->row()->id
                ));
            }
            $this->load->view("Locations/edit", $this->data);
        } else {
            redirect(site_url('Locations/index'));
        }
    }
   

    public function delete() {
        
    }

}

