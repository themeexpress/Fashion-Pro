<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING

| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the

*/
$route['admin-login']='admin';
$route['admin-login-check']='admin/admin_login_check';
$route['home-page']='home';

//Super Admin area secure Dashboard
$route['dashboard']='Super_admin/index';
$route['logout']='Super_admin/logout';

//ADD CATEGORY
$route['add-category']='Super_admin/add_category';

//SAVE CATEGORY
$route['save-category']='Super_admin/save_category';

//manage category
$route['manage-category']='Super_admin/manage_category';

//unpublished category
$route['unpublish-category/(.+)']='Super_admin/unpublish_category/$1';

//Publish category
$route['publish-category/(.+)']='Super_admin/publish_category/$1';
//delete category
$route['delete-category/(.+)']='Super_admin/delete_category/$1';
//edite category
$route['edit-category']='Super_admin/edit_category';

//Add brand
$route['add-brand']="Super_admin/add_brand";

//Manage Brand
$route['manage-brand']='Super_admin/manage_brand';

//Save Brand
$route['save-brand']='Super_admin/save_brand_info';

//unpublished a brand
$route['unpublished-brand/(.+)']='Super_admin/unpublished_brand/$1';

//published a brand
$route['published-brand/(.+)']='Super_admin/published_brand/$1';

//Delete Brand
$route['delete-brand/(.+)']='Super_admin/delete_brand/$1';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
