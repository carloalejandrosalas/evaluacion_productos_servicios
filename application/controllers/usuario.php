<?php
class Usuario extends CI_Controller
{
  function __construct()
    {
      parent::__construct();
      if (!$this->session->userdata('username')) {
         redirect('login');
      }
    }
  function alta()
  {

  }

  function modificacion()
  {

  }

  function baja()
  {

  }
}

 ?>
