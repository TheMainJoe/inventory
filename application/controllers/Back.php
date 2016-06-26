<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('inventory');
		$this->load->model('order');
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}

	public function output()
	{
		$this->load->view('admin/output');
	}

	public function inventory()
	{
		$data['items'] = $this->inventory->getinv();
		$this->load->view('admin/inventory.php',$data);
	}

	public function orders()
	{
		if( $this->input->post('paid') == "paid" )
		{
			$id = $this->input->post('id');
			$data = array( 'status'=> 'Paid' );

			$this->db->where('id', $id);
    		$this->db->update('orders',$data);
		}
		elseif( $this->input->post('done') == "done" )
		{
			$id = $this->input->post('id');
			$data = array( 'status'=> 'Completed' );

			//$this->db->update('orders',array(''));
			$this->db->where('id', $id);
    		$this->db->update('orders',$data);
		}

		$data['orders'] = $this->db->get_where('orders', array('status =' => 'Pending'))->result();
		$data['paid'] = $this->db->get_where('orders', array('status =' => 'Paid'))->result();

		//$data['orders'] = $this->order->getOrders();
		//$data['paid'] = $this->order->getPaid();
		$this->load->view('admin/orders.php',$data);
	}

	public function addinv()
	{
		$data = array("name"=>$this->input->post('name'),"quantity"=>$this->input->post('quantity'));
		//print_r($data); exit;
		$insert = $this->inventory->addinv($data);
		json_encode($insert);
	}

	public function delinv()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
    	$this->db->delete('inventory');
	}

	public function updateinv()
	{
		$id = $this->input->post('id');
		$data = array( 'quantity'=>$this->input->post('quantity') );
		//$data = array( ''=>$id );
		$this->db->where('id', $id);
    	$this->db->update('inventory',$data);
	}
}