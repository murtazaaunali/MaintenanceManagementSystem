<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Team_Employee_m
 *
 * @author Murtaza
 */
class Employee_Team_m extends MY_Model {

    public $_table = 'employee_to_team';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

}
