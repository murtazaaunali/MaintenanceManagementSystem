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
        //$this->load->model("Workorders_m");
    }

    public function index() {
        $this->data['page_title'] = 'Work Orders';
        //$this->data['workorders'] = $this->Workorders_m->get_all();
        //$this->load->view("WorkOrders/Index", $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Work Orders > Add New Work Order';
        $this->load->view("WorkOrders/Add", $this->data);
    }

    public function view($id = null) {
        $this->data['page_title'] = 'Work Orders > Work Order Title';
        $this->load->view("WorkOrders/View");
    }

    public function edit($id = NULL) {
        $this->data['page_title'] = 'Work Orders > Edit > Order Title';
        $this->load->view("WorkOrders/Edit");
    }
    
    public function change_status() {
        
    }

    public function generate_pdf() {
        
    }
}
