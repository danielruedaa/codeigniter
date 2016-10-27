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
    public function getUser_edicion($dato_edicion)
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

    public function update_user($array)
    {
        // code...
        $update = $array;
        echo '<pre>';
        print_r($update);
        echo '</pre>';
        $this->db->where('id', $update['id']);
        $this->db->update('usuario', $update);
    }
}//fin
