<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CDashboardCont extends CI_Controller{
        public function __construct(){
        parent::__construct();
        $user = $this->session->userdata('user');
        if(empty($user)){
            $this->session->set_flashdata('msg','Your Session has been Expired');
            redirect(base_url().'index.php/users/HomePageCont/index');
        }
    }

    public function index(){
        $user = $this->session->userdata('user');
        $this->load->model('users/driver/DriverModel');
        $data['drivers'] = $this->DriverModel->getAllDrivers(); // Retrieve driver data from the model
            
        $this->load->view('users/customer/CDashboardView', $data); // Load the view and pass the driver data
    }

    public function saveRequest(){
        $this->load->model('users/driver/DriverModel');
        $user = $this->session->userdata('user');
        $dataRequest = array(
        'email' => $user['email'],
        'name' => $this->input->post('name'),
        'mobile' => $this->input->post('mobile'),
        'boarding' => $this->input->post('boarding'),
        'destination' => $this->input->post('destination')
        );

        $result = $this->DriverModel->addRequestData($dataRequest);
        echo 'your request has been successfully sent!';
    }

    public function customerRequests(){
        $this->load->model('users/customer/CustomerModel');
        $data['status'] = $this->CustomerModel->getRequestStatus();
        $this->load->view('users/customer/CRequestView', $data);

    }
}
?>