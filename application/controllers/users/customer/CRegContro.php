<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class DashbController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $admin = $this->session->userdata('admin');
        if(empty($admin)){
            $this->session->set_flashdata('msg','Your Session has been Expired');
            redirect(base_url().'index.php/admin/LoginCont/index');
        }
    }


    public function index(){
        $admin = $this->session->userdata('admin');
        $this->load->view('admin/DashboardView');
    }
}
?>