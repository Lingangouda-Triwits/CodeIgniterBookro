<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DDashboardCont extends CI_Controller {
    public function __construct(){
        parent::__construct();
        error_reporting(0);

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

    public function rejectRequest($slno){
        $this->load->model('users/driver/DriverModel');

        if ($this->DriverModel->rejectRequestStatus($slno)) {
            // customer successfully Accepted
            echo '<script>alert("Request Rejected Successfully.");</script>';
        } else {
            // Failed to Accept the Customer
            echo '<script>alert("Failed to Reject the Request.");</script>';
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
            $this->load->model('users/driver/DriverModel');
            
            $userArray = $this->session->userdata('driver');
            $invoiceData = array(
                'demail' => $userArray['email'],
                'name' => $this->input->post('nameEdit'),
                'pickup' => $this->input->post('pickupEdit'),
                'drop' => $this->input->post('dropEdit'),
                'distance' => $this->input->post('distance'),
                'totalPeople' => $this->input->post('totalPeople'),
                'total_fare' => $this->input->post('totalFare')
            );

            $email = $this->DriverModel->fetchEmailFromRequestToDriver($invoiceData);
            
            if ($email !== false) {
                // The email is fetched successfully
                echo "Fetched email: ";
            } else {
                // Failed to fetch the email
                echo "Failed to fetch the email from the requesttodriver table.";
            }

            $invoiceData = array(
                'email' =>$email,
                'demail' => $userArray['email'],
                'name' => $this->input->post('nameEdit'),
                'pickup' => $this->input->post('pickupEdit'),
                'drop' => $this->input->post('dropEdit'),
                'distance' => $this->input->post('distance'),
                'totalPeople' => $this->input->post('totalPeople'),
                'total_fare' => $this->input->post('totalFare')
            );
        
            
                // Insert into completed table
                if ($this->DriverModel->moveToCompleted($invoiceData)) {
                    // Delete from requesttodriver table
                    if ($this->DriverModel->deleteFromRequestToDriver($invoiceData['demail'], $invoiceData['name'], $invoiceData['pickup'], $invoiceData['drop'])) {
                        echo "Success! Invoice saved and moved to the completed table.";
                        // Perform any additional actions or redirection as needed
                    } else {
                        echo "Failed to delete the request from the requesttodriver table.";
                    }
                } else {
                    echo "Failed to insert the invoice into the completed table.";
                }
            
        } else {
            echo "Validation failed. Please check the form and try again.";
        }
        
    }
    public function completed()
    {
        $userArray = $this->session->userdata('driver');
        $driverEmail = array(
            'demail' => $userArray['email']
        );
        $this->load->model('users/driver/DriverModel');
        $completeds['completeds'] = $this->DriverModel->completed($driverEmail);
        $photoData = $this->DriverModel->getPhoto($userArray);
        $completeds['photo'] = $photoData['photo']; // Fetching the Photo of the driver
        
    
        $this->load->view('users/driver/CompletedView', $completeds);
    }

    public function updateProfileView(){
        $userArray = $this->session->userdata('driver');
        $driverEmail = array(
            'demail' => $userArray['email']
        );
        $this->load->model('users/driver/DriverModel');
        $photoData = $this->DriverModel->getPhoto($userArray);
        $photo['photo'] = $photoData['photo']; // Fetching the Photo of the driver
        $this->load->view('users/driver/ProfileUpdate',$photo);
    }

    public function updateProfile(){
        $this->load->library('form_validation');
    
        // Set validation rules for the form fields
        $this->form_validation->set_rules('carName', 'Car Name', 'required');
        $this->form_validation->set_rules('carNum', 'Car Number', 'required');
        $this->form_validation->set_rules('licenseNum', 'License Number', 'required');
        $this->form_validation->set_rules('rcCard', 'RC Card', 'required');
        $this->form_validation->set_rules('aadharNum', 'Aadhar Number', 'required');
    
        if ($this->form_validation->run() == true) {
            $this->load->model('users/driver/DriverModel');
            
            $profileUpdate = array(
                'carName' => $this->input->post('carName'),
                'carNum' => $this->input->post('carNum'),
                'licenseNum' => $this->input->post('licenseNum'),
                'rcCard' => $this->input->post('rcCard'),
                'aadharNum' => $this->input->post('aadharNum')
            );
            $this->DriverModel->profileUpdate($profileUpdate);
            echo "Profile updated successfully!";

        } 
        else {
            echo "Validation failed. Please check again.";
        }

    }
    
}
?>