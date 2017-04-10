<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Teams_m
 *
 * @author Murtaza
 */
class Teams_m extends MY_Model {

    public $_table = 'teams';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public $before_create = array('timestamps_before_create');
    public $before_update = array('timestamps_before_update');

    protected function timestamps_before_create($teams) {
        $teams['date_created'] = $teams['date_modified'] = date('Y-m-d H:i:s');
        return $teams;
    }

    protected function timestamps_before_update($teams) {
        $teams['date_modified'] = date('Y-m-d H:i:s');
        return $teams;
    }

    public function get_dropdown() {
        $return[''] = 'Select Teams';
        $query = $this->db->get('teams');
        foreach ($query->result_array() as $row) {
            $return[$row['id']] = $row['name'];
        }
        return $return;
    }

}


