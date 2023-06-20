<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class DLogContro extends CI_Controller{


    public function index(){
        $this->load->view('users/driver/DLogView');
    }
}
?>