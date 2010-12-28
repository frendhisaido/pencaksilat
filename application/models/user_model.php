<?php
class user_model extends Model {

    function user_model(){
        parent:: Model();
    }

    function add($username,$passwordx,$email){
    $password= md5($passwordx);
       $type= "user";
       $this->db->query("insert into user(username,password,email,type) values(\"$username\",\"$password\",\"$email\",\"$type\")");
       }
    
    function getuser($username){
      $this->db->select('userid,username,email,type');
      $this->db->like('username',$username);
      return $this->db->get('user');
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
        } else {
          return false;
        }
    }
}
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */