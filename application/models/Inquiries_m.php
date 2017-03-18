<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inquiries_m
 *
 * @author GoBrig Support
 */
class Inquiries_m extends MY_Model {

    public $_table = 'Inquiries';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public $before_create = array('timestamps_before_create');
    public $before_update = array('timestamps_before_update');


  protected function timestamps_before_create($inquiries) {
        $inquiries['date_created'] = $inquiries['date_modified'] = date('Y-m-d H:i:s');
        return $inquiries;
    }

    protected function timestamps_before_update($inquiries) {
        $inquiries['date_modified'] = date('Y-m-d H:i:s');
        return $inquiries;
    }
    }