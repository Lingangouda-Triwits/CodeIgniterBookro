<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DDashboardCont extends CI_Controller{

    public function index(){
        $this->load->view('users/driver/DDashboardView');
    }
}
?>