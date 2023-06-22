<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class DashbController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $admin = $this->session->userdata('admin');
        if(empty($admin)){
            $this->session->set_flashdata('msg','Your Session has been Expired');
            redirect(base_url().'index.php/admin/LoginCont/index');
        }
    }


    public function index(){
        $admin = $this->session->userdata('admin');
        $this->load->view('admin/DashboardView');
    }

    //to display the customer's data in the Admin Dashboard
    public function customerToAdmin() {
        $this->load->model('users/customer/CustomerModel');
        $data['customers'] = $this->CustomerModel->getAllCustomers(); // Retrieve customer data from the model
            
        $this->load->view('admin/CustomerDataToAdminView', $data); // Load the view and pass the customer data
    }

    //to display the driver's data in the Admin Dashboard
    public function driverToAdmin() {
        $this->load->model('users/driver/DriverModel');
        $data['drivers'] = $this->DriverModel->getAllDrivers(); // Retrieve driver data from the model
            
        $this->load->view('admin/DriverDataToAdminView', $data); // Load the view and pass the driver data
    }

    // Driver data Updtion by Admin
    public function updateDriver() {
        $id = $this->input->post('slnoEdit');
        $name = $this->input->post('nameEdit');
        $email = $this->input->post('emailEdit');
        $mobile = $this->input->post('mobileEdit');
        $city = $this->input->post('cityEdit');

        $this->load->model('users/driver/DriverModel');

        // Call the updateCustomer method in the model
        $result = $this->DriverModel->updateDriver($id, $name, $email, $mobile, $city);

        if ($result) {
            // Success message or redirect to a success page
            echo 'successfully updated'; // Change 'customer/list' to the appropriate URL
        } else {
            // Error message or redirect to an error page
            echo 'failed to update'; // Change 'customer/list' to the appropriate URL
        }
    }
}
?>