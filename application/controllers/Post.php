<?php

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
            //  $this->load->helper('url_helper'); //si no esta cargado en el autoload.php
            //  $this->load->helper('form');
            //$this->load->helper('form_validation');
          //   $this->load->model('Postm');//cago el modelo
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
            //send data to controller
            $this->news_model->Sesion($data['email']);

        if ($this->form_validation->run() == true) {
            $datos['mensaje'] = 'Validación correcta';
            $databd['news'] = $this->modelopost->getSesion(); //traer los datos de la bd
                   //hago la comparacion
                   if ($data['email'] == $databd['email'] && $data['clave'] == $databd['clave']) {
                       switch ($databd['rol']) {
                               case 'Administrador':
                                 // code...
                               $this->load->view('Post/Pp');
                                 break;
                               case 'Editor':
                                 // code...
                               $this->load->view('viewpost/post1');
                                 break;
                               case 'Usuario':
                               $this->load->view('Post/Inicio');
                                 // code...
                                 break;
                               default:
                                 // code...
                               $this->load->view('viewpost/Inicio');
                               break;
                         }
                   }
        } else {
            $datos['mensaje'] = 'Validación incorrecta';
            $this->load->view('post/Inicio');
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

                return $this->db->insert('usuario', $data);
            } else {
                $datos['mensaje'] = 'Validación incorrecta';
                $this->load->view('post/Crear', $datos);
            }
                  //comparo el rol para dirigirlo a la pagina adecuada
/*
            if ($data['rol'] == 'Administrador') {
                $this->load->view('Post/Pp');
            } elseif ($data['rol'] == 'Editor') {
                // code...
                       $this->load->view('viewpost/post1');
            } elseif ($data['rol'] == 'Usuario') {
                // code...
                     $this->load->view('Post/leer');
            } else {
                // code...
                     $this->load->view('Post/Inicio');
            }
            */
                /*
                      switch ($data['rol']) {
                      	case 'Administrador':
                      		# code...
                      	$this->load->view('Post/Pp');
                      		break;
                      	case 'Editor':
                      		# code...
                      	$this->load->view('viewpost/post1');
                      		break;
                      	case 'Usuario':
                      	$this->load->view('Post/Inicio');
                      		# code...
                      		break;

                      	default:
                      		# code...
                      	//echo '<script language="javascript">alert("invalido");</script>';
                      	$this->load->view('viewpost/Inicio');

                      		break;
                      }
*/
        }
}//finm
