<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');

class M_ambiente extends CI_Model{

  public function __construct() 
  {
        parent::__construct(); 
        $this->load->database();
  }

    function getAll(){

        $query = $this->db->select('amb_id,
                                    amb_nombre,
                                    amb_capacidad,
                                    fecha_creado,
                                    fecha_modificado');
        $query = $this->db->get('tb_ambiente');
        return $query->result();
      }

      function get_by_id($id){

        $query = $this->db->select('amb_id,
                                    amb_nombre,
                                    amb_capacidad,
                                    fecha_creado,
                                    fecha_modificado');
        $query = $this->db->where('amb_id',$id);
        $query = $this->db->get('tb_ambiente');
        return $query->result();
      }

      function add(){

        $data_insertar = $this->input->post();
        unset($data_insertar['btn_guardar']);
        $data_insertar['fecha_creado'] = date("Y-m-d H:i:s");
        $this->db->insert('tb_ambiente',$data_insertar);
        return $this->db->insert_id();
      }
    
      function edit($id){
    
            $data_editar = $this->input->post();
            unset($data_editar['btn_guardar']);
            $data_editar['fecha_modificado'] = date("Y-m-d H:i:s");
            $this->db->where('amb_id',$id);
            $this->db->update('tb_ambiente',$data_editar);
      }
    
      function elim($id){
    
        $this->db->where('amb_id',$id);
        $this->db->delete('tb_ambiente');
    
      }
    

}

