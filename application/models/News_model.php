<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }//paso 1
        // toma las noticias
        public function get_news($slug = FALSE)
        {
             if ($slug === FALSE)
             {
                        //toma los datos de la bd
                        $query = $this->db->get('news');
                       return $query->result_array();
              }
//hace la consulta selecciona cuando el array slug => slug
//este se usa al primir el link
                $query = $this->db->get_where('news', array('slug' => $slug));
                return $query->row_array();
        }// paso 2
        //pone las noticas en la bd
        public function set_news()
        {
            $this->load->helper('url');

            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'text' => $this->input->post('text')
            );

            return $this->db->insert('news', $data);
        }



}
