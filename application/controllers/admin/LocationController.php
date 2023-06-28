<?php

class LocationController extends CI_Controller
{
    public function index()
    {
        $this->load->helper('geolocation');
        $this->load->model('admin/LocationModel');

        // Get the user's IP address
        $ip = $this->input->ip_address();

        // Get the user's location using the IP address
        $location = get_location_by_ip($ip);

        // Save the location to the database
        $this->LocationModel->saveLocation($location);

        // Pass the location data to the view
        $data['location'] = $location;

        // Load the view
        $this->load->view('admin/location_form', $data);
    }
}

?>