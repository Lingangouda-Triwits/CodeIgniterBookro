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
    
    public function updateDriver($name, $email, $mobile, $city) {
        date_default_timezone_set('Asia/Kolkata');
        $data = array(
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'city' => $city,
            'time_stamp' => date('Y-m-d H:i:s')
        );

        // Update the customer record in the database
        $this->db->where('email', $email);
        $result = $this->db->update('driver', $data);

        return $result;
    }

        public function deleteDriver($slno) {
            // Delete the driver from the database based on the email
            $this->db->where('slno', $slno);
            $this->db->delete('driver');
    
            // Check if the delete operation was successful
            return $this->db->affected_rows() > 0;
        }
    
    
}

?>