<?php
class Usuario_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function login($username,$password)
  {
    $this->db->select('count(*) as existe');
    $this->db->from('usuario');
    $this->db->where('username',$username);
    $this->db->where('pass',$password);

    return $this->db->get()->row()->existe; 
  }
}
