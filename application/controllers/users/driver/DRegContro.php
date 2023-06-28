<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DRegContro extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('users/driver/DriverModel');
    }
    
    public function insertData()
    {
        $data['message'] = ''; // Initialize the message variable

        // Set form validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');

        if ($this->form_validation->run() == true) {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $password = $this->input->post('password');
            $city = $this->input->post('city');

            // Check if email or mobile already exists in the database
            if ($this->DriverModel->getByEmailOrMobile($email, $mobile)) {
                $data['message'] = 'Email or mobile number already exists in the database.';
            } else {
                // File Upload
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('photo')) {
                    $data['message'] = $this->upload->display_errors('<h3 style="color:red">', '</h3>');
                } else {
                    // File uploaded successfully
                    $fileData = $this->upload->data();
                    $filePath = $fileData['file_name'];

                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                    // Continue with database insertion and other logic
                    $insertData = array(
                        'name' => $name,
                        'email' => $email,
                        'mobile' => $mobile,
                        'password' => $hashedPassword,
                        'city' => $city,
                        'photo' => $filePath
                    );

                    $this->DriverModel->insertData($insertData);

                    $data['message'] = 'Registration successful!'; // Update the success message
                }
            }
        }
        $this->load->view('users/driver/DRegView', $data); // Pass the $data variable to the view
    }
}

?>


