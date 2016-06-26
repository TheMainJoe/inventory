<?php

class Menu extends CI_Model {


	function getMenu ()
	{
		$query = $this->db->get('menu');
		return $query->result_array();
		// $name = $this->input->post('name');
		// $name = $this->input->post('quantity');
  //       $this->db->insert('inventory', $this, array('name' => $name,'quantity' => $quantity));

	}

}
