<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controlador extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Prueba/M_Index');
	}

	public function index()
	{
		echo 'Dirijase a una ruta ;D';
	}

	public function Prueba1()
	{
		$this->load->view('Index');
	}

	public function Prueba11()
	{
		$this->load->view('layouts/encabezado');
		$this->load->view('Pruebas/index');
		$this->load->view('layouts/piePagina');

		if ($this->input->post()) {
			$data = $this->input->post();
			unset($data['boton']);
			// print_r($data);
			$respuesta = $this->M_Index->Login($data['usuario'], $data['password']);
			if (count($respuesta) == 0) {
				echo '<p style="color:white">Usuario o contraseña incorrectos</p>';
			} else {
				// print_r($respuesta);
				$this->load->view('Pruebas/ambientes');
			}
		}
	}

	public function Prueba2()
	{
		$this->load->view('Index2');
	}
}
