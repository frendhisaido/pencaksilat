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
}

/* End of file start.php */
/* Location: ./system/application/controllers/start.php */