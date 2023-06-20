<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CLogContro extends CI_Controller{

    public function index(){
        $this->load->view('users/customer/CLogView');
    }

    public function check(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('users/customer/CustomerModel');
        $user = $this->CustomerModel->customerLogin($username);

        if ($user) {
            if (password_verify($password, $user->password)) {
                echo "Login successful!";
            } else {
                echo "Invalid password!";
            }
        } else {
            echo "Invalid username!";
        }
    }
}
?>
