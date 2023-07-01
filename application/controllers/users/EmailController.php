<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// class Email_send extends CI_Controller {

//     public function index()
//     {
//         $this->load->view('users/email_send');
//     }

//     public function send()
//     {
//         $this->load->library('email'); // Load the email library
//         $this->load->library('session'); // Load the session library

//         $to = $this->input->post('from');  // User email passed here
//         $subject = 'Welcome To Elevenstech';
//         $from = 'rushirpatil491@gmail.com'; // Pass here your mail id
//         $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="http://elevenstechwebtutorials.com/assets/logo/logo.png" width="300px" vspace=10 /></td></tr>';
//         $emailContent .='<tr><td style="height:20px"></td></tr>';
//         $emailContent .= $this->input->post('message');  // Post message available here
//         $emailContent .='<tr><td style="height:20px"></td></tr>';
//         $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://elevenstechwebtutorials.com/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.elevenstechwebtutorials.com</a></p></td></tr></table></body></html>";

//         $config = array(); // Initialize the config array
//         $config['protocol']    = 'smtp';
//         $config['smtp_host']    = 'ssl://smtp.gmail.com';
//         $config['smtp_port']    = '465';
//         $config['smtp_timeout'] = '60';
//         $config['smtp_user']    = 'rushirpatil491@gmail.com';    // Important
//         $config['smtp_pass']    = 'Appleiphone@6';  // Important
//         $config['charset']    = 'utf-8';
//         $config['newline']    = "\r\n";
//         $config['mailtype'] = 'html'; // or html
//         $config['validation'] = TRUE; // bool whether to validate email or not

//         $this->email->initialize($config);
//         $this->email->set_mailtype("html");
//         $this->email->from($from);
//         $this->email->to($to);
//         $this->email->subject($subject);
//         $this->email->message($emailContent);
//         $this->email->send();

//         $this->email->print_debugger();
//         $this->session->set_flashdata('msg', "Mail has been sent successfully");
//         $this->session->set_flashdata('msg_class', 'alert-success');
//         return redirect('users/email_send');
//     }
// }










defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('users/email/contact');
    }

    function send() {
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $this->input->post('to');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
}
?>

