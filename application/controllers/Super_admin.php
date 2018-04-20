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

}
