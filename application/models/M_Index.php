<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Index extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function Login($usuario, $codigo)
    {
        $query = $this->db->select('usu_usuario,usu_codigo');
        $query = $this->db->where('usu_usuario', $usuario);
        $query = $this->db->where('usu_codigo', $codigo);
        $query = $this->db->get('tb_usuario');
        return $query->result();
    }
}

/* Fin del Archivo M_Index.php */
