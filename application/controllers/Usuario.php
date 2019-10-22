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
    $this->load->view('layouts/barraLateral');
    $this->load->view('usuario/index', $data);
    $this->load->view('layouts/piePagina');
  }

  public function Crear()
  {
    $data['page'] = ucfirst("Usuarios");
    if ($this->input->post()) {
      $this->form_validation->set_rules('usu_nombre', 'nombres', 'trim|required');
      $this->form_validation->set_rules('usu_apellido', 'apellidos', 'trim|required');
      $this->form_validation->set_rules('usu_tip_doc_id', 'tipo documento', 'trim|required');
      $this->form_validation->set_rules('usu_num_doc', 'número de documento', 'trim|required|numeric|max_length[11]');
      $this->form_validation->set_rules('usu_rol_id', 'rol', 'trim|required');
      $this->form_validation->set_rules('usu_email', 'correo electrónico', 'trim|required|valid_email');
      $this->form_validation->set_rules('usu_usuario', 'usuario', 'trim|required');
      $this->form_validation->set_rules('usu_codigo', 'contraseña', 'trim|required|min_length[10]');
      $this->form_validation->set_rules('usu_codigo_repeat', 'repetir contraseña', 'trim|required|min_length[10]|matches[usu_codigo]');
      if ($this->form_validation->run() == TRUE) {
        $this->M_Usuario->Crear();
        redirect('usuario');
      } else {
        $this->load->view('layouts/encabezado', $data);
        $this->load->view('layouts/barraLateral');
        $this->load->view('usuario/crear');
        $this->load->view('layouts/piePagina');
      }
    } else {
      $this->load->view('layouts/encabezado', $data);
      $this->load->view('layouts/barraLateral');
      $this->load->view('usuario/crear');
      $this->load->view('layouts/piePagina');
    }
  }

  public function Editar($id = NULL)
  {
    $data['page'] = ucfirst("Usuario");
    if ($id == NULL or !is_numeric($id)) {
      echo "Error Falta ID";
      return;
    } else if ($id == 1) {
      echo "Error. No se puede editar este ID";
      return;
    }

    //Si se envian los datos ahora falta validarlos
    if ($this->input->post()) {
      $this->form_validation->set_rules('usu_nombre', 'nombres', 'trim|required');
      $this->form_validation->set_rules('usu_apellido', 'apellidos', 'trim|required');
      $this->form_validation->set_rules('usu_tip_doc_id', 'tipo documento', 'trim|required');
      $this->form_validation->set_rules('usu_num_doc', 'número de documento', 'trim|required|numeric|max_length[11]');
      $this->form_validation->set_rules('usu_rol_id', 'rol', 'trim|required');
      $this->form_validation->set_rules('usu_email', 'correo electrónico', 'trim|required|valid_email');
      if ($this->form_validation->run() == TRUE) {
        $this->M_Usuario->Editar($id);
        redirect('usuario');
      } else {
        $data['usuario'] = $this->M_Usuario->TraerPorId($id);
        if (empty($data['usuario'])) {
          echo "El ID es Invalido";
          return;
        } else {
          $this->load->view('layouts/encabezado', $data);
          $this->load->view('layouts/barraLateral');
          $this->load->view('usuario/editar', $data);
          $this->load->view('layouts/piePagina');
        }
      }
    } else {
      $data['data_usuario'] = $this->M_Usuario->TraerPorId($id);
      if (empty($data['data_usuario'])) {
        echo "El ID es Invalido";
        return;
      } else {
        $this->load->view('layouts/encabezado', $data);
        $this->load->view('layouts/barraLateral');
        $this->load->view('usuario/editar', $data);
        $this->load->view('layouts/piePagina');
      }
    }
  }

  public function Eliminar($id = NULL)
  {
    $data['page'] = ucfirst("Usuarios");
    if ($id == NULL or !is_numeric($id)) {
      echo "Error Falta ID";
      return;
    } else if ($id == 1) {
      echo "Error. No se puede eliminar este ID";
      return;
    }

    if ($this->input->post()) {
      $this->M_Usuario->Eliminar($id);
      redirect('usuario');
    } else {
      $data['datos_usuario'] = $this->M_Usuario->TraerPorId($id);
      if (empty($data['datos_usuario'])) {
        echo "El ID es Invalido";
      } else {
        $this->load->view('layouts/encabezado', $data);
        $this->load->view('layouts/barraLateral');
        $this->load->view('usuario/eliminar', $data);
        $this->load->view('layouts/piePagina');
      }
    }
  }

  public function Reestablecer($id)
  {

    if ($id == NULL or !is_numeric($id)) {
      echo "Error Falta ID";
      return;
    } else if ($id == 1) {
      echo "Error. No se puede editar este ID";
      return;
    }

    if ($this->input->post()) {
      $this->form_validation->set_rules('usu_codigo', 'contraseña', 'trim|required|min_length[10]');
      $this->form_validation->set_rules('usu_codigo_repeat', 'repetir contraseña', 'trim|required|min_length[10]|matches[usu_codigo]');
      if ($this->form_validation->run() == TRUE) {
        $this->M_Usuario->Reestablecer($id);
        redirect('usuario');
      } else {
        $data['page'] = ucfirst("Contraseña");
        $this->load->view('layouts/encabezado', $data);
        $this->load->view('layouts/barraLateral');
        $this->load->view('usuario/Reestablecer', $data);
        $this->load->view('layouts/piePagina');
      }
    } else {
      $data['page'] = ucfirst("Contraseña");
      $this->load->view('layouts/encabezado', $data);
      $this->load->view('layouts/barraLateral');
      $this->load->view('usuario/Reestablecer', $data);
      $this->load->view('layouts/piePagina');
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
