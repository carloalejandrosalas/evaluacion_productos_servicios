<?php

class Producto_model extends CI_Model
{

  function __construct()
  {
    # code...
  }

  function alta($producto,$precio,$foto,$descripcion)
  {
    $datos = array(
      'nombre_producto' => $producto ,
      'monto_producto' => $precio,
      'foto_producto'=>$foto,
      'descripcion_producto' =>$descripcion
    );
    return $this->db->insert('producto',$datos);
  }

  function consulta()
  {
    $this->db->select('*');
    $this->db->from('producto');
    $this->db->where('status',1);
    $query= $this->db->get();
    if ($query->num_rows() > 0)
    {
      return $query->result_array();
    }
    else
    {
      return FALSE;
    }
  }

  function consulta_especifica($codigo_barras)
  {
    $this->db->select('*');
    $this->db->from('producto');
    $this->db->where('codigo_barras',$codigo_barras);
    $query= $this->db->get();
    if ($query->num_rows() > 0)
    {
      return $query->result_array();
    }
    else
    {
      return FALSE;
    }

}
}
