<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bienvenido extends CI_Controller {

	function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('username')) {
       redirect('login');
  	}
	}

	public function index()
	{
		$this->load->view('template/head',array('titulo'=>''));
		$this->load->view('pages/principal');
		$this->load->view('template/footer');
	}
}
