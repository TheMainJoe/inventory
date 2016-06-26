<?php

class Order extends CI_Model {

	public function getOrders()
	{
		$query = $this->db->get_where('order');
		return $query->result_array();
	}

	public function getPaid()
	{

	}

}
