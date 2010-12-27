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
    
    function add($data){
      $this->db->insert('news',$data);
      return;
    }
    
}
/* End of file articles_model.php */
/* Location: ./application/models/articles_model.php */