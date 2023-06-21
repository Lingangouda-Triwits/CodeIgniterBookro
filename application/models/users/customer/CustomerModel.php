<?php
class CustomerModel extends CI_Model{

    public function insertData($data) {
        // Insert data into the 'customers' table
        return $this->db->insert('customer', $data);
    }
    
    public function getByEmailOrMobile($email, $mobile) {
        $this->db->where('email', $email);
        $this->db->or_where('mobile', $mobile);
        $query = $this->db->get('customer');
        return $query->row(); // Return a single row if found, null otherwise
    }

    public function customerLogin($email){
        $this->db->where('email', $email);
        $query = $this->db->get('customer');
        return $query->row();
    }
}
    
?>