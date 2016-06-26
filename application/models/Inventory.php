<?php

class Inventory extends CI_Model {

	public function getinv()
	{
		$query = $this->db->get('inventory');
		return $query->result_array();
	}

	public function addinv($data)
	{
		$this->db->insert('inventory', $data); 
        return $this->db->insert_id();
	}

}