<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function dashboard()
	{
		$this->load->view('admin/dashboard.php');
	}

	public function inventory()
	{
		$this->load->view('admin/inventory.php');
	}

	public function orders()
	{
		$this->load->view('admin/orders.php');
	}
}
