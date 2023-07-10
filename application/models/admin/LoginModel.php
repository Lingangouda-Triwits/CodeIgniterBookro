<?php
class LoginModel extends CI_Model{
    public function getByUsername($username){
        $this->db->where('username', $username);
        $admin = $this->db->get('admin')->row_array();
        return $admin;
    }

    public function contactUsData() {
        $this->db->order_by('slno', 'desc');
        return $this->db->get('contactUs');
    }

    public function completedRides(){
        $this->db->order_by('slno', 'desc');
        return $this->db->get('completed')->result();
    }


    public function pendingsToAdmin(){
        $this->db->order_by('slno', 'desc');
        return $this->db->where('status','pending')->get('requestToDriver')->result();
    }

    public function ongoingsToAdmin(){
        $this->db->order_by('slno', 'desc');
        return $this->db->where('status', 'accepted')->get('requestToDriver')->result();
    }
}

?>