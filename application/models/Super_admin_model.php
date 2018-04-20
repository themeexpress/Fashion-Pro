<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin_model extends CI_model {

	public function save_category_info(){

		$data=array();
		$data['category_name']=$this->input->post('category_name',true);
		$data['category_description']=$this->input->post('category_description',true);
		$data['publication_status']=$this->input->post('publication_status',true);
		$this->db->insert('tbl_category',$data);

	}

}