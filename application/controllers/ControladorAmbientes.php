<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControladorAmbientes extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('layouts/encabezado');
        $this->load->view('Pruebas/ambientes');
        $this->load->view('layouts/piePagina');
    }
}
