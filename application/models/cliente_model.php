<?php
class Cliente_model extends CI_Model{
    function alta($ap,$am,$nombre,$telefono,$direccion)
    {
      $datos= array(
        'ap_cliente' => $ap,
        'am_cliente' => $am,
        'nombre_cliente' => $nombre,
        'domicilio' => $direccion,
        'numero' => $telefono
      );
      return $this->db->insert('cliente',$datos);
    }

    function consulta()
    {
      $this->db->select('*');
      $this->db->from('cliente');
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

      function consulta_especifica($numero)
      {
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('numero',$numero);
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

    function baja($numero_baja)
    {
        $data = array(
            'status'=>0
        );
        $this->db->where('numero', $numero_baja);
        $this->db->update('cliente', $data);
    }

    function modificar($ap_modificar,$am_modificar,$nombre_modificar,$numero_modificar,$direccion_modificar)
    {
        $data = array(
            'ap_cliente' => $ap_modificar,
            'am_cliente'=> $am_modificar,
            'nombre_cliente'=>$nombre_modificar,
            'numero'=>$numero_modificar,
            'domicilio'=>$direccion_modificar
        );
        $this->db->where('numero', $numero_modificar);
        $this->db->update('cliente', $data);
    }

}
