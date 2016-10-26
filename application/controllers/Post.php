<?php

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
            //  $this->load->helper('url_helper'); //si no esta cargado en el autoload.php
            //  $this->load->helper('form');
            //$this->load->helper('form_validation');
          $this->load->model('Postm'); //cago el modelo
    }

    public function index()
    {
        //  $leerdb['news'] = $this->modelopost->get_news();
                $this->load->view('post/Inicio'); //cargo el inicio del proyecto
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

                   //envio un parametro y recoj el dato
                   $infoUser = $this->Postm->getUser($data['email']);
            if (!empty($infoUser)) {
                //hago la comparacion
                if ($data['email'] == $infoUser['email'] && $data['clave'] == $infoUser['clave']) {
                    switch ($infoUser['rol']) {
                            case 'Administrador':
                              // code...
                            $this->load->view('post/Pp');
                              break;
                            case 'Editor':
                              // code...
                            $this->load->view('post/post1');
                              break;
                            case 'Usuario':
                            $this->load->view('post/leer');
                              // code...
                              break;
                            default:
                              // code...
                            $this->load->view('post/Inicio');
                            break;
                      }
                } else {
                    // code...
                  $erroSesion['error'] = 'Clave o correo invalido';
                    $this->load->view('post/Inicio', $erroSesion);
                }
            } else {
                $errorConsulta['error'] = 'No existen los datos';
                $this->load->view('post/Inicio', $errorConsulta);
                // vacio ...
            }
        } else {
            //else de la validacion
            $datos['mensaje'] = 'Validación incorrecta';
            $this->load->view('post/Inicio', $datos);
        }
    }

    public function crear()
    {
        //cargar la pagina para crear la cuenta
          $this->load->view('post/Crear');
    }

        //funcion para guardar los datos para crear cuenta
        public function crearusuario()
        {
            // validacion de datos
            $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|min_length[5]|max_length[20]');
            $this->form_validation->set_rules('login', 'Login', 'trim|required|min_length[5]|max_length[20]');
            $this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|min_length[5]|max_length[20]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('rol', 'Cuenta', 'trim|required|min_length[5]|max_length[20]');
            $this->form_validation->set_rules('Password', 'Clave', 'trim|required|min_length[5]|max_length[20]');

          // mensajes de validacion
             $this->form_validation->set_message('required', 'El campo %s es obligatorio');
            $this->form_validation->set_message('alpha', 'El campo %s debe estar compuesto solo por letras');
            $this->form_validation->set_message('min_length[3]', 'El campo %s debe tener mas de 3 caracteres');
            $this->form_validation->set_message('valid_email', 'El campo %s debe ser un email correcto');
            $data = array(
                 'nombre' => $this->input->post('nombre'),
                 'telefono' => $this->input->post('telefono'),
                 'email' => $this->input->post('email'),
                 'rol' => $this->input->post('rol'),
                 'clave' => $this->input->post('Password'),
                 'login' => $this->input->post('login'),
                          );

            if ($this->form_validation->run() == true) {
                $datos['mensaje'] = 'Validación correcta';

                //return $this->db->insert('usuario', $data);

                switch ($data['rol']) {
                  case 'Administrador':
                    // code...
                  $this->load->view('post/Pp');
                    break;
                  case 'Editor':
                    // code...
                  $this->load->view('post/post1');
                    break;
                  case 'Usuario':
                  $this->load->view('post/Inicio');
                    // code...
                    break;
                  default:
                    // code...
                  $this->load->view('post/Inicio');
                    break;
                }
            } else {
                $datos['mensaje'] = 'Validación incorrecta';
                $this->load->view('post/Crear', $datos);
            }

            return $this->db->insert('usuario', $data);
        }

    public function guardarPost($value = '')
    {
        // code...
        // validacion de datos
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|min_length[2]|max_length[20]');
        $this->form_validation->set_rules('editor1', 'Escribe tu post ....', 'trim|required|min_length[5]');

      // mensajes de validacion
         $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('alpha', 'El campo %s debe estar compuesto solo por letras');
        $this->form_validation->set_message('min_length[5]', 'El campo %s debe tener mas de 5 caracteres');

        $data = array(
             'nombre' => $this->input->post('nombre'),
             'editor1' => $this->input->post('editor1'),
             'fecha' => $this->date('d/m/y '),
             'hora' => $this->date('g:ia'),
                      );
        if ($this->form_validation->run() == true) {
            $datos['mensaje'] = 'Validación correcta';

          return $this->db->insert('post', $data);


                          }
        } else {
            $datos['mensaje'] = 'Validación incorrecta';
            $this->load->view('post/Crear', $datos);
        }

        return $this->db->insert('usuario', $data);
    }
}//finm
