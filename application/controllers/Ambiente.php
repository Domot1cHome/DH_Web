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

    $data['page'] = ucfirst("ambiente");
    $data['ambiente'] = $this->M_ambiente->TraerTodos();
    $this->load->view('layouts/encabezado');
    $this->load->view('ambiente/index', $data);
    $this->load->view('layouts/piePagina');
  }

  public function Crear()
  {

    if ($this->input->post()) {
      $this->M_ambiente->Crear();
      redirect('ambiente/');
    } else {

      $this->load->view('layouts/encabezado');
      $this->load->view('Ambiente/crear');
      $this->load->view('layouts/piePagina');
    }
  }

  public function Editar($id = NULL)
  {

    $data['ambiente'] = $this->M_ambiente->TraerTodos();

    //Si se escribe un valor numerico o nulo se mostrara como una falta de ID. 
    if ($id == NULL or !is_numeric($id)) {
      echo "Error Falta ID";
      return;
    }

    //Si se envian datos
    if ($this->input->post()) {
      $this->M_ambiente->Editar($id);
      redirect('ambiente/');
    } else {
      //Verificamos que el id exista 
      $data['ambiente'] = $this->M_ambiente->TraerPorId($id);
      if (empty($data['ambiente'])) {
        echo "El ID es Invalido";
      } else {
        $this->load->view('layouts/encabezado');
        $this->load->view('Ambiente/editar', $data);
        $this->load->view('layouts/piePagina');
      }
    }
  }

  public function Eliminar($id = NULL)
  {
    if ($id == NULL or !is_numeric($id)) {
      echo "Error Falta ID";
      return;
    }

    if ($this->input->post()) {

      $id_eliminar = $this->input->post('usu_id');

      $this->M_ambiente->elim($id_eliminar);

      redirect('Prueba/ambiente/');
    } else {

      $data['datos_ambiente'] = $this->M_ambiente->get_by_id($id);

      if (empty($data['datos_ambiente'])) {
        echo "El ID es Invalido";
      } else {
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside', $data);
        $this->load->view('Pruebas/Ambiente/borrar', $data);
        $this->load->view('layouts/footer');
      }
    }
  }
}
