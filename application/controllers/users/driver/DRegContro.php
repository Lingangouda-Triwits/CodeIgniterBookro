<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class DRegContro extends CI_Controller{


    public function __construct() {
        parent::__construct();
        $this->load->model('users/driver/DriverModel'); 
        $this->load->library('form_validation'); 
    }

    public function show() {
        $this->load->view('users/driver/DRegView');
    }

    public function insertData(){
        // Form validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('photo', 'Photo', 'required');


    }
}
?>