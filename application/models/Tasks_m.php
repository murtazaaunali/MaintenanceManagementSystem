<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tasks_m
 *
 * @author Murtaza
 */
class Tasks_m extends MY_Model {

    public $_table = 'tasks';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public $before_create = array('timestamps_before_create');
    public $before_update = array('timestamps_before_update');

    protected function timestamps_before_create($tasks) {
        $tasks['date_created'] = $tasks['date_modified'] = date('Y-m-d H:i:s');
        return $tasks;
    }

    protected function timestamps_before_update($tasks) {
        $tasks['date_modified'] = date('Y-m-d H:i:s');
        return $tasks;
    }

    public function get_dropdown() {
        $return[''] = 'Select Task';
        $query = $this->db->get('task_types');
        foreach ($query->result_array() as $row) {
            $return[$row['id']] = $row['type'];
        }
        return $return;
    }

}
