<?php
class ContactUs extends CI_Controller{
    public function index(){
        $this->load->view('users/ContactUs');
    }
     
    public function contact(){
        $this->load->library('form_validation');
        $this->load->model('users/ContactUsModel');

        $this->form_validation->set_rules('fname','First Name', 'trim|required');
        $this->form_validation->set_rules('lname','Last Name', 'trim|required');
        $this->form_validation->set_rules('email','Email Address', 'trim|required');
        $this->form_validation->set_rules('message','Message', 'trim|required');

        if ($this->form_validation->run() == true) {
            // Success
            $inputs = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message')
            );
        
            $this->ContactUsModel->contact($inputs);    
            echo "Thank you for Contacting Us , we will get back to you soon!";
        }
        else{
            //error
            $this->load->view('users/ContactUs');

        }

    }
    public function data(){
        $this->load->model('users/ContactUsModel');
        $data['contactData'] = $this->ContactUsModel->contactUsData();
        $this->load->view('users/ContactUsData',$data);
        
    }
}
?>