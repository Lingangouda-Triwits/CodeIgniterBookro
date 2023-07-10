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
            $this->session->set_flashdata('driver','Updated Successfully');
            redirect(base_url().'index.php/admin/DashbController/driverToAdmin');

        } else {
            // Error message or redirect to an error page
            $this->session->set_flashdata('driver','Failed to Update');
            redirect(base_url().'index.php/admin/DashbController/driverToAdmin');
        }
    }


    // Customer data Updation by Admin
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
            $this->session->set_flashdata('customer','Updated Successfully');
            redirect(base_url().'index.php/admin/DashbController/customerToAdmin');

        } else {
            // Error message or redirect to an error page
            $this->session->set_flashdata('customer','Failed to Update');
            redirect(base_url().'index.php/admin/DashbController/customerToAdmin');

        }
    }

    public function deleteDriver($slno) {
        $this->load->model('users/driver/DriverModel');
    
        if ($this->DriverModel->deleteDriver($slno)) {
            // Driver successfully deleted
            $this->session->set_flashdata('driver','Deleted Successfully');
            redirect(base_url().'index.php/admin/DashbController/driverToAdmin');
        } else {
            // Failed to delete the driver
            $this->session->set_flashdata('driver','Failed to Delete');
            redirect(base_url().'index.php/admin/DashbController/driverToAdmin');
        }
    }

    public function deleteCustomer($slno) {
        $this->load->model('users/customer/CustomerModel');
    
        if ($this->CustomerModel->deleteCustomer($slno)) {
            // customer successfully deleted
            $this->session->set_flashdata('customer','Deleted Successfully');
            redirect(base_url().'index.php/admin/DashbController/customerToAdmin');

        } else {
            // Failed to delete the Customer
            $this->session->set_flashdata('customer','Failed to Delete');
            redirect(base_url().'index.php/admin/DashbController/customerToAdmin');

        }
    }
 
    //showing the contactUs data to the admin
    public function data(){
        $this->load->model('admin/LoginModel');
        $data['contactData'] = $this->LoginModel->contactUsData();
        $this->load->view('admin/ContactUsData',$data);   
    }

    // showing the Completed Rides data to the admin
    public function completedRides(){
        $this->load->model('admin/LoginModel');
        $data['completedRides'] = $this->LoginModel->completedRides();
        $this->load->view('admin/CompletedRides', $data);
    }

    public function pendingsToAdmin(){
        $this->load->model('admin/LoginModel');
        $data['pendingRides'] = $this->LoginModel->pendingsToAdmin();
        $this->load->view('admin/PendingRides', $data);

    }

    public function ongoingsToAdmin(){
        $this->load->model('admin/LoginModel');
        $data['ongoingRides'] = $this->LoginModel->ongoingsToAdmin();
        $this->load->view('admin/OngoingRides', $data);
    }
}
?>