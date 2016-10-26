<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codf extends CI_Controller {

  function __construct(){
      parent::__construct();
      $this->load->helper('mihelper');
      $this->load->helper('form');
  }

	public function index()
	{
    $data['segmento']=$this->uri->segement(3);
    $this->load->library('Menu', array('inicio','contacto','curso'));// cargo y mando los datos
    $data['mi_menu']=$this->menu->construirMenu();//variable que pasa a la vista
    $this->load->view('facilito/Header');
		$this->load->view('facilito/Bienvenido',$data);

	}

  public function hello()
	{
    $this->load->view('facilito/Header');
		$this->load->view('facilito/Bienvenido');
	}
public function nuevo()
{
  # code...
  $this->load->view('facilito/Header');
  $this->load->view('facilito/Formulario');
}
public function recibirdatos()
{
  # code...
  $data= array('nombre'=> this->input->post('nombre'),
                'video'=> this->input->post('video'));




}

}
