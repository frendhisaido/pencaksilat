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
    $rowcom= $this->articles_model->getcomments($id);
    $data['articleid'] = $id;
    $data['title'] = $row->title;
    $data['content'] = $row->content;
    $data['postdate'] = $row->postdate;
    $data['comments']= $rowcom;   
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
  
  function addcomment(){
    $datestring = "%Y-%m-%d %h:%i";
    $time= mdate($datestring);
    $article= $this->input->post('articleid');
    $data = array(
        'userid'    => $this->input->post('userid'),
        'articleid' => $article,
        'comment'   => $this->input->post('comment'),
        'commentdate'  => $time        
    );
    
    $this->articles_model->commentadd($data);
    $kesini= '/articles/view/'.$article;
    redirect($kesini);
  }
  
  function deletecomment(){
     $idcomment = $this->uri->segment(3);
     $article = $this->uri->segment(4);
     $this->articles_model->deletecomment($idcomment);
     $kesini= '/articles/view/'.$article;
     redirect($kesini);
  }
  
}

/* End of file articles.php */
/* Location: ./application/controllers/articles.php */