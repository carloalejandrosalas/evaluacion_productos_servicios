<?php
class Empleado extends CI_Controller
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
    $this->load->model('empleado_model');
    $empleados = $this->empleado_model->consulta();

    $arreglo_empleado = array();

    foreach ($empleados as $key=> $value) {
      $arreglo_empleado[$key]['apellido_paterno'] = $value['ap_empleado'];
      $arreglo_empleado[$key]['apellido_materno'] = $value['am_empleado'];
      $arreglo_empleado[$key]['nombre'] = $value['nombre_empleado'];
      $arreglo_empleado[$key]['telefono'] = $value['numero'];
      $arreglo_empleado[$key]['direccion'] = $value['domicilio'];
    }

    $this->load->view('template/head');
    $this->load->view('empleado/vista_empleado');
    $this->load->view('template/footer');
  }
  
}
