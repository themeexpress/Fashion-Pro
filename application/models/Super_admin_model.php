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
	//Edit a categroy parameter category id
	 public function select_category_id($category_id){
	 	$this->db->select('*');
	 	$this->db->from('tbl_category');
	 	$this->db->where('category_id',$category_id);
	 	$query_result=$this->db->get();
	 	return $query_result->row();	 	
	 }
	 //Update Category        
		public function update_category_info(){
			$data=array();
			$category_id=$this->input->post('category_id',TRUE);
			$data['category_name']=$this->input->post('category_name',TRUE);
			$data['category_description']=$this->input->post('category_description',TRUE);
			$this->db->where('category_id',$category_id);
			$this->db->update('tbl_category',$data);
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

	
	/*==================Brand Query Functions==============*/
	//Save Band Info
	public function save_brand_info(){
		$data=array();
		$data['brand_name']=$this->input->post('brand_name',true);
		$data['brand_description']=$this->input->post('brand_description',true);
		$data['publication_status']=$this->input->post('publication_status',true);
		$this->db->insert('tbl_brand',$data);
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
	//Edit Brand
	public function single_brand_info($brand_id){
		$this->db->select('*');
		$this->db->from('tbl_brand');
		$this->db->where('brand_id',$brand_id);
		$query_result=$this->db->get();
		return $query_result->row();
	}
	//Update Brand
	public function update_brand_info(){
		$data=array();
		$brand_id=$this->input->post('brand_id',TRUE);
		$data['brand_name']=$this->input->post('brand_name',TRUE);
		$data['brand_description']=$this->input->post('brand_description',TRUE);
		$this->db->where('brand_id',$brand_id);
		$this->db->update('tbl_brand',$data);
	}

	/**
	 * All product query functions here
	 */
	public function select_all_category_info(){
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('publication_status',1);
		$query_result=$this->db->get()->result();
		return $query_result;	

	}
	public function select_all_brand_info(){
		$this->db->select('*');
		$this->db->from('tbl_brand');
		$this->db->where('publication_status',1);
		$query_result=$this->db->get()->result();
		return $query_result;	
	}
	public function save_product_info($data){
		$this->db->insert('tbl_product',$data);		

	}
	public function show_all_products(){
		$this->db->select('*');
		$this->db->from('tbl_product');		
		$query_result=$this->db->get();		
		return $query_result->result();

	}
	//unpublished product
	public function unpublished_product($product_id){
		$this->db->set('publication_status',0);
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}
	//published product
	public function published_product($product_id){
		$this->db->set('publication_status',1);
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}
	public function delete_product_info($product_id){
		$this->db->where('product_id', $product_id);
		$this->db->delete('tbl_product');
	}
	//Edit product
	public function single_product_info($product_id){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('product_id',$product_id);
		$query_result=$this->db->get();
		return $query_result->row();
	}

}