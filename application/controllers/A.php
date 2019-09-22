<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('layouts/Login/encabezado');
		$this->load->view('A');
		$this->load->view('layouts/Login/piePagina');
		

		if ($this->input->post()) { }
	}
}
