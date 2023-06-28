<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRegContro extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('users/customer/CustomerModel'); 
        $this->load->library('form_validation'); 
    }

    public function show() {
        $this->load->view('users/customer/CRegView');
    }

    public function insertData() {
        // Form validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');

        if ($this->form_validation->run() == true) {
        // Form validation passed, insert data into the database
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'city' => $this->input->post('city')
            );

            // Check if the email or mobile number already exist in the database
            $existingData = $this->CustomerModel->getByEmailOrMobile($data['email'], $data['mobile']);
            if ($existingData) {
                echo "Email or mobile number already exists."; // Display the error message
            } else {
                $result = $this->CustomerModel->insertData($data);

                if ($result) {
                    echo "Data inserted successfully!"; // Display success message
                } else {
                    echo "Failed to insert data."; // Display error message
                }
            }
        }

        else {
            // Form validation failed, show the form view with validation errors
            $this->load->view('users/customer/CRegView');
        }
            
    }
}
?>