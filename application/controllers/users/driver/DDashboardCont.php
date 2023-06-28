<?php
// defined('BASEPATH') or exit('No direct script access allowed');

// class DDashboardCont extends CI_Controller{
//     public function __construct(){
//         parent::__construct();
//         $driver = $this->session->userdata('user');
//         if(empty($driver)){
//             $this->session->set_flashdata('msg', 'Your Session has been Expired');
//             redirect(base_url().'index.php/users/driver/DLogContro');
//         }
//     }

//     public function index(){
//         $data['userArray'] = $this->session->userdata('user');

//         $this->load->view('users/driver/DDashboardView', $data);
//     }

// }

defined('BASEPATH') or exit('No direct script access allowed');

class DDashboardCont extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $driver = $this->session->userdata('driver');
        if(empty($driver)){
            $this->session->set_flashdata('msg','Your Session has been Expired');
            redirect(base_url().'index.php/users/driver/DLogContro/index');
        }
    }

    public function index() {
        $driverArray = $this->session->userdata('driver');
        
        $this->load->model('users/driver/DriverModel');
        $photoData = $this->DriverModel->getPhoto($driverArray);
        $data['photo'] = $photoData['photo']; // Assuming the column name is 'photo'
     
        $data['requests'] = $this->DriverModel->getRequest(); // Retrieve requests data from the model
        $this->load->view('users/driver/DDashboardView', $data);
        
    }

    public function deleteRequest($slno){
        $this->load->model('users/driver/DriverModel');

        if ($this->DriverModel->deleteRequestData($slno)) {
            // customer successfully deleted
            echo '<script>alert("Request Rejected Successfully.");</script>';
        } else {
            // Failed to delete the Customer
            echo '<script>alert("Failed to Reject the Request.");</script>';
        }
    }

    public function acceptRequest($slno){
        $this->load->model('users/driver/DriverModel');

        if ($this->DriverModel->acceptRequestStatus($slno)) {
            // customer successfully Accepted
            echo '<script>alert("Request Accepted Successfully.");</script>';
        } else {
            // Failed to Accept the Customer
            echo '<script>alert("Failed to Accept the Request.");</script>';
        }
    }

    
    
    
}

?>