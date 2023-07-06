<?php
class LoginModel extends CI_Model{
    public function getByUsername($username){
        $this->db->where('username', $username);
        $admin = $this->db->get('admin')->row_array();
        return $admin;
    }

    public function contactUsData() {
        return $this->db->get('contactUs');
    }

    public function completedRides(){
        return $this->db->get('completed');
    }
}

?>