<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['categories/create'] = 'categories/create';
$route['categories'] = 'categories/index';

$route['posts/update'] = 'posts/update';
$route['posts/create'] = 'posts/create';
$route['posts'] = 'posts/index';
$route['posts/(:any)'] = 'posts/view/$1';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
