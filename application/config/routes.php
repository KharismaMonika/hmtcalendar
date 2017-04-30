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
$route['default_controller'] = 'login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//route baru
//user
$route['user'] = 'user_controller/dashboard';
$route['list_kepengurusan'] = 'user_controller/list_kepengurusan';
$route['list_departemen'] = 'user_controller/list_departemen';
$route['list_anggota'] = 'user_controller/list_anggota';
$route['gallery'] = 'user_controller/view_gallery';
$route['tambah_foto'] = 'user_controller/upload_foto';
$route['lihat_event'] = 'user_controller/show_event';
$route['tambah_event'] = 'user_controller/add_event';
$route['update_event'] = 'user_controller/edit_event';
$route['penilaian_event'] = 'user_controller/show_penilaian';
$route['form_penilaian'] = 'user_controller/tambah_penilaian';
$route['update_penilaian'] = 'user_controller/update_penilaian';

//admin
//$route['admin'] = 'admin_controller/show_dashboard ';
$route['list_departemen_admin'] = 'admin_controller/show_departemen';
$route['tambah_departemen_admin'] = 'admin_controller/tambah_departemen';
//$route['tambah_kepengurusan_admin'] = 'admin_controller/tambah_kepengurusan';

$route['admin'] = 'kegiatan_controller/list_event_today';
$route['tambah_kepengurusan_admin'] = 'kepengurusan_controller/input';