<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Componente extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Prueba/M_componente');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index(){
        // if ($this->session->userdata("login")){
    
        // } else {
        //   redirect(base_url());
        // }
          $data['page'] = ucfirst("componente"); //Envío titulo para las rutas que muestra en pantalla
          $data['componente']= $this->M_componente->getAll();
    
        //  $this->load->view('layouts/header');
        //  $this->load->view('layouts/aside',$data);
         $this->load->view('Pruebas/Ambiente/index',$data);
        //  $this->load->view('layouts/footer');
      }
    
      public function agregar(){
    
    //    $data['personas']= $this->M_componente->getAll();
    
       if ($this->input->post()) {
    
            $this->form_validation->set_rules('usu_nombre','Nombre','required|trim');
            $this->form_validation->set_rules('usu_password','password','trim');
    
              if ($this->form_validation->run() == TRUE) {
                $this->M_componente->add();
    
                 redirect('Prueba/componente/');
    
            }else {
              $this->load->view('layouts/header');
              $this->load->view('layouts/aside',$data);
              $this->load->view('Pruebas/Componente/crear',$data);
              $this->load->view('layouts/footer');
            }
    
       }else {
    
         $this->load->view('layouts/header');
         $this->load->view('layouts/aside',$data);
         $this->load->view('Pruebas/Componente/crear',$data);
         $this->load->view('layouts/footer');
       }
     }
    
         public function modificar($id = NULL ){
    
            $data['componente']= $this->M_componente->getAll();
      
           if ($id == NULL OR !is_numeric($id)) {
             echo "Error Falta ID";
             return;
           }
      
           if ($this->input->post()) {
      
             $this->form_validation->set_rules('usu_nombre','Nombre','required|trim');
             $this->form_validation->set_rules('usu_password','password','trim');
      
                 if ($this->form_validation->run() == TRUE){
      
                     $this->M_componente->edit($id);
      
                     redirect('Prueba/componente/');
    
                 }else {
                   $this->load->view('layouts/header');
                   $this->load->view('layouts/aside',$data);
                   $this->load->view('Pruebas/Componente/modificar');
                   $this->load->view('layouts/footer');
                 }
          }else {
      
              $data['datos_componente'] = $this->M_componente->get_by_id($id);
      
              if (empty($data['datos_componente'])) {
                 echo "El ID es Invalido";
              }else {
                $this->load->view('layouts/header');
                $this->load->view('layouts/aside',$data);
                $this->load->view('Pruebas/Componente/modificar',$data);
                $this->load->view('layouts/footer');
              }
            }
          }
          public function eliminar($id = NULL){
    
            // $data['personas']= $this->M_componente->getPersona();
      
           if ($id == NULL OR !is_numeric($id)) {
             echo "Error Falta ID";
             return;
           }
      
               if ($this->input->post()) {
    
               $id_eliminar = $this->input->post('usu_id');
    
               $this->M_componente->elim($id_eliminar);
               
               redirect('Prueba/componente/');
      
               }else {
      
             $data['datos_componente'] = $this->M_componente->get_by_id($id);
      
             if (empty($data['datos_componente'])) {
               echo "El ID es Invalido";
             }else {
               $this->load->view('layouts/header');
               $this->load->view('layouts/aside',$data);
               $this->load->view('Pruebas/Componente/borrar',$data);
               $this->load->view('layouts/footer');
             }
           }
         }
    }
    
