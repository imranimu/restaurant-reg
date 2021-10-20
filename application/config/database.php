<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

//cms - database
//live database connection
// 'hostname' => '88.208.209.97',
// 'username' => 'central_cms',
// 'password' => 'q19Ot*5g',
// 'database' => 'central_cms',

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'central_cms',
	'password' => 'q19Ot*5g',
	'database' => 'central_cms',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

//srsdraft
// 'hostname' => '77.68.43.27',
// 'username' => 'srsliveapi1',
// 'password' => 'e7358cxqpTvK_432(25d%htsort?rYTREjio;Bfy:h#nHC).{jsbout,rdtG&/+X}',
// 'database' => 'srs_admin',

//live database connection (App Server1)
// 'hostname' => '77.68.43.27',
// 'username' => 'srscontrollive',
// 'password' => 'e549cx*uYTvK_43(85d%gaGdKwM?rVzLPUkm;Bfy:h#nHC).{jsmout,ZEAG&/+X}',
// 'database' => 'srs_admin',

//live database connection (App Server2)
// $db['db_new']['hostname'] = '77.68.43.27';
// $db['db_new']['username'] = 'srsnewserver';
// $db['db_new']['password'] = 'e549cx*uYTvK_43(85d%gaGdKwM?rVzLPUkm;Bfy:h#nHC).{jsmout,ZEAG&/+X}';
// $db['db_new']['database'] = 'srs_admin';

//order online
$db['db_new'] = array(
	'dsn'	=> '',
	'hostname' => '77.68.43.27',
	'username' => 'srsliveapi1',
	'password' => 'e7358cxqpTvK_432(25d%htsort?rYTREjio;Bfy:h#nHC).{jsbout,rdtG&/+X}',
	'database' => 'srs_admin',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
