
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CLogContro extends CI_Controller{

    public function index(){
        $this->load->library('form_validation');
        $this->load->view('users/customer/CLogView');
        
    }

    public function check(){

        $this->load->library('form_validation');
        $this->load->model('users/customer/CustomerModel');

        $this->form_validation->set_rules('email','Email', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');

        if($this->form_validation->run() == true){
            $email = $this->input->post('email');
            $user = $this->CustomerModel->customerLogin($email);
        
            if (!empty($user)) {
                $password = $this->input->post('password');

                if (password_verify($password, $user->password)) {
                    $userArray['email'] = $user->email;
                    $this->session->set_userdata('user',$userArray);
                    redirect(base_url().'index.php/users/customer/CDashboardCont/index');
                    // echo "Login successful! ";

                }else {
                    $this->session->set_flashdata('msg','Password is incorrect');
                    redirect(base_url().'index.php/users/customer/CLogContro/index');
                    // echo "Invalid password!";
                }
            } else {
                $this->session->set_flashdata('msg','User not registered!');
                redirect(base_url().'index.php/users/customer/CLogContro/index');
            // echo "Invalid Email!";
            }
        }   
        else{
            //error
            $this->load->view('users/customer/CLogView');
        }

    }

    public function logout(){
        $this->session->unset_userdata('user');
        redirect(base_url().'index.php/users/HomePageCont');
    }
}
?>
