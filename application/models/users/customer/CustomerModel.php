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

    public function getAllCustomers() {
        $this->db->order_by('slno', 'desc');
        $query = $this->db->get('customer');
        return $query->result(); // Return all rows as an array of objects
    }

    public function updateCustomer($name, $email, $mobile, $city) {
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
        $result = $this->db->update('customer', $data);
        return $result;
    }

    
    public function deleteCustomer($slno) {
        // Delete the customer from the database based on the email
        $this->db->where('slno', $slno);
        $this->db->delete('customer');

        // Check if the delete operation was successful
        return $this->db->affected_rows() > 0;
    }

    public function getRequestStatus(){
        $user = $this->session->userdata('user');
        $result = $this->db->where('email',$user['email'])->order_by('slno', 'desc')->get('requestToDriver')->result();
        return $result;
    }

        public function getDataWithAcceptedStatus($email) {
            $this->db->where('status', 'accepted');
            $this->db->where('email', $email);
            $query = $this->db->get('requestToDriver');
    
            return $query->result();
        }
    

    public function completed($customerEmail)
    {
        $this->db->where('email', $customerEmail['email']);
        $this->db->order_by('slno', 'desc'); // Replace 'column_name' with the actual column name to order by
        return $this->db->get('completed')->result();
    }
    
    public function sendReviews($invoiceData){

            
            $this->db->where('email', $invoiceData['email']);
            $this->db->where('name', $invoiceData['name']);
            $this->db->where('pickup', $invoiceData['pickup']);
            $this->db->where('drop', $invoiceData['drop']);
            $this->db->where('distance', $invoiceData['distance']);
            $this->db->where('totalPeople', $invoiceData['totalPeople']);
            $this->db->where('total_fare', $invoiceData['total_fare']);
            $this->db->set('rating', $invoiceData['rating']);
            $this->db->set('things', $invoiceData['things']);
            $this->db->set('recs', $invoiceData['recs']);
            $this->db->update('completed');
            return $this->db->affected_rows() > 0;
    }

    
}
    
?>