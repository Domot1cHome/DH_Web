<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ambiente extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Prueba/M_ambiente');
        $this->load->library('form_validation');
        $this->load->helper('form');
        echo 'Hola';
    }

    public function index(){


    
          $data['page'] = ucfirst("ambiente"); //Envío titulo para las rutas que muestra en pantalla
          $data['ambiente']= $this->M_ambiente->getAll();
    
        //  $this->load->view('layouts/header');
        //  $this->load->view('layouts/aside',$data);
         $this->load->view('Pruebas/Ambiente/index',$data);
        //  $this->load->view('layouts/footer');
      }
    
      public function agregar(){
    
    //    $data['personas']= $this->M_ambiente->getAll();
    
       if ($this->input->post()) {
    
            $this->form_validation->set_rules('usu_nombre','Nombre','required|trim');
            $this->form_validation->set_rules('usu_password','password','trim');
    
              if ($this->form_validation->run() == TRUE) {
                $this->M_ambiente->add();
    
                 redirect('Prueba/ambiente/');
    
            }else {
              $this->load->view('layouts/header');
              $this->load->view('layouts/aside',$data);
              $this->load->view('Pruebas/Ambiente/crear',$data);
              $this->load->view('layouts/footer');
            }
    
       }else {
    
         $this->load->view('layouts/header');
         $this->load->view('layouts/aside',$data);
         $this->load->view('Pruebas/Ambiente/crear',$data);
         $this->load->view('layouts/footer');
       }
     }
    
         public function modificar($id = NULL ){
    
            $data['ambiente']= $this->M_ambiente->getAll();
      
           if ($id == NULL OR !is_numeric($id)) {
             echo "Error Falta ID";
             return;
           }
      
           if ($this->input->post()) {
      
             $this->form_validation->set_rules('usu_nombre','Nombre','required|trim');
             $this->form_validation->set_rules('usu_password','password','trim');
      
                 if ($this->form_validation->run() == TRUE){
      
                     $this->M_ambiente->edit($id);
      
                     redirect('Prueba/ambiente/');
    
                 }else {
                   $this->load->view('layouts/header');
                   $this->load->view('layouts/aside',$data);
                   $this->load->view('Pruebas/Ambiente/modificar');
                   $this->load->view('layouts/footer');
                 }
          }else {
      
              $data['datos_ambiente'] = $this->M_ambiente->get_by_id($id);
      
              if (empty($data['datos_ambiente'])) {
                 echo "El ID es Invalido";
              }else {
                $this->load->view('layouts/header');
                $this->load->view('layouts/aside',$data);
                $this->load->view('Pruebas/Ambiente/modificar',$data);
                $this->load->view('layouts/footer');
              }
            }
          }
          public function eliminar($id = NULL){
    
            // $data['personas']= $this->M_ambiente->getPersona();
      
           if ($id == NULL OR !is_numeric($id)) {
             echo "Error Falta ID";
             return;
           }
      
               if ($this->input->post()) {
    
               $id_eliminar = $this->input->post('usu_id');
    
               $this->M_ambiente->elim($id_eliminar);
               
               redirect('Prueba/ambiente/');
      
               }else {
      
             $data['datos_ambiente'] = $this->M_ambiente->get_by_id($id);
      
             if (empty($data['datos_ambiente'])) {
               echo "El ID es Invalido";
             }else {
               $this->load->view('layouts/header');
               $this->load->view('layouts/aside',$data);
               $this->load->view('Pruebas/Ambiente/borrar',$data);
               $this->load->view('layouts/footer');
             }
           }
         }
    }
    
