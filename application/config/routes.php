<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'pages';

$route['updates'] = 'pages/updates';
$route['updates/(.+)'] = 'pages/updates/$1';

$route['blog'] = 'pages/blogs';
$route['blog/(.+)'] = 'pages/blogs/$1';

$route['success'] = 'pages/success';
$route['login'] = 'Login/index';
$route['signup'] = 'Signup/index';

$route['myportal'] ="pages/portal";


$route['404_override'] = '';
$route['(:any)'] = 'pages/view/$1';
$route['translate_uri_dashes'] = FALSE;
