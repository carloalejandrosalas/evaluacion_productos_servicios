<?php
class Cliente extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('username')) {
       redirect('login');
    }
    $this->load->model('cliente_model');
  }

  function index()
  {
    $data = $this->allData();
    $this->ponerVista('cliente','cliente/vista_cliente',$data);
  }

  function alta()
  {
    if(!isset($_POST['numero'])){
      $this->ponerVista('','cliente/alta_cliente','');
    }
    else {
      $ap= strtoupper($this->input->post('ap'));
      $am = strtoupper($this->input->post('am'));
      $nombre = strtoupper($this->input->post('nombre'));
      $telefono = strtoupper($this->input->post('numero'));
      $direccion = strtoupper($this->input->post('domicilio'));

      $this->load->model('cliente_model');
      $this->cliente_model->alta($ap,$am,$nombre,$telefono,$direccion);

      redirect('cliente');
    }

  }

  function baja($numero=NULL)
  {
    if ($numero==NULL) {
      redirect('cliente');
    }

    if(!isset($_POST['numero_baja'])){
      $data = $this->allData($numero);
      $this->ponerVista('','cliente/baja_cliente',$data);
      }

    else
    {
      $numero_baja = $this->input->post('numero_baja');
      $this->cliente_model->baja($numero_baja);
      redirect('cliente');
    }
  }



  function consulta($numero=NULL)
  {
    if ($numero == NULL)
    {
      redirect('cliente');
    }
    else
    {
      $data = $this->allData($numero);
      $this->ponerVista('','cliente/consulta_cliente',$data);
    }
  }

  function modificar($numero=NULL)
  {
    if ($numero == NULL)
    {
      redirect('cliente');
    }
    if(!isset($_POST['numero_modificar'])){
      $data = $this->allData($numero);
      $this->ponerVista('','cliente/modificar_cliente',$data);
      }

    else
    {
      $ap_modificar = strtoupper($this->input->post('ap_modificar'));
      $am_modificar = strtoupper($this->input->post('am_modificar'));
      $nombre_modificar = strtoupper($this->input->post('nombre_modificar'));
      $numero_modificar = strtoupper($this->input->post('numero_modificar'));
      $direccion_modificar = strtoupper($this->input->post('direccion_modificar'));
      $this->cliente_model->modificar($ap_modificar,$am_modificar,$nombre_modificar,$numero_modificar,$direccion_modificar);
      redirect('cliente');
    }
  }

  function allData($numero=NULL)
  {
    if ($numero==NULL)
    {
      $cliente = $this->cliente_model->consulta();
      if (!$cliente) {
        redirect('cliente/alta');
      }
    }
    else {
      $cliente = $this->cliente_model->consulta_especifica($numero);
      if (!$cliente) {
        redirect('cliente');
      }
    }

    $arreglo_cliente=array();
    foreach ($cliente as $llave=> $valor) {
      $arreglo_cliente[$llave]['apellido_paterno'] = $valor['ap_cliente'];
      $arreglo_cliente[$llave]['apellido_materno'] = $valor['am_cliente'];
      $arreglo_cliente[$llave]['nombre'] = $valor['nombre_cliente'];
      $arreglo_cliente[$llave]['telefono'] = $valor['numero'];
      $arreglo_cliente[$llave]['direccion'] = $valor['domicilio'];
    }
      return $arreglo_cliente;
  }

  function ponerVista($titulo=NULL,$vista,$data=NULL)
  {
    $this->load->view('template/head',array('titulo' => $titulo));
    if ($data==NULL)
    {
      $this->load->view($vista);
    }
    else
    {
      $this->load->view($vista,array('cliente'=>$data));
    }
    $this->load->view('template/footer');
  }
}
