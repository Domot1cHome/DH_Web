<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {

	public function index()
	{
		echo 'Dirijase a una ruta ;D';
	}

	public function Prueba1()
	{
		$this->load->view('Index');
	}

	public function Prueba2()
	{
		$this->load->view('Index2');
	}
}
