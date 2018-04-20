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
    //category
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

}
