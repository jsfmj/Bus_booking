<?php
class logi extends CI_Model 
{
	
	function saverecords($data)
	{
        $this->db->insert('login',$data);
        return true;
	}
	public function checkLogin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password); 
        $query = $this->db->get('login');

        return $query->num_rows() > 0;
    }
		public function getAvailableBuses($source, $destination, $date)
    {
        // Query the database to retrieve available buses
        $this->db->select('*');
        $this->db->from('buses');
        $this->db->where('source', $source);
        $this->db->where('destination', $destination);
        $this->db->where('date', $date);

        $query = $this->db->get();

        return $query->result();
    }
    public function getSeatsByBus($bus_name)
{
    $this->db->select('*');
    $this->db->from('seats');
    $this->db->where('bus_name', $bus_name);
    // return $this->db->get('seats')->result();
    $query = $this->db->get();

        return $query->result();
}

public function bookSelectedSeats($bus_name, $selectedSeats)
{
    $this->db->where('bus_name', $bus_name);
    $this->db->where_in('seat_number', $selectedSeats);
    $this->db->update('seats', array('is_available' => FALSE));
}
}