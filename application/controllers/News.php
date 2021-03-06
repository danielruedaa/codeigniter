<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news(); //toma datos del modelo news_model
								$data['title'] = 'News archive';

        				$this->load->view('templates/header', $data);
        				$this->load->view('news/index', $data);
        				$this->load->view('templates/footer');
        }
//muestra cuando selecciona 1 noticia
				public function view($slug = NULL)
	{
	        $data['news_item'] = $this->news_model->get_news($slug);

	        if (empty($data['news_item']))
	        {
	                show_404();
	        }

	        $data['title'] = $data['news_item']['title'];

	        $this->load->view('templates/header', $data);
	        $this->load->view('news/view', $data);
	        $this->load->view('templates/footer');
	}


///// ccrea el formulario
	public function create()
	{
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Create a news item';

	    $this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('text', 'Text', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('templates/header', $data);
	        $this->load->view('news/create');
	        $this->load->view('templates/footer');
	    }
	    else
	    {
	        $this->news_model->set_news(); //activa set_news
	        $this->load->view('news/success');
	    }
	}
  ///// funcion que insert los datos la activa funcion crear

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
