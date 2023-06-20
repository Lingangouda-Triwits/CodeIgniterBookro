<?php
class HomePageCont extends CI_Controller{
    public function index(){
        $color = $this->input->post('color');
        $this->load->view('users/HomePageView',$color);

    }
}

?>