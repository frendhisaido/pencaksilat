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
    
    function getuser($username){
      $this->db->select('userid,username,email,type');
      $this->db->from('user');
      $this->db->where('username',$username);
      $query= $this->db->get();
      return $query;
    }
    
    function ceklogin($username,$passwordx){
        $password= md5($passwordx);
        $this->db->select('username,password');
        $this->db->from('user');
        $this->db->like('username',$username);
        $this->db->like('password',$password);
        $query= $this->db->get();
        if ($query->num_rows() > 0 ){
          return true;
           //kalau user ada dan benar  
           //$row = $query->row_array();
           //$type= $row['type'];
              /*if($type == "admin"){
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
           }*/         
        } else {
          return false;
        }
    }
}
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */