<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct(){

    parent::__construct();
    $this->load->model('Prueba/M_usuario');
    $this->load->library('form_validation');
    $this->load->helper('form');
  }

  public function index(){
    // if ($this->session->userdata("login")){
    // } else {
    //   redirect(base_url());
    // }
      $data['page'] = ucfirst("usuario"); //Envío titulo para las rutas que muestra en pantalla
      $data['usuario']= $this->M_usuario->getAll();

    //  $this->load->view('layouts/header');
    //  $this->load->view('layouts/aside',$data);
     $this->load->view('Pruebas/Usuario/index',$data);
    //  $this->load->view('layouts/footer');
  }

  public function agregar(){

//    $data['personas']= $this->M_usuario->getPersona();

   if ($this->input->post()) {

        $this->form_validation->set_rules('usu_nombre','Nombre','required|trim');
        $this->form_validation->set_rules('usu_password','password','trim');

          if ($this->form_validation->run() == TRUE) {
            $this->M_usuario->add();

             redirect('Prueba/usuario/');

        }else {
          $this->load->view('layouts/header');
          $this->load->view('layouts/aside',$data);
          $this->load->view('Pruebas/usuario/crear',$data);
          $this->load->view('layouts/footer');
        }

   }else {

     $this->load->view('layouts/header');
     $this->load->view('layouts/aside',$data);
     $this->load->view('Pruebas/usuario/crear',$data);
     $this->load->view('layouts/footer');
   }
 }

     public function modificar($id = NULL ){

        $data['personas']= $this->M_usuario->getAll();
  
       if ($id == NULL OR !is_numeric($id)) {
         echo "Error Falta ID";
         return;
       }
  
       if ($this->input->post()) {
  
         $this->form_validation->set_rules('usu_nombre','Nombre','required|trim');
         $this->form_validation->set_rules('usu_password','password','trim');
  
             if ($this->form_validation->run() == TRUE){
  
                 $this->M_usuario->edit($id);
  
                 redirect('Prueba/usuario/');

             }else {
               $this->load->view('layouts/header');
               $this->load->view('layouts/aside',$data);
               $this->load->view('Pruebas/usuario/modificar');
               $this->load->view('layouts/footer');
             }
      }else {
  
          $data['datos_usuario'] = $this->M_usuario->get_by_id($id);
  
          if (empty($data['datos_usuario'])) {
             echo "El ID es Invalido";
          }else {
            $this->load->view('layouts/header');
            $this->load->view('layouts/aside',$data);
            $this->load->view('Pruebas/usuario/modificar',$data);
            $this->load->view('layouts/footer');
          }
        }
      }
      public function eliminar($id = NULL){

        // $data['personas']= $this->M_usuario->getPersona();
  
       if ($id == NULL OR !is_numeric($id)) {
         echo "Error Falta ID";
         return;
       }
  
           if ($this->input->post()) {

           $id_eliminar = $this->input->post('usu_id');

           $this->M_usuario->elim($id_eliminar);
           
           redirect('Prueba/usuario/');
  
           }else {
  
         $data['datos_usuario'] = $this->M_usuario->get_by_id($id);
  
         if (empty($data['datos_usuario'])) {
           echo "El ID es Invalido";
         }else {
           $this->load->view('layouts/header');
           $this->load->view('layouts/aside',$data);
           $this->load->view('Pruebas/usuario/borrar',$data);
           $this->load->view('layouts/footer');
         }
       }
     }
}
