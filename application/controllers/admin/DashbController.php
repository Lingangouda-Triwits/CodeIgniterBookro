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

    // Driver data Updation by Admin
    public function updateDriver() {
        $name = $this->input->post('nameEdit');
        $email = $this->input->post('emailEdit');
        $mobile = $this->input->post('mobileEdit');
        $city = $this->input->post('cityEdit');

        $this->load->model('users/driver/DriverModel');

        // Call the updateDriver method in the model
        $result = $this->DriverModel->updateDriver($name, $email, $mobile, $city);

        if ($result) {
            // Success message or redirect to a success page
            echo '<script>alert("successfully updated");</script>';

        } else {
            // Error message or redirect to an error page
            echo 'failed to update';
        }
    }


    // Customer data Updtaion by Admin
    public function updateCustomer() {
        $name = $this->input->post('nameEdit');
        $email = $this->input->post('emailEdit');
        $mobile = $this->input->post('mobileEdit');
        $city = $this->input->post('cityEdit');

        $this->load->model('users/customer/CustomerModel');

        // Call the updateCustomer method in the model
        $result = $this->CustomerModel->updateCustomer($name, $email, $mobile, $city);

        if ($result) {
            // Success message or redirect to a success page
            echo '<script>alert("successfully updated");</script>';

        } else {
            // Error message or redirect to an error page
            echo '<script>alert("Failed to update");</script>'; 
        }
    }

    public function deleteDriver($slno) {
        $this->load->model('users/driver/DriverModel');
    
        if ($this->DriverModel->deleteDriver($slno)) {
            // Driver successfully deleted
            echo '<script>alert("Driver deleted.");</script>';
        } else {
            // Failed to delete the driver
            echo '<script>alert("Failed to delete driver.");</script>';
        }
    }

    public function deleteCustomer($slno) {
        $this->load->model('users/customer/CustomerModel');
    
        if ($this->CustomerModel->deleteCustomer($slno)) {
            // customer successfully deleted
            echo '<script>alert("Customer deleted.");</script>';
        } else {
            // Failed to delete the Customer
            echo '<script>alert("Failed to delete Customer.");</script>';
        }
    }
 
    
    
}
?>