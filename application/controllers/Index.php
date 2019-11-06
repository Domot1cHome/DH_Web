<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Index');
		if($this->autorizador->VerificarExistenciaToken()){
			
		}
	}

	public function index()
	{
		$this->load->view('layouts/Login/encabezado');
		$this->load->view('Index');
		$this->load->view('layouts/Login/piePagina');

		if ($this->input->post()) {
			$data = $this->input->post();
			unset($data['boton']);
			$respuesta = $this->M_Index->Login($data['usuario'], $data['password']);
			if (count($respuesta) == 0) {
				// echo '<p style="color:white">Usuario o contraseña incorrectos</p>';
				$informacionVentana['encabezado'] = 'Error de autenticación';
				$informacionVentana['cuerpo'] = 'Usuario o contraseña incorrectos';
				$this->load->view('layouts/modal', $informacionVentana);
			} else {
				$this->autorizador->CrearToken();
				redirect('ambiente');
			}
		}
	}

	public function CerrarSesion()
	{
		
		$this->autorizador->EliminarToken();
		redirect('index');
	}
}
