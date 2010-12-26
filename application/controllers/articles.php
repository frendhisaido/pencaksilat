<?php

class Articles extends Controller {

	function Articles()
	{
		parent::Controller();
    $this->load->model('articles_model');
	}
	
	function index()
	{
	  $data= array();
    if($query = $this->articles_model->getcontents()){
      $data['konten'] = $query;
    }
		$this->load->view('admin/admin_panel',$data);
	}
  
  function create(){
    $datestring = "%Y-%m-%d %h:%i";
    $time= mdate($datestring);
    $data = array(
        'userid'  => $this->input->post('userid'),
        'title'   => $this->input->post('title'),
        'content' => $this->input->post('content'),
        'postdate'=> $time        
    );
    
    $this->articles_model->add($data);
    $this->index();
    
  }
}

/* End of file articles.php */
/* Location: ./application/controllers/articles.php */