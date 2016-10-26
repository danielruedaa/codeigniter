<?php

class Gentella extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
              //  $this->load->helper('url_helper'); //si no esta cargado en el autoload.php
              //  $this->load->helper('form');
              //$this->load->helper('form_validation');
    }

    public function index()
    {
        $this->load->view('template/production/login');
    }

    public function session($value = '')
    {
        // code...

            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('Password', 'Clave', 'trim|required|min_length[5]|max_length[20]');
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $data = array(
                'email' => $this->input->post('email'),
                'clave' => $this->input->post('Password'),
            );

        if ($this->form_validation->run() == true) {
            $datos['mensaje'] = 'Validación correcta';
          //  $databd['news'] = $this->modelopost->getSesion(); //traer los datos de la bd
           //hago la comparacion
        } else {
            $datos['mensaje'] = 'Validación incorrecta';
        }
        $this->load->view('template/production/login');
    }

        //funcion para guardar los datos para crear cuenta
        public function crearusuario()
        {
            // validacion de datos
  $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|min_length[5]|max_length[20]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('Password', 'Clave', 'trim|required|min_length[5]|max_length[20]');

// mensajes de validacion
   $this->form_validation->set_message('required', 'El campo %s es obligatorio');
            $this->form_validation->set_message('alpha', 'El campo %s debe estar compuesto solo por letras');
            $this->form_validation->set_message('min_length[3]', 'El campo %s debe tener mas de 3 caracteres');
            $this->form_validation->set_message('valid_email', 'El campo %s debe ser un email correcto');
            $data = array(
                   'nombre' => $this->input->post('nombre'),
                   'email' => $this->input->post('email'),
                   'clave' => $this->input->post('Password'),
                          );
            if ($this->form_validation->run() == true) {
                $datos['mensaje'] = 'Validación correcta';
                //$this->load->view('template/production/form_advanced', $datos);
                  die('ento a validar');

                return $this->db->insert('usuario', $data);
            } else {
                $datos['mensaje'] = 'Validación incorrecta';
                $this->load->view('template/production/login', $datos);
            }
        }
}//finm
