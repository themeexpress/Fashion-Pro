<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	/**
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
        public function __construct() {
           parent::__construct();
           $admin_id=$this->session->userdata('admin_id');
           if($admin_id!=NULL){
               redirect('dashboard');
           }        

       }
	public function index()	{
		
		$this->load->view('admin/login');
	}

	public function admin_login_check(){
		$admin_email=$this->input->post('admin_email',TRUE);
		$admin_password=$this->input->post('admin_password',TRUE);
		$this->load->model('admin_model');		
		$query=$this->admin_model->check_admin_login_info($admin_email,$admin_password);
		//check if data is available or not
                $sdata=array();
		if ($query) {
                    $sdata['admin_id']=$query->admin_id;
                    $sdata['admin_name']=$query->admin_name;
                    $this->session->set_userdata($sdata);
                    redirect('/dashboard');
                    //if not available the redirect with error message
		}else{
			$data['error_message']='Incorrect Email or Password';
			$this->session->set_userdata($data);			
			$this->load->view('admin/login',$data);

		}
		

	}

	

	



}
