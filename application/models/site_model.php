<?php

class Site_model extends CI_Model {
   /* 
   
    function getAll() {
        $q = $this->db->get('test');
   
    
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        
        return $data;
        }
    }
  */
  
  
  function get_records(){
	  $query = $this->get('data');
	  return $query->result();
  }
  
  function add_record($data){
	  $this->db->insert('data', $data);
	  return;
  }
  
  function update_record(){
	  $this->db->where('id', 2);
	  $this->db->update('data', $data);
  }
  
  function delete_row(){
	  $this->db->where('id', $this->uri->segment(3));
	  $this->db->delete('data');
  }
  
  

}