<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Website';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['add-company/(:any)'] = 'AdminDashboard/add_company/$1';

// login userpanel
$route['login'] = 'Adminlogin';

// userpanel
$route['dashboard'] = 'AdminDashboard';
$route['manage_category'] = 'AdminDashboard/manage_category';
$route['manage_category/(:any)'] = 'AdminDashboard/manage_category/$1';

$route['product'] = 'AdminDashboard/product';
$route['product/(:any)'] = 'AdminDashboard/product/$1';

$route['profile'] = 'AdminDashboard/profile';
$route['wallet'] = 'AdminDashboard/wallet';
$route['change_password'] = 'AdminDashboard/change_password';
$route['logout'] = 'AdminDashboard/logout';

$route['add_printing_press'] = 'AdminDashboard/add_printing_press';
$route['printing_press_list'] = 'AdminDashboard/printing_press_list';
$route['add_order'] = 'AdminDashboard/add_order';
$route['order_history'] = 'AdminDashboard/order_history';
$route['reporting'] = 'AdminDashboard/reporting';
$route['complaints'] = 'AdminDashboard/complaints';
$route['contact_us'] = 'AdminDashboard/contact_us';
$route['training_material'] = 'AdminDashboard/training_material';

// Website pages
$route['get-associate'] = 'Website/get_associate';
$route['associate-forget-password'] = 'Website/associate_forget_password';




