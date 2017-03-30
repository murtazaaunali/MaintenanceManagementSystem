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
        $this->data['page_title'] = 'Work Orders';
        $this->load->view("Employees/Index", $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Work Orders > Add New Work Order';
        $this->load->view("Employees/Add", $this->data);
    }

    public function edit($id = NULL) {
        $this->data['page_title'] = 'Work Orders > Edit > Order Title';
        $this->load->view("Employees/Edit");
    }
    public function delete() {
        
    }
}
