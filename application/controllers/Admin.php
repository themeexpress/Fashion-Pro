<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('admin/login');
	}

	public function admin_login_check(){
		$user_email=$this->input->post('user_email',TRUE);
		$user_password=$this->input->post('user_password',TRUE);
		$encrypted_password=md5($user_password);
		$this->load->model('admin_model');
		$user_detail=$this->admin_model->get_user_data($user_email);

		if ($encrypted_password==$user_detail->user_password) {
			$this->load->view('admin/adminmaster');
		}else{
			$data['error_message']='Incorrect Email or Password';
			$this->load->view('admin/login',$data);

		}
		

	}

	

	



}
