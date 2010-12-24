<?php

class Login extends Controller {

	function Login()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('login/login_view');
	}
}

/* End of file login.php */
/* Location: ./system/application/controllers/login.php */