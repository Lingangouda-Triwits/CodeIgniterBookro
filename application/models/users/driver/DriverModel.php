<?php
class DriverModel extends CI_Model{

    public function insertData($data) {
        // Insert data into the 'customers' table
        return $this->db->insert('driver', $data);
    }
    
    public function getByEmailOrMobile($email, $mobile) {
        $this->db->where('email', $email);
        $this->db->or_where('mobile', $mobile);
        $query = $this->db->get('driver');
        return $query->row(); // Return a single row if found, null otherwise
    }

    public function driverLogin($email){
        $this->db->where('email', $email);
        $query = $this->db->get('driver');
        return $query->row();
    }

    public function getAllDrivers() {
        $query = $this->db->get('driver');
        return $query->result(); // Return all rows as an array of objects
    }

    public function updateDriver($id, $name, $email, $mobile, $city) {
        $data = array(
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'city' => $city
        );

        // Update the customer record in the database
        $this->db->where('slno', $id);
        $result = $this->db->update('driver', $data);

        return $result;
    }
}

?>