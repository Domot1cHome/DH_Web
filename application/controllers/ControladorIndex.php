<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControladorIndex extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->view('Index');
		
	}

	public function Hola(Type $var = null)
	{
		
			$data = $this->input->post();
			print_r($data);
		
	}
}
