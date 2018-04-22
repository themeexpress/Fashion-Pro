<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin_model extends CI_model {

	//Save Category
	public function save_category_info(){
		$data=array();
		$data['category_name']=$this->input->post('category_name',true);
		$data['category_description']=$this->input->post('category_description',true);
		$data['publication_status']=$this->input->post('publication_status',true);
		$this->db->insert('tbl_category',$data);

	}
	//Get all Published category to show front page
	public function all_published_category(){
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('publication_status',1);
		$query_result=$this->db->get();		
		return $query_result->result();		

	}
	//Manage Category
	public function show_all_category_info(){
		$this->db->select('*');
		$this->db->from('tbl_category');		
		$query_result=$this->db->get();		
		return $query_result->result();
	}

	//Save Band Info

	public function save_brand_info(){
		$data=array();
		$data['brand_name']=$this->input->post('brand_name',true);
		$data['brand_description']=$this->input->post('brand_description',true);
		$data['publication_status']=$this->input->post('publication_status',true);
		$this->db->insert('tbl_brand',$data);

	}
	//Unpublished Category 
	public function unpublished_category_info($category_id){
		$this->db->set('publication_status',0);		
		$this->db->where('category_id',$category_id);
		$this->db->update('tbl_category');

	}
	//Published a category
	public function published_category_info($category_id){
		$this->db->set('publication_status',1);		
		$this->db->where('category_id',$category_id);
		$this->db->update('tbl_category');
	}
	//Delete category
	public function delete_category_info($category_id){
		$this->db->where('category_id', $category_id);
		$this->db->delete('tbl_category');
	}


	//Get all published Brands
	public function get_published_brand_info(){
		$this->db->select('*');
		$this->db->from('tbl_brand');
		$this->db->where('publication_status',1);
		$query_result=$this->db->get();		
		return $query_result->result();	

	}
 	//Manage Brand
 	public function show_all_brand_info(){
		$this->db->select('*');
		$this->db->from('tbl_brand');		
		$query_result=$this->db->get();		
		return $query_result->result();
	}

	//Unpublished brand
	public function unpublished_brand_info($brand_id){
		$this->db->set('publication_status',0);
		$this->db->where('brand_id',$brand_id);
		$this->db->update('tbl_brand');
	}
	
	//Published brand
	public function published_brand_info($brand_id){
		$this->db->set('publication_status',1);
		$this->db->where('brand_id',$brand_id);
		$this->db->update('tbl_brand');
	}

	//Detete a brand
	public function delete_brand_info($brand_id){
		$this->db->where('brand_id', $brand_id);
		$this->db->delete('tbl_brand');
	}


}