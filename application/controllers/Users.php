<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author Murtaza
 */
class Users extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function login() {
        // Method should not be directly accessible
        if ($this->uri->uri_string() == 'examples/login')
            show_404();

        if ($this->input->post())
            $this->require_min_level(1);

        $this->setup_login_form();

        $this->output->set_title('Primo CMMS | Login');
        $this->output->set_template('simple');

        $this->load->view('Users/login_form');
    }

    public function logout() {
        $this->authentication->logout();

        // Set redirect protocol
        $redirect_protocol = USE_SSL ? 'https' : NULL;
        redirect(site_url(LOGIN_PAGE . '?logout=1', $redirect_protocol));
    }

    public function index() {
        $this->output->set_title('Primo CMMS | Users');
        $this->output->set_template('default');
    }

    public function create() {
        
    }

    public function delete() {
        
    }

    public function recover() {
        
    }

}
