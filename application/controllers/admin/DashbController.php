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

    //to display the customer's data in the Admin Dashboard
    public function customerToAdmin() {
        $this->load->model('users/customer/CustomerModel');
        $data['customers'] = $this->CustomerModel->getAllCustomers(); // Retrieve customer data from the model
            
        $this->load->view('admin/DashboardCustView', $data); // Load the view and pass the customer data
    }
}
?>