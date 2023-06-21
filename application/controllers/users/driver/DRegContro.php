<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class DRegContro extends CI_Controller{


    public function __construct() {
        parent::__construct();
        $this->load->model('users/driver/DriverModel'); 
        $this->load->library('form_validation'); 
    }

    public function show() {
        $this->load->view('users/driver/DRegView');
    }

    public function insertData(){
        //Load the file helper
        $this->load->helper('file');
        
        // Form validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('photo', 'Photo', 'required');



    }
    
}
?>




    // public function index() {
    //     $data['message'] = ''; // Initialize the message variable

    //     if ($this->input->post('register')) {
    //         $name = $this->input->post('name');
    //         $email = $this->input->post('email');
    //         $phone = $this->input->post('phone');
    //         $password = $this->input->post('password');

    //         // File Upload
    //         $config['upload_path'] = './uploads/';
    //         $config['allowed_types'] = 'gif|jpg|jpeg|png';
    //         $this->load->library('upload', $config);

    //         if (!$this->upload->do_upload('file')) {
    //             $data['message'] = $this->upload->display_errors('<h3 style="color:red">', '</h3>');
    //         } else {
    //             // File uploaded successfully
    //             $fileData = $this->upload->data();
    //             $filePath = $fileData['file_name']; 

    //             // Continue with database insertion and other logic
    //             $this->load->model('RegModel');
    //             $data = $this->RegModel->insert_data($name, $email, $phone, $password, $filePath);

    //             $data['message'] = $data['message']; // Update the message from the model
    //         }
    //     }

    //     $this->load->view('RegView', $data); // Pass the $data variable to the view
    // }




<?php

 function insertData(){

    $this->load->helper('file');
    $config['upload_path'] = './uploads/'; 
    $config['allowed_types'] = 'jpg|jpeg|png'; 
    $config['max_size'] = 2048; 

    $this->load->library('upload', $config);

    // Form validation rules
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('mobile', 'Mobile', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('city', 'City', 'required');
    $this->form_validation->set_rules('photo', 'Photo', 'required');

    if ($this->form_validation->run() == FALSE) {
        // Form validation failed, handle the error
        $this->load->view('users/driver/DRegView');
    } else {
        // Form validation passed, proceed with data insertion and photo upload

        if (!$this->upload->do_upload('photo')) {
            // You can add code here to display the file upload error or redirect back to the registration form
        } else {
            // File upload succeeded, get the uploaded file data
            $uploadData = $this->upload->data();
            $photoPath = $uploadData['file_name']; // Get the uploaded photo file name

            // Get the form data
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'password' => $this->input->post('password'),
                'city' => $this->input->post('city'),
                'photo' => $photoPath, // Save the uploaded photo file name in the 'photo' field
                // You can add more fields here based on your database table structure
            );

            // Insert data into the 'driver' table using the DriverModel
            $this->DriverModel->insertData($data);

            // You can add code here to handle the successful data insertion,
            // such as displaying a success message or redirecting to another page
        }
    }
}
?>