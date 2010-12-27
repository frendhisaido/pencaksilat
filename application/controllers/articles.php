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
  
  function view(){
    //view satu article
    $id = $this->uri->segment(3);
    $row= $this->articles_model->getone($id);
    $data= array(
      'title'     => $row->title,
      'content'   => $row->content
    );   
    $this->load->view('article_view',$data);
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
    redirect('articles/'); 
  }
  
  function viewedit(){
    $id = $this->uri->segment(3);
    $row= $this->articles_model->getone($id);
    $data= array(
      'articleid' => $id,
      'title'     => $row->title,
      'content'   => $row->content,
    );   
    $this->load->view('admin/article_edit',$data);
    
  }
  
  function updatenow(){
    $idarticle= $this->input->post('articleid');
    $data = array(
      'title' => $this->input->post('title'),
      'content' => $this->input->post('content')
    );
    
    $this->articles_model->updatecontent($data, $idarticle);
    $kesini="/articles/viewedit/".$idarticle;
    redirect($kesini);
  }
  
  function deletenow(){
    $id= $this->uri->segment(3);
    $this->articles_model->deletethis($id);
    redirect('articles/');
  }
}

/* End of file articles.php */
/* Location: ./application/controllers/articles.php */