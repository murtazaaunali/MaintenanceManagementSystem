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
        // set current date
        $date = date('m/d/Y');
        // parse about any English textual datetime description into a Unix timestamp 
        $ts = strtotime($date);
        // find the year (ISO-8601 year number) and the current week
        $year = date('o', $ts);
        $week = date('W', $ts);
        // print week for the current date
        $thisWeek = array();
        for ($i = 1; $i <= 7; $i++) {
            // timestamp from ISO week date format
            $ts = strtotime($year . 'W' . $week . $i);
            $thisWeek[$i] = date("M d", $ts) . "\n";
        }
        $this->data['week'] = $thisWeek;
        $this->load->view('Dashboard/index', $this->data);
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
