<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu');
	}

	public function index()
	{
		

		$this->load->view('home');
	}

	public function order()
	{
		$data['menu'] = $this->menu->getMenu();
		
		//print_r($data); exit;
		$this->load->view('order',$data);
	}
}
