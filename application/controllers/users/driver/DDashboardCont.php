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
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $userArray = $this->session->userdata('user');
        
        $this->load->model('users/driver/DriverModel');
        $data['photo'] = $this->DriverModel->getPhoto($userArray);
        
        $this->load->view('users/driver/DDashboardView', $data);
    }
    
}

?>