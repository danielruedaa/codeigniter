<?php
class Postm extends CI_Model{

  function __construct(argument)
  {
    # code...
      $this->load->database();
  }

  public function Sesion($dato1)
  {
    # code...
    $query = $this->db->get_where('usuarios', array('email' => $dato1));

  }
  public function getSesion()
  {
    return $query->row_array();
  }

  public function crearusuario($array)
  {
    # code...
    return $this->db->insert('usuarios', $data);

  }



}//fin
