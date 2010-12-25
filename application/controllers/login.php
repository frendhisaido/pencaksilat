<?php

class Login extends Controller {

	function Login()
	{
		parent::Controller();
    $this->load->helper('url','form');
    $this->load->library('form_validation','session');
    	
	}
	
	function index()
	{
		$this->load->view('login/login_view');
	}
  
  function register(){
        
    $this->load->view('login/register');
  }
  
  function add_user(){
    $this->load->model('user_model');
    $username= $this->input->post('username');
    $password= $this->input->post('password');
    $email= $this->input->post('email');
    $this->user_model->add($username,$password,$email);    
    $this->session->set_userdata('username',$username);
    $this->session->set_userdata('email',$email);
    $this->load->view('homepage');
  }
  
  function proseslogin(){
    $this->load->model('user_model');
    $username= $this->input->post('username');
    $password= $this->input->post('password');
    if ($this->user_model->ceklogin($username,$password) === TRUE){
      //ambil getuser dari model
      //cek admin apa user
      //logic buat nentuin variabel redirect($maudibawakemana)
      //pasang session  
      //lempar deh
      redirect('start/');
    }else{
      //$data['error']= "Username/password yang anda masukkan salah.";
      //$this->load->view('login/login_view',$data);
      $this->load->view('login/login_error');
    }
  }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */