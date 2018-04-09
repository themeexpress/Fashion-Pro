<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {

	public function check_admin_login_info($admin_email,$admin_password){

		$this->db->select('*');
		$this->db->from('tbl_admin');
		$this->db->where('admin_email',$admin_email);
		$this->db->where('admin_password',md5($admin_password));
		$query_result=$this->db->get();
		$query=$query_result->row();
		return $query;





	}

}