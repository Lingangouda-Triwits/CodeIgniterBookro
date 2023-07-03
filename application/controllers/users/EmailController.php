<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {

    public function index() {
        $this->load->view('users/email/contact');
    }

    public function send(){
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $subject = 'Thank You For Reaching US ';
        $message = '
                <html>
                <head>
                    <title>Acknowledgement</title>
                </head>
                <body>
                    <h1>Hello '.$name.'</h1>
                    <h3>We respect Your effort For Reaching Us out</h3>
                    <p>Our Team will contact you soon </p>
                    <p>Any Issues Please Contact Us </p>
                    <p>Email: lifeevent@gmail.com</p>
                    <p>Thank Your.</p>
                    <h4>Team LifeevenT</h4>
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
       $this->email->to("$email");
       $this->email->subject("Thank for Reaching Us Out");
       $this->email->message($message);
       $flag = $this->email->send();

       if($flag){
            echo '<script>alert("Mail Is sent kindly check the Mail")</script>';
        
      
       }else{
           echo '<script>alert("UNABLE TO SEND THE MAIL")</script>';
        
          
       }
    }


}
?>

