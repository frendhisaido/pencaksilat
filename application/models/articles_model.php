<?php
class Articles_model extends Model {

    function Articles_model(){
        parent:: Model();
    }
    
    function getcontents(){
      $this->db->order_by('postdate','desc');
      $query= $this->db->get('news');
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
    
}
/* End of file articles_model.php */
/* Location: ./application/models/articles_model.php */