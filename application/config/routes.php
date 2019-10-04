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
$route['default_controller'] = 'c_user/';
$route['login']='c_user/login/';
$route['signup']='c_user/signup/';
$route['signuser']='c_user/signuser/';
$route['tes']='c_user/kondisi/';
$route['signvendor']='c_user/vendor/';
$route['pilihan']='c_user/pilih/';
$route['transaksi']='c_user/trans/';
$route['transaksi2']='c_user/trans2/';
$route['transaksi3']='c_user/trans3/';
$route['konfirmasi']='c_user/konfirmasi/';
$route['wedding']='c_user/detail/';
$route['birthday']='c_user/birthday/';
$route['building']='c_user/building/';
$route['notiflogin']='c_user/modallogin/';
$route['detailpaket']='c_user/detailp/';
$route['notifiuser']='c_user/notif/';
$route['notifikasi']='c_user/notifuser/';
$route['notifvendor']='c_vendor/notifvendor/';
$route['homevendor']='c_vendor/index';
$route['notifikasio']='c_vendor/notifikasiorder';
$route['tambahpaket']='c_vendor/tambahpaket';
$route['tampilpaket']='c_vendor/tampilpaket';
$route['keranjang']='c_user/keranjang/';
$route['editvendor']='c_vendor/edit';
$route['dashbor']='c_admin/index';
$route['status_transaksi']='c_user/status_trans/';
$route['daftar_transaksi']='c_user/daftar_trans/';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
