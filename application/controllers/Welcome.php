<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data=array();
		$data['slider']=$this->load->view('pages/slider','',true);
		$data['featured_item']=$this->load->view('pages/featured_item','',true);
		$data['category_tab']=$this->load->view('pages/category_tab','',true);
		$data['home_left_sidebar']=$this->load->view('pages/home_left_sidebar','',true);
		$data['recommended_item']=$this->load->view('pages/recommended_item','',true);
		$this->load->view('master',$data);
	}
	public function accounts(){
	$data=array();
		$data['slider']=$this->load->view('pages/slider','',true);
		$data['featured_item']=$this->load->view('pages/featured_item','',true);
		$data['category_tab']="This is Accont page content here";
		$data['home_left_sidebar']=$this->load->view('pages/home_left_sidebar','',true);
		$data['recommended_item']=$this->load->view('pages/recommended_item','',true);
		$this->load->view('master',$data);	
	}
	


}
