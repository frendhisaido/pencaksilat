<?php

class Start extends Controller {

	function Start()
	{
		parent::Controller();
    $this->load->helper('url');	
	}
	
	function index()
	{
		$this->load->view('homepage');
	}
  
  function navto(){
    $theview = $this->uri->segment(3);
    if($theview == "user"){
    $this->load->view('user_panel');
    }else{
      $this->load->view('admin/admin_panel');
    }
  }
}

/* End of file start.php */
/* Location: ./application/controllers/start.php */