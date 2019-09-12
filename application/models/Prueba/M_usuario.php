<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');

class M_usuario extends CI_Model{

    function getAll(){

        $query = $this->db->select('usu_id,
                                    usu_nombre,
                                    usu_apellido,
                                    usu_tip_doc_id,
                                    usu_num_doc,
                                    usu_rol_id,
                                    usu_email,
                                    usu_usuario,
                                    usu_codigo');
        //$query = $this->db->join('tb_cargo','tb_persona.per_car_id = tb_cargo.car_id');
        $query = $this->db->get('tb_usuario');
        return $query->result();
      }

      function get_by_id($id){

        $query = $this->db->select('usu_id,
                                    usu_nombre,
                                    usu_apellido,
                                    usu_tip_doc_id,
                                    usu_num_doc,
                                    usu_rol_id,
                                    usu_email,
                                    usu_usuario,
                                    usu_codigo');
        //$query = $this->db->join('tb_cargo','tb_persona.per_car_id = tb_cargo.car_id');
        $query = $this->db->where('usu_id',$id);
        $query = $this->db->get('tb_usuario');
        return $query->result();
      }

    //   public function getRol(){

    //     $query = $this->db->get("tb_rol");
    //     return $query->result_array();
    //   }

    //   public function getDocumento(){

    //     $query = $this->db->get("tb_tipo_documento");
    //     return $query->result_array();
    //   }
    

      function add(){

        $data_insertar = $this->input->post();
        unset($data_insertar['btn_guardar']);
        $this->db->insert('tb_usuario',$data_insertar);
        return $this->db->insert_id();
      }
    
      function edit($id){
    
            $data_editar = $this->input->post();
            unset($data_editar['btn_guardar']);
            $this->db->where('usu_id',$id);
            $this->db->update('tb_usuario',$data_editar);
      }
    
      function elim($id){
    
        $this->db->where('usu_id',$id);
        $this->db->delete('tb_usuario');
    
      }
    

}

