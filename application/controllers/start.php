<?php

class Start extends Controller {

	function Start()
	{
		parent::Controller();
    $this->load->model('articles_model');
	}
	
	function index()
	{
	  $data= array();
      if($query= $this->articles_model->getcontents()){
        $data['konten']= $query;
      }
		$this->load->view('homepage',$data);
	}
  
  function navto(){
    $theview = $this->uri->segment(3);
    if($theview == "user"){
    $this->load->view('user_panel');
    }else{
      redirect('/articles');
    }
  }
}

/* End of file start.php */
/* Location: ./application/controllers/start.php */