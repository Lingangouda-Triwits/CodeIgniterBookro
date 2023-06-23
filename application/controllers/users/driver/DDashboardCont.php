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
    public function index() {
        $userArray = $this->session->userdata('user');
        
        
        $this->load->model('users/driver/DriverModel');
        $photoData = $this->DriverModel->getPhoto($userArray);
        $data['photo'] = $photoData['photo']; // Assuming the column name is 'photo'
        
        $this->load->view('users/driver/DDashboardView', $data);
    }
    
    
}

?>