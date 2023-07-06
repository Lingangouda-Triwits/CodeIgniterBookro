<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRegContro extends CI_Controller {
    public function __construct() {
        parent::__construct();
        error_reporting(0);
        $this->load->model('users/customer/CustomerModel'); 
        $this->load->library('form_validation'); 

    }

    public function show() {
        $this->load->view('users/customer/CRegView');
    }

    public function insertData() {
        $data['message'] = ''; // Initialize the message variable
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
                $data['message'] = 'Email or mobile number already exists in the database.';
            } else {
                $result = $this->CustomerModel->insertData($data);

                if ($result) {
                    $data['message'] = 'Registration successful!'; // Update the success message
                } else {
                    $data['message'] = 'Failed to Register successfully!'; // Update the success message
                }
            }
        }

            // Pass the $data variable to the view
            $this->load->view('users/customer/CRegView',$data);
            
    }
}
?>