<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControladorIndex extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Prueba/M_Index');
	}

	public function index()
	{
		$this->load->view('layouts/Login/encabezado');
		$this->load->view('Pruebas/index');
		$this->load->view('layouts/Login/piePagina');

		if ($this->input->post()) {
			$data = $this->input->post();
			unset($data['boton']);
			$respuesta = $this->M_Index->Login($data['usuario'], $data['password']);
			if (count($respuesta) == 0) {
				echo '<p style="color:white">Usuario o contraseña incorrectos</p>';
			} else {
				redirect('ControladorAmbientes/Index');
			}
		}
	}

	public function Prueba2()
	{
		$this->load->view('Index2');
	}
}
