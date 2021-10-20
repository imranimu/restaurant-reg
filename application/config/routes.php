<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Frontend';
$route['404_override'] = 'My404';
$route['translate_uri_dashes'] = FALSE;

$route['gallery'] = 'frontend/gallery';
$route['gallery/(:num)'] = 'frontend/gallery/$1';
$route['contact'] = 'frontend/contact_us';