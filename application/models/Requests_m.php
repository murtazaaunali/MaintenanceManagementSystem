<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Requests_m extends MY_Model {

    public $_table = 'requests';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public $before_create = array('timestamps_before_create');
    public $before_update = array('timestamps_before_update');


  protected function timestamps_before_create($requests) {
        $requests['date_created'] = $requests['date_modified'] = date('Y-m-d H:i:s');
        return $requests;
    }

    protected function timestamps_before_update($requests) {
        $requests['date_modified'] = date('Y-m-d H:i:s');
        return $requests;
    }
    }