<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 */
class Super_admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Super_admin_model');
        $admin_id=$this->session->userdata('admin_id');
        if($admin_id==NULL){
            redirect('/admin-login');
        }        
        
    }
    public function index(){
        $data=array();
        $data['admin_main_contents']=$this->load->view('admin/pages/admin_contents.php','',true);
        $this->load->view('admin/adminmaster',$data);
    }
    public function logout(){
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $data=array();
        $data['error_message']="You have Successfully Logout";
        $this->session->set_userdata($data);
        redirect('/admin-login');
    }

    /*==================category Functions===============*/
    //Add category
    public function add_category(){
       $data=array();
        $data['admin_main_contents']=$this->load->view('admin/pages/add_category.php','',true);
        $this->load->view('admin/adminmaster',$data); 
    }

    public function save_category(){

        $this->Super_admin_model->save_category_info();
        $sdata=array();
        $sdata['message']="Category Information Saved Successfully!!";
        $this->session->set_userdata($sdata);
        redirect('add-category');
    }
    //Manage Category
    public function manage_category(){        
        $data=array();
        $data['all_category_info']=$this->Super_admin_model->show_all_category_info();
        $data['admin_main_contents']=$this->load->view('admin/pages/manage_category_content.php',$data,true);
        $this->load->view('admin/adminmaster',$data); 
    }
    //unpublish a category
    public function unpublish_category($category_id){
       $this->Super_admin_model->unpublished_category_info($category_id);
       redirect('/manage-category');
        
    }
    //published a category
    public function publish_category($category_id){
    $this->Super_admin_model->published_category_info($category_id);
    redirect('/manage-category');        
    }

    //Detele a category
    public function delete_category($category_id){
        $this->Super_admin_model->delete_category_info($category_id);
        redirect('/manage-category'); 
    }
    //Edit Category    
    public function edit_category($category_id){         
        $data=array();
        $data['category_info']=$this->Super_admin_model->select_category_id($category_id);
        $data['admin_main_contents']=$this->load->view('admin/pages/edit_category.php',$data,true);
        $this->load->view('admin/adminmaster',$data); 
    }
    //Update Category
    public function update_category(){
        $this->Super_admin_model->update_category_info();
        $sdata=array();
        $sdata['message']='Category Updated Successfully!!';
        $this->session->set_userdata($sdata);
        redirect('manage-category');
    }

/*========================Brand Functions================*/
    // Brand
     public function add_brand(){
       $data=array();
        $data['admin_main_contents']=$this->load->view('admin/pages/add_brands.php','',true);
        $this->load->view('admin/adminmaster',$data); 
    }

    //save Brand through model
    public function save_brand_info(){
        $this->Super_admin_model->save_brand_info();
        $sdata=array();
        $sdata['message']='Brand saved Successfully!!';
        $this->session->set_userdata($sdata);
        redirect('add-brand');
    }

    //Manage Brand
    public function manage_brand(){        
        $data=array();
        $data['all_brand_info']=$this->Super_admin_model->show_all_brand_info();
        $data['admin_main_contents']=$this->load->view('admin/pages/manage_brand_content.php',$data,true);
        $this->load->view('admin/adminmaster',$data); 
    }
    //unpublished Brand
    public function unpublished_brand($brand_id){
        $this->Super_admin_model->unpublished_brand_info($brand_id);
        redirect('manage-brand');

    }
    //publised a brand
    public function published_brand($brand_id){
        $this->Super_admin_model->published_brand_info($brand_id);
        redirect('manage-brand');
    }
    //Delete Brand
    public function delete_brand($brand_id){
        $this->Super_admin_model->delete_brand_info($brand_id);
        redirect('manage-brand');

    }
    //Edit Brand
    public function edit_brand($brand_id){
        $data=array();
        $data['single_brand_info']=$this->Super_admin_model->single_brand_info($brand_id);
        $data['admin_main_contents']=$this->load->view('admin/pages/edit_brands.php',$data,true);
        $this->load->view('admin/adminmaster',$data);

    }
    //Update Brand
    public function update_brand(){
        $this->Super_admin_model->update_brand_info();
        $sdata=array();
        $sdata['message']='Brand Updated Successfully!!';
        $this->session->set_userdata($sdata);
        redirect('manage-brand');
    }
    /*=====================Product Functions==================== */
    //Add Product
    public function add_product(){      
        $data=array();
        $data['all_published_category_info']=$this->Super_admin_model->select_all_category_info();
        $data['all_published_brand_info']=$this->Super_admin_model->select_all_brand_info();
        $data['admin_main_contents']=$this->load->view('admin/pages/add_product.php',$data,TRUE);
        $this->load->view('admin/adminmaster',$data); 
    }
    //Save product
    public function save_product(){
        $data=array();
		$data['product_name']=$this->input->post('product_name',TRUE);
		$data['category_id']=$this->input->post('category_id',TRUE);
		$data['brand_id']=$this->input->post('brand_id',TRUE);
		$data['product_short_description']=$this->input->post('product_short_description',TRUE);
		$data['product_long_description']=$this->input->post('product_long_description',TRUE);
		$data['product_price']=$this->input->post('product_price',TRUE);
		$data['product_quantity']=$this->input->post('product_quantity',TRUE);
		$data['product_sale_price']=$this->input->post('product_sale_price',TRUE);
		$is_featured=$this->input->post('is_featured',TRUE);
		if($is_featured==TRUE){
		$data['is_featured']=1;
		}else {
			$data['is_featured']=0;
		}
		//product image upload
			$fdata=array();
			$error="";
				$config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('product_image'))
                {
                        $error = $this->upload->display_errors();

						echo $error;
						//$this->load->view('upload_form', $error);
                }
                else
                {
				$fdata=$this->upload->data();	
				$data['product_image']=$config['upload_path'].$fdata['file_name'];                    
                }
		
        $data['publication_status']=$this->input->post('publication_status',true);
        		
        $this->Super_admin_model->save_product_info($data);
        $sdata=array();
        $sdata['message']='Product Information saved successfully';
        $this->session->set_userdata($sdata);
        redirect('add-product');
    }   
    //manage product
    public function manage_product(){        
        $data=array();
        $data['products_info']=$this->Super_admin_model->show_all_products();
        $data['admin_main_contents']=$this->load->view('admin/pages/manage_products.php',$data,true);
        $this->load->view('admin/adminmaster',$data); 
    }
    //unpublished product
    public function unpublished_product($product_id){
        $this->Super_admin_model->unpublished_product($product_id);
        redirect('manage-product'); 

    }
    //published a product
    public function published_product($product_id){
        $this->Super_admin_model->published_product($product_id);
        redirect('manage-product'); 
    }
    //delete product
    public function delete_product($product_id){       
      $this->Super_admin_model->delete_product_info($product_id);
      redirect('manage-product');
    }
    //Edit product
    public function edit_product($product_id){
        $data=array();
        $data['products_info']=$this->Super_admin_model->single_product_info($product_id);
        $data['admin_main_contents']=$this->load->view('admin/pages/edit_product.php',$data,true);
        $this->load->view('admin/adminmaster',$data); 
    

    }


}
