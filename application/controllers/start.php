<?php

class start extends Controller {

	function start()
	{
		parent::Controller();
    $this->load->model('articles_model');
	}
	
	function index()
	{
    $data= array();
    if($query= $this->articles_model->getcontents()){
	  $this->load->library('pagination');
    $config['base_url'] = base_url().'index.php/start/index/';
    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['total_rows'] = $this->db->count_all('news');
    $config['per_page'] = '3';

    $this->pagination->initialize($config);
    
    //load the model and get results
    $this->load->model('articles_model');
    $data['konten'] = $this->articles_model->get_news($config['per_page'],$this->uri->segment(3));
    //$data['konten']= $query;
      }
		$this->load->view('homepage',$data);
	}
  
  function navto() {
    $theview = $this->uri->segment(3);
    if($theview == "user"){
    $this->load->view('user_panel');
    }else{
      redirect('/articles');
    }
  }
  
  // functions for navigation
  function c_event() {
     parent::Controller();
     $this->load->view('event');
  }
  
  function c_gallery() {
     parent::Controller();
     $this->load->view('gallery');
  }
  
  function c_about_us() {
     parent::Controller();
     $this->load->view('about_us');
  }

  function c_contact_us() {
     parent::Controller();
     $this->load->view('contact_us');
  }
  
  /* function c_tittle() {
   $data=array();
    if($query = $this->articles_model->getcontents()){
      $data['konten'] = $query;
      $data['titles'] = $this->articles_model->gettitles();

    }
  $this->load->view('admin/admin_panel/',$data);
  } */
  
}

/* End of file start.php */
/* Location: ./application/controllers/start.php */