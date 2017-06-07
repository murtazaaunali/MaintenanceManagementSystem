<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of employees_m
 *
 * @author Murtaza
 */
class Employees_m extends MY_Model {

    public $_table = 'employees';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public $before_create = array('timestamps_before_create');
    public $before_update = array('timestamps_before_update');

    protected function timestamps_before_create($employees) {
        $employees['date_created'] = $employees['date_modified'] = date('Y-m-d H:i:s');
        

        return $employees;
    }

    protected function timestamps_before_update($employees) {
        $employees['date_modified'] = date('Y-m-d H:i:s');
        

        return $employees;
    }

    public function get_dropdown() {
        $query = $this->db->get('employees');
        foreach ($query->result_array() as $row) {
            $return[$row['id']] = $row['first_name'];
        }
        return $return;
    }

}
