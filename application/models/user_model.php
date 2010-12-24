<?php
class User_model extends Model {

    function User_model(){
        parent:: Model();
    }

    function add($username,$passwordx,$email){
    $password= md5($passwordx);
       $type= "user";
       $this->db->query("insert into user(username,password,email,type) values(\"$username\",\"$password\",\"$email\",\"$type\")");
       }
    
    function ceklogin($username,$passwordx){
        $password= md5($passwordx);
        $query = $this->db->query("select * from user where username like \"$username\" and password like \"$password\"");
        if ($query->num_rows() > 0 ){
           //kalau user ada dan benar  
           $row = $query->row_array();
           $type= $row['type'];
           
           if($type == "admin"){
             //kalau admin, bawa ke halaman admin_panel
             $data= array(
             'userid'   => $row['userid'],
             'username' => $row['username'],
             'password' => $row['password'],
             'email'    => $row['email'],
             'type'     => $type
             );
             $this->session->set_data($data);
             $this->load->view('admin_panel');
           }else if($type == "user"){
             //kalau user, bawa ke homepage
              $data= array(
             'userid'   => $row['userid'],
             'username' => $row['username'],
             'password' => $row['password'],
             'email'    => $row['email'],
             'type'     => $type
             );
             $this->session->set_data($data);
             $this->load->view('homepage');
           }         
        } else {
          $error= "Username/Password salah.";
          $this->load->view('register',$error);
        }
    }
}
/* End of file user_model.php */
/* Location: ./system/application/controllers/user_model.php */