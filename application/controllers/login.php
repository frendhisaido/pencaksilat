<?php

class Login extends Controller {

	function Login()
	{
		parent::Controller();
    $this->load->helper('url','form');
    $this->load->library('form_validation','session');
    $this->load->model('user_model');	
	}
	
	function index()
	{
		$this->load->view('login/login_view');
	}
  
  function register(){
        
    $this->load->view('login/register');
  }
  
  function add_user(){
    $username= $this->input->post('username');
    $password= $this->input->post('password');
    $email= $this->input->post('email');
    $this->user_model->add($username,$password,$email);    
    $this->session->set_userdata('username',$username);
    $this->session->set_userdata('email',$email);
    $this->load->view('homepage');
  }
  
  function proseslogin(){
    $username= $this->input->post('username');
    $password= $this->input->post('password'); 
    if ($this->user_model->ceklogin($username,$password) === TRUE){
      //ambil getuser dari model      
      $getuser=$this->user_model->getuser($username)->row_array();
      //cek admin apa user
      
      $type= $getuser['type'];
      if ($type == "admin"){
        //pasang session  
        $data= array(
          'userid'  => $getuser['userid'],
          'username'=> $getuser['username'],
          'type'    => $type
        );
        $this->session->set_userdata($data);
        //lempar deh
        redirect('start/navto/admin');
        //$this->load->view('admin/admin_panel');
      }else{
        //pasang session
        $data= array(
          'userid'  => $getuser['userid'],
          'username'=> $getuser['username'],
          'type'    => $type
        );
        $this->session->set_userdata($data);
        //lempar deh
        redirect('/start/navto/user');
        //$this->load->view('homepage');
      }
      }else{
      //$data['error']= "Username/password yang anda masukkan salah.";
      //$this->load->view('login/login_view',$data);
      $this->load->view('login/login_error');
    }
  }
  
  function out(){
    $this->session->sess_destroy();
    redirect('/start');
  }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */