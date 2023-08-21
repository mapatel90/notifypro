<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['create_notification'] = 'Create_notification/create_notification';
$route['notifypro'] = 'Notify_pro/notifypro';
$route['user/home_page'] = 'User/home_page';
$route['user/login'] = 'User/login';
$route['admin'] = 'Admin/index';
$route['admin/category'] = 'Admin/category_list';
$route['admin/companies'] = 'Admin/companies_list';
$route['admin/add_company'] = 'Admin/add_company';
$route['admin/users'] = 'Admin/users_list';
$route['admin/add_user'] = 'Admin/add_user';
$route['admin/category/add'] = 'Admin/add_category';
$route['vendor/thank_you'] = 'Vendor/thank_you';
$route['user/list'] = 'User/list';
$route['user/create_notification'] = 'User/create_notification';
$route['user/create_notification_details'] = 'User/create_notification_details';
$route['user/document_confirmation'] = 'User/document_confirmation';
$route['vendor'] = 'Vendor/index';
$route['expense'] = 'Vendor/expense';
$route['addmore'] = 'Vendor/addmore';
