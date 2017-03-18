<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Migrate
 *
 * @author Murtaza
 */
class Migrate extends CI_Controller {

    public function index() {
        $this->load->library('migration');

        if ($this->migration->current() === FALSE) {
            show_error($this->migration->error_string());
        } else {
            echo "Migration Successful!";
        }
    }

}
