<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author Murtaza
 */
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->output->set_title('Primo CMMS | Dashboard');
        $this->output->set_template('default');
    }

    public function index() {

        $this->load->view('Dashboard/index');
    }

    public function chart_by_status() {
        
    }

    public function open_requests() {
        
    }

    public function completed_chart() {
        
    }

    public function chart_workorder_user() {
        
    }

}
