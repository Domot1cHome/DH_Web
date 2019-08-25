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

	public function index2()
	{
		$this->load->view('Index2');
	}
}
