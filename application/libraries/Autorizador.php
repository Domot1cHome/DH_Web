<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autorizador
{


  public function __construct()
  {
    $CI =& get_instance();
    $CI->load->library('session');
  }


  public function CrearToken()
  {
    $_SESSION['token'] = 1;
    
  }

  public function EliminarToken()
  {
    unset($_SESSION['token']);
  }

  public function VerificarExistenciaToken()
  {
    if (isset($_SESSION['token'])) {
      return true;
    } else {
      return false;
    }
  }
}
