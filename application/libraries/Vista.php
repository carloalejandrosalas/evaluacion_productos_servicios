<?php
class Vista
{
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
