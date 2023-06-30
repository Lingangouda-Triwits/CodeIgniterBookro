<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DLogContro extends CI_Controller{

    public function index(){
        $this->load->library('form_validation');
        $this->load->view('users/driver/DLogView');
    }

    public function check(){

        $this->load->library('form_validation');
        $this->load->model('users/driver/DriverModel');

        $this->form_validation->set_rules('email','Email', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');

        if($this->form_validation->run() == true){
            $email = $this->input->post('email');
            $driver = $this->DriverModel->driverLogin($email);
        
            if (!empty($driver)) {
                $password = $this->input->post('password');

                if (password_verify($password, $driver->password)) {
                    $userArray['email'] = $driver->email;
                    // Fetch the name based on email
                    $this->db->select('name');
                    $this->db->from('driver');
                    $this->db->where('email', $driver->email);
                    $query = $this->db->get();
                    $row = $query->row();
                    $userArray['name'] = $row->name;
                    $this->session->set_userdata('driver', $userArray);
                    redirect(base_url().'index.php/users/driver/DDashboardCont/index');
                    // echo "Login successful! ";
                }
                else {
                    $this->session->set_flashdata('msg','Password is incorrect');
                    redirect(base_url().'index.php/users/driver/DLogContro/index');
                    // echo "Invalid password!";
                }
            } else {
                $this->session->set_flashdata('msg','User not registered!');
                redirect(base_url().'index.php/users/driver/DLogContro/index');
            // echo "Invalid Email!";
            }
        }   
        else{
            //error
            $this->load->view('users/driver/DLogView');
        }

    }

    public function logout(){
        $this->session->unset_userdata('driver');
        redirect(base_url().'index.php/users/HomePageCont/index');
    }
}
?>
