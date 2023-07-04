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
            // echo "Thank you for Contacting Us , we will get back to you soon!";
            $subject = 'Thank You For Reaching US ';
            $message = '
                    <html>
                    <head>
                        <title>Acknowledgement</title>
                    </head>
                    <body>
                        <h1>Hello '.$inputs["fname"].' '.$inputs["lname"] .'</h1>
                        <h3>We respect Your effort For Reaching Us out</h3>
                        <p>Our Team will contact you soon </p>
                        <p>Any Issues Please Contact Us </p>
                        <p>Thank You.</p>
                        <h4>Team Bookro</h4>
                    </body>
                    </html>';
    
                      //Sending email from localhost or live server
                      $localhosts = array(
                        '::1',
                       '127.0.0.1',
                       'localhost'
                    );
          
               $protocol = 'mail';
               if (in_array($_SERVER['REMOTE_ADDR'], $localhosts)) {
                   $protocol = 'smtp';
               }
    
               $config = array(
                       'protocol' => $protocol,
                       'smtp_host' => 'ssl://smtp.googlemail.com',
                       'smtp_port' => 465,
                       'smtp_user' => 'rushirpatil491@gmail.com',
                       'smtp_pass' => 'esvvuxhrjppldkwe',
                       'mailtype' => 'html',
                       'starttls'  => true,
                       'newline'   => "\r\n",
               );
    
           $this->load->library('email');
           $this->email->initialize($config);
           $this->email->from("rushirpatil491@gmail.com");
           $this->email->to($inputs["email"]);
           $this->email->subject($subject);
           $this->email->message($message);
           $flag = $this->email->send();
           $this->load->view('users/ContactUs');
        }
        else{
            //error
            $this->load->view('users/ContactUs');
        }
    }
}
?>