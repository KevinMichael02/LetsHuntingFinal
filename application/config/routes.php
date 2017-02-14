<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['home/daftar'] = 'home/daftar';
$route['tentang'] = 'tentang';
$route['saran'] = 'saran';
$route['connect'] = 'connect';
$route['anggota'] = 'anggota';
$route['infokegiatan'] = 'infokegiatan';

$route['admin'] = 'admin';
$route['admin/login'] = 'admin/aksi_login';
$route['admin/logout'] = 'admin/logout';

$route['admin_home'] = 'admin_home';
$route['admin_saran'] = 'admin_saran';
$route['admin_connect'] = 'admin_connect';
$route['admin_kegiatan'] = 'admin_kegiatan';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

