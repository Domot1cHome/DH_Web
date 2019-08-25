<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControladorLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
		
	}



	public function index()
	{
		
		$this->load->view('Login');
	}

	public function ImprimirDatos()
	{
		
	}
}
