<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Usuario');
    $this->load->library('form_validation');
    $this->load->helper('form');
  }

  public function index()
  {

    $data['page'] = ucfirst("Usuarios");
    $data['usuario'] = $this->M_Usuario->TraerTodos();
    $this->load->view('layouts/encabezado', $data);
    $this->load->view('usuario/index', $data);
    $this->load->view('layouts/piePagina');
  }

  public function Crear()
  {
    $data['page'] = ucfirst("Usuario");
    if ($this->input->post()) {
      $this->form_validation->set_rules('usu_nombre', 'Nombres', 'required');
      $this->form_validation->set_rules('usu_apellido', 'Apellidos', 'required');
      $this->form_validation->set_rules('usu_num_doc', 'Número de documento', 'required|max_length[11]');
      if ($this->form_validation->run() == TRUE) {
        $this->M_Usuario->Crear();
        redirect('usuario');
      } else {
        $this->load->view('layouts/encabezado', $data);
        $this->load->view('usuario/crear');
        $this->load->view('layouts/piePagina');
      }
    } else {
      $this->load->view('layouts/encabezado', $data);
      $this->load->view('usuario/crear');
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
        $this->load->view('Ambiente/Eliminar', $data);
        $this->load->view('layouts/piePagina');
      }
    }
  }

  public function TraerTiposDocumentos()
  {
    try {
      echo json_encode($this->M_Usuario->TraerTiposDocumentos());
      die();
    } catch (\Throwable $th) {
      echo $th;
    }
  }

  public function TraerRoles()
  {
    try {
      echo json_encode($this->M_Usuario->TraerRoles());
      die();
    } catch (\Throwable $th) {
      echo $th;
    }
  }
}
