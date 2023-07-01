<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DDashboardCont extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $driver = $this->session->userdata('driver');
        if(empty($driver)){
            $this->session->set_flashdata('msg','Your Session has been Expired');
            redirect(base_url().'index.php/users/driver/DLogContro/index');
        }
    }

    public function index() {
        $driverArray = $this->session->userdata('driver');
        
        $this->load->model('users/driver/DriverModel');
        $photoData = $this->DriverModel->getPhoto($driverArray);
        $data['photo'] = $photoData['photo']; // Fetching the Photo of the driver
     
        $data['requests'] = $this->DriverModel->getRequest(); // Retrieve requests data from the model
        $this->load->view('users/driver/DDashboardView', $data);
        
    }

      
    public function acceptRequest($slno){
        $this->load->model('users/driver/DriverModel');

        if ($this->DriverModel->acceptRequestStatus($slno)) {
            // customer successfully Accepted
            echo '<script>alert("Request Accepted Successfully.");</script>';
        } else {
            // Failed to Accept the Customer
            echo '<script>alert("Failed to Accept the Request.");</script>';
        }
    }

    public function customerRequests(){
        $driverArray = $this->session->userdata('driver');
        $this->load->model('users/driver/DriverModel');
        $photoData = $this->DriverModel->getPhoto($driverArray);
        $data['photo'] = $photoData['photo']; // Fetching the photo
        $data['status'] = $this->DriverModel->getRequestStatus();
        $this->load->view('users/driver/DRequestView', $data);

    }

    public function invoice()
    {
        $this->load->library('form_validation');
    
        // Set validation rules for the form fields
        $this->form_validation->set_rules('nameEdit', 'Name', 'required');
        $this->form_validation->set_rules('pickupEdit', 'Pickup', 'required');
        $this->form_validation->set_rules('dropEdit', 'Drop', 'required');
        $this->form_validation->set_rules('distance', 'Distance', 'required');
        $this->form_validation->set_rules('totalFare', 'Total Fare', 'required');
    
        if ($this->form_validation->run() == true) {
            $userArray = $this->session->userdata('driver');
    
            $invoiceData = array(
                'demail' => $userArray['email'],
                'name' => $this->input->post('nameEdit'),
                'pickup' => $this->input->post('pickupEdit'),
                'drop' => $this->input->post('dropEdit'),
                'distance' => $this->input->post('distance'),
                'total_fare' => $this->input->post('totalFare')
            );
    
            $this->load->model('users/driver/DriverModel');
    
            if ($this->DriverModel->saveInvoice($invoiceData)) {
                echo "Success! Invoice saved.";
    
                // Perform any additional actions or redirection as needed
            } else {
                echo "Failed to save the invoice. Please try again.";
            }
        } else {
            echo "Validation failed. Please check the form and try again.";
        }
    }
    
}
?>