<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');

class M_Usuario extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function TraerTodos()
  {
    $query = $this->db->select('usu_id,
                                    usu_nombre,
                                    usu_apellido,
                                    usu_tip_doc_id,
                                    usu_num_doc,
                                    usu_rol_id,
                                    usu_email,
                                    usu_usuario,
                                    usu_codigo,
                                    fecha_creado,
                                    fecha_modificado');
    $query = $this->db->get('tb_usuario');
    return $query->result();
  }

  function TraerPorId($id)
  {
    $query = $this->db->select('usu_id,
                                    usu_nombre,
                                    usu_apellido,
                                    usu_tip_doc_id,
                                    usu_num_doc,
                                    usu_rol_id,
                                    usu_email,
                                    usu_usuario,
                                    usu_codigo,
                                    fecha_creado,
                                    fecha_modificado');
    $query = $this->db->where('usu_id', $id);
    $query = $this->db->get('tb_usuario');
    return $query->result();
  }

  function TraerTiposDocumentos()
  {
    $query = $this->db->select('tip_doc_id, tip_doc_nombre');
    $query = $this->db->get('tb_tipo_documento');
    return $query->result();
  }

  function TraerRoles()
  {
    $query = $this->db->select('rol_id, rol_nombre');
    $query = $this->db->where('rol_id<>', '1');
    $query = $this->db->get('tb_rol');
    return $query->result();
  }

  function Crear()
  {
    $data_insertar = $this->input->post();
    unset($data_insertar['btn_guardar']);
    unset($data_insertar['usu_codigo_repeat']);
    $data_insertar['fecha_creado'] = date("Y-m-d H:i:s");
    $data_insertar['usu_id'] = null;
    $this->db->insert('tb_usuario', $data_insertar);
    return $this->db->insert_id();
  }

  function Editar($id)
  {
    $data_editar = $this->input->post();
    unset($data_editar['btn_guardar']);
    $data_editar['fecha_modificado'] = date("Y-m-d H:i:s");
    $this->db->where('usu_id', $id);
    $this->db->update('tb_usuario', $data_editar);
  }

  function Eliminar($id)
  {
    $this->db->where('usu_id', $id);
    $this->db->delete('tb_usuario');
  }
}
