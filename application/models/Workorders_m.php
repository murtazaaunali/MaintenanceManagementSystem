<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Workorders_m
 *
 * @author Murtaza
 */
class Workorders_m extends MY_Model {

    public $_table = 'workorders';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public $before_create = array('timestamps_before_create');
    public $before_update = array('timestamps_before_update');

    protected function timestamps_before_create($workorders) {
        $workorders['date_created'] = $workorders['date_modified'] = date('Y-m-d H:i:s');
        return $workorders;
    }

    protected function timestamps_before_update($workorders) {
        $workorders['date_modified'] = date('Y-m-d H:i:s');
        return $workorders;
    }

}
