<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
    parent::__construct();
    if ($this->session->userdata('username')) {
       redirect('../bienvenido');
    }
    $this->load->model('usuario_model');
 }

 function index()
 {
  $this->load->view('pages/login_view');    
 }


  function proceso(){
    $password = $this->input->post('password');
    $username = $this->input->post('username');

     if (isset($username) && !empty($username) && isset($password) && !empty($password))
       {
        
          $respuesta = $this->usuario_model->login($username,md5($password));

          if ($respuesta > 0)
          {
             $this->session->set_userdata('username',$username);
             echo 1;
          }
          else
          {
            echo 0;
             //redirect('login#bad-password');
          }

       }
       else{
        echo -1;
       }
}

   function logout()
   {
      $this->session->sess_destroy();
      redirect('login');
   }
}
