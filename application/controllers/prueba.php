<?php
class Prueba extends CI_Controller
{

    function __construct()
    {
      parent::__construct();
      if (!$this->session->userdata('username')) {
         redirect('login');
      }
    }

  function index()
  {
    $this->load->view('template/sidebar');
  }
}
