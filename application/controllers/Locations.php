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
        $this->output->set_title('Primo CMMS | Locations');
        $this->output->set_template('default');
    }

    public function index() {
        $this->data['page_title'] = 'Work Orders';
        $this->load->view("Locations/Index", $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Work Orders > Add New Work Order';
        $this->load->view("Locations/Add", $this->data);
    }

    public function edit($id = NULL) {
        $this->data['page_title'] = 'Work Orders > Edit > Order Title';
        $this->load->view("Locations/Edit");
    }
    public function delete() {
        
    }
}
