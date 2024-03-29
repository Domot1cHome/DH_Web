<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ambiente extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_ambiente');
    $this->load->library('form_validation');
    $this->load->helper('form');
  }

  public function index()
  {

    $data['page'] = ucfirst("Ambientes");
    $data['ambiente'] = $this->M_ambiente->TraerTodos();
    $this->load->view('layouts/encabezado', $data);
    $this->load->view('layouts/barraLateral');
    $this->load->view('layouts/navegador');
    $this->load->view('ambiente/index', $data);
    $this->load->view('layouts/piePagina');

    // $data['page'] = ucfirst("Ambientes");
    // $data['ambiente'] = $this->M_ambiente->TraerTodos();
    // $this->load->view('layouts/test/encabezado', $data);
    // $this->load->view('layouts/test/barraLateral');
    // $this->load->view('layouts/test/navegador');
    // $this->load->view('ambiente/index', $data);
    // $this->load->view('layouts/test/piePagina', $data);
  }

  public function Crear()
  {
    $data['page'] = ucfirst("Ambiente");
    if ($this->input->post()) {
      $this->form_validation->set_rules('amb_nombre', 'Nombre ambiente', 'required');
      $this->form_validation->set_rules('amb_capacidad', 'Cantidad de aprendices', 'required|max_length[2]');
      if ($this->form_validation->run() == TRUE) {
        $this->M_ambiente->Crear();
        redirect('ambiente');
      } else {
        $this->load->view('layouts/encabezado', $data);
        $this->load->view('layouts/barraLateral');
        $this->load->view('layouts/navegador');
        $this->load->view('Ambiente/crear');
        $this->load->view('layouts/piePagina');
      }
    } else {
      $this->load->view('layouts/encabezado', $data);
      $this->load->view('layouts/barraLateral');
      $this->load->view('layouts/navegador');
      $this->load->view('Ambiente/crear');
      $this->load->view('layouts/piePagina');
    }
  }

  public function Editar($id = NULL)
  {
    $data['page'] = ucfirst("Ambiente");
    if ($id == NULL or !is_numeric($id)) {
      echo "Error Falta ID";
      return;
    } else if ($id == 1) {
      echo "Error. No se puede editar este ID";
      return;
    }

    //Si se envian los datos ahora falta validarlos
    if ($this->input->post()) {
      $this->form_validation->set_rules('amb_nombre', 'Nombre ambiente', 'required');
      $this->form_validation->set_rules('amb_capacidad', 'Cantidad de aprendices', 'required|max_length[2]');
      if ($this->form_validation->run() == TRUE) {

        $this->M_ambiente->Editar($id);
        redirect('ambiente');
      } else {
        //Verificamos que el id exista 
        $data['ambiente'] = $this->M_ambiente->TraerPorId($id);
        if (empty($data['ambiente'])) {
          echo "El ID es Invalido";
          return;
        } else {
          $this->load->view('layouts/encabezado', $data);
          $this->load->view('layouts/barraLateral');
          $this->load->view('layouts/navegador');
          $this->load->view('Ambiente/editar', $data);
          $this->load->view('layouts/piePagina');
        }
      }
    } else {
      //Verificamos que el id exista 
      $data['ambiente'] = $this->M_ambiente->TraerPorId($id);
      if (empty($data['ambiente'])) {
        echo "El ID es Invalido";
        return;
      } else {
        $this->load->view('layouts/encabezado', $data);
        $this->load->view('layouts/barraLateral');
        $this->load->view('layouts/navegador');
        $this->load->view('Ambiente/editar', $data);
        $this->load->view('layouts/piePagina');
      }
    }
  }

  public function Eliminar($id = NULL)
  {
    $data['page'] = ucfirst("Ambientes");
    if ($id == NULL or !is_numeric($id)) {
      echo "Error Falta ID";
      return;
    } else if ($id == 1) {
      echo "Error. No se puede eliminar este ID";
      return;
    }

    if ($this->input->post()) {
      $this->M_ambiente->Eliminar($id);
      redirect('ambiente');
    } else {

      $data['datos_ambiente'] = $this->M_ambiente->TraerPorId($id);

      if (empty($data['datos_ambiente'])) {
        echo "El ID es Invalido";
      } else {
        $this->load->view('layouts/encabezado', $data);
        $this->load->view('layouts/barraLateral');
        $this->load->view('layouts/navegador');
        $this->load->view('Ambiente/Eliminar', $data);
        $this->load->view('layouts/piePagina');
      }
    }
  }
}
