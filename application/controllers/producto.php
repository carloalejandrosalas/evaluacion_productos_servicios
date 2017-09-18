<?php
class Producto extends CI_Controller
{
    function __construct()
    {
      parent::__construct();
      if (!$this->session->userdata('username')) {
         redirect('login');
      }
      $this->load->model('producto_model');
    }

  function index()
  {
    $data = $this->allData();
    $this->ponerVista('producto','producto/vista_producto',$data);
  }

  function alta()
  {
    if(!isset($_POST['producto'])){
      $this->ponerVista('','producto/alta_producto');
    }
    else {
      $producto= strtoupper($this->input->post('producto'));
      $precio = strtoupper($this->input->post('precio'));
      $foto = strtoupper($this->input->post('foto'));
      $descripcion = strtoupper($this->input->post('descripcion'));

      $this->load->model('producto_model');
      $this->producto_model->alta($producto,$precio,$foto,$descripcion);

      #redirect('producto');
    }

  }

  function baja()
  {

  }

  function consulta($codigo_barras=NULL)
  {
    if ($codigo_barras==NULL) {
      redirect('producto');
    }
    else {

      $data = $this->allData($codigo_barras);
      $this->ponerVista('','producto/consulta_producto',$data);
    }
  }

  function modificacion()
  {

  }

  function allData($codigo_barras=NULL)
  {
    if ($codigo_barras==NULL)
    {
      $producto = $this->producto_model->consulta();
      if (!$producto) {
        redirect('producto/alta');
      }
    }
    else {
      $producto = $this->producto_model->consulta_especifica($codigo_barras);
      if (!$producto) {
        redirect('producto');
      }
    }

    $arreglo_producto=array();
    foreach ($producto as $llave=> $valor) {
      $arreglo_producto[$llave]['producto'] = $valor['nombre_producto'];
      $arreglo_producto[$llave]['precio'] = $valor['monto_producto'];
      $arreglo_producto[$llave]['descripcion'] = $valor['descripcion_producto'];
      $arreglo_producto[$llave]['foto'] = $valor['foto_producto'];
      $arreglo_producto[$llave]['codigo_barras'] = $valor['codigo_barras'];

    }
      return $arreglo_producto;
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
        $this->load->view($vista,array('producto'=>$data));
      }
      $this->load->view('template/footer');
    }
}
