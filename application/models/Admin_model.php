<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {

	public function get_user_data($user_email){
		$user_details=$this->db->select('*')
							->from('tbl_user')
							->where('user_email',$user_email)
							->get()
							->row();	
		return $user_details;						

	}

}