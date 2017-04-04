<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author GoBrig Support
 */
class Login extends CI_Controller {
    

    function __construct() {
        parent::__construct();
        $this->output->set_title('Primo CMMS | Teams');
        $this->output->set_template('simple');
    }

    public function index() {
        $this->data['page_title'] = 'Login';
        $this->load->view("Login/Index", $this->data);
    }

}
