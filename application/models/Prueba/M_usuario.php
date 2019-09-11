<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_usuario extends CI_Model
{

public $usu_id;
public $usu_nombre;
public $usu_apellido;
public $usu_tip_doc_id;
public $usu_nun_doc;
public $usu_rol_id;
public $usu_email;
public $usu_usuario;
public $usu_codigo;

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all(){

        $query = $this->db->get('tb_usuario');
        return $query->result();

    }
}

/* Fin del Archivo M_usuario.php */