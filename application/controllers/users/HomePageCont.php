<?php
class HomePageCont extends CI_Controller{
    public function index(){
        error_reporting(0);

        $this->load->view('users/HomePageView');

    }
    public function aboutUs(){
        $this->load->view('users/AboutUsView');
    }
}

?>