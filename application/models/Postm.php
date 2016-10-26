<?php

class Postm extends CI_Model
{
    public function __construct()
    {
        // code...
      $this->load->database();
    }

    public function getUser($dato1)
    {
        // code...
    $query = $this->db->get_where('usuario', array('email' => $dato1));

        return $query->row_array();
    }

    public function getSesion()
    {
    }

    public function crearusuario($array)
    {
        // code...
    return $this->db->insert('usuarios', $data);
    }
}//fin
