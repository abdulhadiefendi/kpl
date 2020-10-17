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
$route['default_controller'] = 'C_landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// login
$route['login'] = 'C_login';
$route['actlogin'] = 'C_login/auth';
$route['logout'] = 'C_login/logout';

// akun
$route['profile'] = 'C_akun/bio';
$route['actprofile'] = 'C_akun/updatebio';
$route['password'] = 'C_akun/password';
$route['actpassword'] = 'C_akun/updatepassword';

// produk
$route['produk'] = 'C_produk';
$route['tambahproduk'] = 'C_produk/create';
$route['storeproduk'] = 'C_produk/store';
$route['editproduk/(:any)'] = 'C_produk/edit/$1';
$route['updateproduk'] = 'C_produk/update';
$route['hapusproduk/(:any)'] = 'C_produk/delete/$1';

// produk manager
$route['produkmanager'] = 'C_produkm';
$route['grafik'] = 'C_produkm/grafik';

// kategori
$route['kategori'] = 'C_kategori';
$route['tambahkategori'] = 'C_kategori/create';
$route['storekategori'] = 'C_kategori/store';
$route['editkategori/(:any)'] = 'C_kategori/edit/$1';
$route['updatekategori'] = 'C_kategori/update';
$route['hapuskategori/(:any)'] = 'C_kategori/delete/$1';


// sub kategori
$route['subkategori'] = 'C_subkategori';
$route['tambahsubkategori'] = 'C_subkategori/create';
$route['storesubkategori'] = 'C_subkategori/store';
$route['editsubkategori/(:any)'] = 'C_subkategori/edit/$1';
$route['updatesubkategori'] = 'C_subkategori/update';
$route['hapussubkategori/(:any)'] = 'C_subkategori/delete/$1';

// pegawai
$route['pegawai'] = 'C_pegawai';
$route['tambahpegawai'] = 'C_pegawai/create';
$route['storepegawai'] = 'C_pegawai/store';
$route['editpegawai/(:any)'] = 'C_pegawai/edit/$1';
$route['updatepegawai'] = 'C_pegawai/update';
$route['hapuspegawai/(:any)'] = 'C_pegawai/delete/$1';


$route['detail/(:any)'] = 'C_landing/detail/$1';