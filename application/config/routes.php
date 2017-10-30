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
$route['default_controller'] = 'home';
$route['about'] = 'home/about';
$route['klien'] = 'home/klien';
$route['kontak'] = 'home/kontak';
$route['iot'] = 'home/iot';
$route['blog'] = 'blog';
$route['mail'] = 'mail';
$route['blog/detail/(:num)'] = 'blog/detail_blog/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//product
$route['product_list/(:any)'] = 'product/product_list/$1';
$route['product/detail/(:any)/(:any)/(:num)'] = 'product/detail/$1/$2/$3';

//admin route
$route['admin'] = 'admin';
$route['admin/slider'] = 'admin/slider';
$route['admin/blog'] = 'admin/blog';
$route['admin/klien'] = 'admin/klien';

$route['admin/product'] = 'admin/product';
$route['admin/product-list'] = 'admin/list_product';
$route['admin/product-category'] = 'admin/category_product';

//add
$route['admin/add/slider'] = 'insert/insert_slider';
$route['admin/add/product'] = 'insert/insert_product';
$route['admin/add/blog'] = 'insert/insert_blog';
$route['admin/add/client'] = 'insert/insert_client';
$route['admin/add/category_product'] = 'insert/insert_category_product';

//edit
$route['admin/edit/blog/(:num)'] = 'admin/edit_blog/$1';
$route['admin/edit/slider/(:num)'] = 'admin/edit_slider/$1';
$route['admin/edit/product/(:num)'] = 'admin/edit_product/$1';

$route['admin/edit/slider_f'] = 'update/update_slider';
$route['admin/edit/blog_f'] = 'update/update_blog';
$route['admin/edit/product_f'] = 'update/update_product';

//delete
$route['admin/delete/slider/(:num)/(:any)'] = 'delete/delete_slider/$1/$2';
$route['admin/delete/blog/(:num)'] = 'delete/delete_blog/$1';
$route['admin/delete/client/(:num)/(:any)'] = 'delete/delete_client';
$route['admin/delete/category/(:any)'] = 'delete/delete_category';
$route['admin/delete/product/(:num)'] = 'delete/delete_product';