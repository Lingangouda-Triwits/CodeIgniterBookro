<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CDashboardCont extends CI_Controller{
        public function __construct(){
            error_reporting(0);

        parent::__construct();
        $user = $this->session->userdata('user');
        if(empty($user)){
            $this->session->set_flashdata('msg','Your Session has been Expired');
            redirect(base_url().'index.php/users/HomePageCont/index');
        }
    }
    public function index(){
        $user = $this->session->userdata('user');
        $this->load->model('users/customer/CustomerModel');
        $data['status'] = $this->CustomerModel->getRequestStatus();
        $data['acceptedData'] = $this->CustomerModel->getDataWithAcceptedStatus($user['email']);
        $data['messages'] = [];

        if (!empty($data['acceptedData'])) {
        $data['messages'] = array($this->session->flashdata('message'));
        }
        $this->load->view('users/customer/CDashboardView', $data);
    }
    
    public function saveRequest(){
        $this->load->model('users/driver/DriverModel');
        $user = $this->session->userdata('user');
        $dataRequest = array(
        'email' => $user['email'],
        'name' => $this->input->post('name'),
        'mobile' => $this->input->post('mobile'),
        'boarding' => $this->input->post('boarding'),
        'destination' => $this->input->post('destination'),
        'totalPeople' => $this->input->post('totalPeople')
        );

        $result = $this->DriverModel->addRequestData($dataRequest);
        $this->session->set_flashdata('requestSent','your request has been successfully sent!');
        redirect(base_url().'index.php/users/customer/CDashboardCont/index');
    }

    public function completed()
    {
        $userArray = $this->session->userdata('user');
        $customerEmail = array(
            'email' => $userArray['email']
        );
        $this->load->model('users/customer/CustomerModel');
        $completeds['completeds'] = $this->CustomerModel->completed($customerEmail);
    
        $this->load->view('users/customer/CompletedView', $completeds);
    }

    public function sendReviews(){
        $userArray = $this->session->userdata('user');
        $customerEmail = array(
            'email' => $userArray['email']
        );

        $invoiceData = array(
            'email' => $userArray['email'],
            'name' => $this->input->post('nameEdit'),
            'pickup' => $this->input->post('pickupEdit'),
            'drop' => $this->input->post('dropEdit'),
            'distance' => $this->input->post('distanceEdit'),
            'totalPeople' => $this->input->post('totalPeopleEdit'),
            'total_fare' => $this->input->post('totalFareEdit'),
            'rating' => $this->input->post('rating'),
            'things' => $this->input->post('things'),
            'recs' => $this->input->post('recs')
        );

        $this->load->model('users/customer/CustomerModel');
        $result = $this->CustomerModel->sendReviews($invoiceData);

        if($result){
            echo 'your review successfully submitted';

        }else{
            echo 'failed to send review';
        }
        

    }
    

}
?>