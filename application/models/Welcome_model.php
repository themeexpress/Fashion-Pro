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

	//published category
	public function top_menu_categroy_info(){
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('publication_status',1);
		$query_result=$this->db->get();
		return $query_result->result();
	}

	//published brand info

	public function published_brand_info(){
		$this->db->select('*');
		$this->db->from('tbl_brand');
		$this->db->where('publication_status',1);
		$query_result=$this->db->get();
		return $query_result->result();
	}
	//Limit All category Products for home page random product
	public function limit_categroy_product_info(){
		$query=$this->db->select()
		->from('tbl_product')
		->where('publication_status',1)
		->limit(2,8)
		->get();
	return $query->result();
	}

    
}