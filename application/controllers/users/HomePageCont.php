<?php
class HomePageCont extends CI_Controller{
    public function index(){
        $this->load->view('users/HomePageView');

    }
    public function aboutUs(){
        $this->load->view('users/AboutUsView');
    }
}

?>