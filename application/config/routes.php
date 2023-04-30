<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']           = 'admin/login';
$route['register']        = 'admin/register';
$route['dashboard']       = 'admin/dashboard';


// frontend 
$route['index']           = 'frontend/index';
$route['products']        = 'frontend/product';
$route['stores']          = 'frontend/store';
$route['blanks']          = 'frontend/blank';
$route['checkouts']       = 'frontend/checkout';


  
