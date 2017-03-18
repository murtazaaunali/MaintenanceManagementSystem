<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inquiries
 *
 * @author Murtaza
 */
class Inquiries extends CI_Controller {

    public $page_title;

    function __construct() {
        parent::__construct();
        $this->load->model('Inquiries_m');
        $this->load->model('Locations_m');
        $this->load->model('Categories_m');
    }

    public function index() {
        $this->data['page_title'] = 'Inquiries';
        $this->data['inquiries'] = $this->Inquiries_m->get_all();
        $this->load->view('Inquiries/Index', $this->data);
    }

    public function view($id=null) {
        $this->data['page_title'] = 'Inquiries > Inquiries Title';
        $this->data['inquiries'] = $this->Inquiries_m->get_all();
        $this->data['inquiry'] = $this->Inquiries_m->get($id);
        $this->load->view('Inquiries/View', $this->data);
    }


    public function change_status() {
        
    }

    public function generate_pdf() {
        
    }

}
