<?php
class LocationModel extends CI_Model
{
    public function saveLocation($locationData)
    {
        $this->db->insert('user_locations', $locationData);
        return $this->db->insert_id();
    }
}

?>
