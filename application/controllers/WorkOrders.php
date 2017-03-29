<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WorkOrders
 *
 * @author Murtaza
 */
class WorkOrders extends CI_Controller {

    public $page_title;

    function __construct() {
        parent::__construct();
        $this->output->set_title('Primo CMMS | Work Orders');
        $this->output->set_template('default');
        $this->load->model('Workorders_m');
        $this->load->model('Locations_m');
        $this->load->model('Categories_m');
        $this->load->model('Task_Types_m');
    }

    public function index() {
        $this->data['page_title'] = 'Work Orders';
        $this->data['workorders'] = $this->Workorders_m->get_all();
        $this->load->view('WorkOrders/Index', $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Work Orders > Add New Work Order';
        $this->data['workorder_locations'] = $this->Locations_m->get_dropdown();
        $this->data['workorder_categories'] = $this->Categories_m->get_dropdown();

        $this->data['workorder_task_types'] = $this->Task_Types_m->get_dropdown();
        $this->load->view('WorkOrders/Add', $this->data);
        if ($this->input->post()) {
           $insert=$this->Workorders_m->insert(array(
                'title' => $this->input->post('workorder_title'),
                'description' => $this->input->post('workorder_description'),
                'priority' => $this->input->post('workorder_priority'),
                'location_id' => $this->input->post('workorder_location'),
                'category_id' => $this->input->post('workorder_category'),
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'requires_sign' => $this->input->post('workorder_requires_signature'),
                'repeating_schedule' => $this->input->post('workorder_repeating_schedule'),
                'status' => '1',
                'modified_by' => '1'
            ));
            if ($insert === FALSE){
                $this->load->view('Erorr');
                }
            else {
                    redirect('WorkOrders');
                
            }
        }
    }

    public function view($id = null) {
        $this->data['page_title'] = 'Work Orders > Work Order Title';
        $this->data['workorders'] = $this->Workorders_m->get_all();
        $this->data['workorder'] = $this->Workorders_m->get($id);
        $this->load->view('WorkOrders/View', $this->data);
    }

    public function edit($id = NULL) {
        if ($id) {
            $this->data['page_title'] = 'Work Orders > Edit > Order Title';
            $this->data['Workorders'] = $this->Workorders_m->get_all();
            $this->data['Workorder'] = $this->Workorders_m->get_by('id', $id);

            if ($this->input->post()) {
                print_r($this->input->post());
            }
            $this->load->view('WorkOrders/Edit', $this->data);
        } else {
            redirect(site_url('Workorders/index'));
        }
    }

    public function change_status() {
        
    }

    public function generate_pdf() {
        
    }

}
