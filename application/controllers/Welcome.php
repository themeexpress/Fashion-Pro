<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	/**
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
		$this->load->model('Welcome_model');
	}
	public function index()	{
		 $data=array();
		 $data['title']="Home";
		 $data['top_menu_categroy']=$this->Welcome_model->top_menu_categroy_info();
		 $data['limit_categroy_product']=$this->Welcome_model->limit_categroy_product_info();
		 $data['published_brand_info']=$this->Welcome_model->published_brand_info();
		 $data['top_menu_part']=$this->load->view('frontend/includes/top_menu_part',$data,true);
		 $data['home_slider']=$this->load->view('frontend/home_partial/home_slider','',true);
		 $data['home_promotion']=$this->load->view('frontend/home_partial/home_promotion','',true);
		 $data['category_part']=$this->load->view('frontend/home_partial/category_part',$data,true);
		 $data['brand_part']=$this->load->view('frontend/home_partial/brand_part',$data,true);
		// $data['home_left_sidebar']=$this->load->view('pages/home_left_sidebar','',true);
		// $data['recommended_item']=$this->load->view('pages/recommended_item','',true);
		$this->load->view('frontend/master',$data);
	}
	public function accounts(){
	$data=array();
		$data['title']="Accounts";
		$data['slider']=$this->load->view('pages/slider','',true);
		$data['featured_item']=$this->load->view('pages/featured_item','',true);
		$data['category_tab']="This is Accont page content here";
		$data['home_left_sidebar']=$this->load->view('pages/home_left_sidebar','',true);
		$data['recommended_item']=$this->load->view('pages/recommended_item','',true);
		$this->load->view('master',$data);	
	}





}
