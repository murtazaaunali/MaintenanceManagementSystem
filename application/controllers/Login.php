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
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        $this->output->set_title('Primo CMMS | Teams');
        $this->output->set_template('simple');
    }

    public function index() {
        $this->data['page_title'] = 'Login';
        $this->load->view("Login/index", $this->data);
    }

}
