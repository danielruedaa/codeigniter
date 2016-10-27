<?php

class Postm extends CI_Model
{
    /**
     * [__construct description].
     */
    public function __construct()
    {
        // code...
      $this->load->database();
    }
    /**
     * [getUser description].
     *
     * @param [type] $dato1 [description]
     *
     * @return [type] [description]
     */
    public function getUser($dato1)
    {
        // code...
    $query = $this->db->get_where('usuario', array('email' => $dato1));

        return $query->row_array();
    }
    /**
     * [getUser_edicion description].
     *
     * @param int $dato_edicion [description]
     *
     * @return [type] [description]
     */
    public function getUser_edicion($dato_edicion = 1)
    {
        $query = $this->db->get_where('usuario', array('id' => $dato_edicion));

        return $query->row_array();
    }
    /**
     * [crearusuario description].
     *
     * @param [type] $array [description]
     *
     * @return [type] [description]
     */
    public function crearusuario($array)
    {
        // code...
    return $this->db->insert('usuarios', $data);
    }
}//fin
