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
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
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

//Add brand
$route['add-brand']="Super_admin/add_brand";
//Manage Brand
$route['manage-brand']='Super_admin/manage_brand';
//Save Brand
$route['save-brand']='Super_admin/save_brand_info';




$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
