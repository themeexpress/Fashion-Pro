<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_model {

	//show featured product
	public function featured_products_info(){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('is_featured',1);
        $query_result=$this->db->get();	       	
        return $query_result->result();     	
        
    }
    
}