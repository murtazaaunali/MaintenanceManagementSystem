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
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        $this->load->model('Workorders_m');
        $this->load->model('Employees_m');
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
            $thisWeek[] = date("M d", $ts);
        }
        if ($this->ion_auth->is_admin()) {
            foreach ($thisWeek as $day) {
                $day = date('Y-m-d', strtotime($day));
                $workorders[] = $this->Workorders_m->count_by(array('status' => 4, 'date_modified LIKE' => $day . '%'));
            }
            $this->data['number_open_workorders'] = $this->Workorders_m->count_by(array('status' => 1));
            $this->data['number_closed_workorders'] = $this->Workorders_m->count_by(array('status' => 2));
            $this->data['number_hold_workorders'] = $this->Workorders_m->count_by(array('status' => 3));
            $this->data['number_completed_workorders'] = $this->Workorders_m->count_by(array('status' => 0));
            $this->data['all_employees']= $this->Employees_m->get_all();
        } else {
            $user = $this->ion_auth->user()->row();
            foreach ($thisWeek as $day) {
                $day = date('Y-m-d', strtotime($day));
                $workorders[] = $this->Workorders_m->count_by(array('employee_id' => $user->id, 'status' => 0, 'date_modified LIKE' => $day . '%'));
            }
        }
        $this->data['week'] = $thisWeek;
        $this->data['workorders_this_week'] = $workorders;
        $this->load->view('Dashboard/index', $this->data);
    }
}
