<?php
class ContactUsModel extends CI_Model{
    public function contact($inputs) {
        // Insert data into the 'contact_us' table
        return $this->db->insert('contactUs', $inputs);
    }
    public function contactUsData() {
        return $this->db->get('contactUs');
    }
    
}
?>