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
    }

    public function index() {
        $this->data['page_title'] = 'Work Orders';
        $this->load->view("Requests/Index", $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Work Orders > Add New Work Order';
        $this->load->view("Requests/Add", $this->data);
    }

    public function edit($id = NULL) {
        $this->data['page_title'] = 'Work Orders > Edit > Order Title';
        $this->load->view("Requests/Edit");
    }
    public function change_status() {
        
    }
}
