<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Locations_m
 *
 * @author Murtaza
 */
class Locations_m extends MY_Model {

    public $_table = 'locations';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public $before_create = array('timestamps_before_create');
    public $before_update = array('timestamps_before_update');

    protected function timestamps_before_create($locations) {
        $locations['date_created'] = $locations['date_modified'] = date('Y-m-d H:i:s');
        return $locations;
    }

    protected function timestamps_before_update($locations) {
        $locations['date_modified'] = date('Y-m-d H:i:s');
        return $locations;
    }

    public function get_dropdown() {
        $return[''] = 'Select Location';
        $query = $this->db->where('status','1')->get('locations');
        foreach ($query->result_array() as $row) {
            $return[$row['id']] = $row['name'];
        }
        return $return;
    }

}
