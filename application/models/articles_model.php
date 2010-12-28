<?php
class articles_model extends Model {

    function articles_model(){
        parent:: Model();
    }
    
    function getcontents(){
      $this->db->order_by('postdate','desc');
      $query= $this->db->get('news');
      return $query->result();
    }
    function get_news($num, $offset) {
    $this->db->order_by('postdate','desc');        
    $query = $this->db->get('news', $num, $offset);  
    return $query->result();
    }
    
    
    function getone($id){
      $this->db->where('articleid',$id);
      $query= $this->db->get('news');
      return $query->row();
    }
    
    function add($data){
      $this->db->insert('news',$data);
      return;
    }
    
    function updatecontent($data, $id) 
  {
    
    $this->db->where('articleid',$id);
    $this->db->update('news', $data);
  }
  
  function deletethis($id){
    $this->db->where('articleid',$id);
    $this->db->delete('news');
  }
  
  function commentadd($data){
    $this->db->insert('comments',$data);
  }
  
  function getcomments($articleid){
    $this->db->select('username,idcomment,comment,commentdate');
    $this->db->from('comments');
    $this->db->join('user','comments.userid = user.userid');
    $this->db->where('articleid',$articleid);
    $this->db->order_by('commentdate','desc');
    $query= $this->db->get();
    return $query->result();
  }
  
  function deletecomment($id) {
    $this->db->where('idcomment',$id);
    $this->db->delete('comments');
  }

  function gettitles() {
    $this->db->select('articleid,title,postdate');
    $this->db->order_by('postdate','desc');
    $query= $this->db->get('news');
    return $query->result();
  }

}
/* End of file articles_model.php */
/* Location: ./application/models/articles_model.php */