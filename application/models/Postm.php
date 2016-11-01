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
    public function crearusuario($array_usuario)
    {
        // code...
    return $this->db->insert('usuario', $array_usuario);
    }
    /**
     * [update_user description].
     *
     * @param [type] $array [description]
     *
     * @return [type] [description]
     */
    public function update_user($data)
    {
        // code...

        $this->db->where('id', $data['id']);
        $this->db->update('usuario', $data);
    }

    public function delete_user($id_borrar)
    {
        // code...
        $this->db->delete('usuario', array('id' => $id_borrar));
    }
    public function crear_post($array_post)
    {
        // code...
         return $this->db->insert('post', $array_usuario);
    }
}//fin
