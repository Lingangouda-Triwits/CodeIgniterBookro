<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class CLogContro extends CI_Controller{


    public function index(){
        $this->load->view('users/customer/CLogView');
    }
}
?>