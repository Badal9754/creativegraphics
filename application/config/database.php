<?php
defined('BASEPATH') or exit('No direct script access allowed');;
if (PRODUCT_ENVIRONMENT == 'PROD') {
	$active_group = 'live';
} else {
	$active_group = 'local';
}
$query_builder = TRUE;

$db['local'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'creativegraphics',
	'dbdriver' => 'mysqli',
	'dbprefix' => 'cg_',
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

$db['live'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'digitalcard_card_user',
	'password' => 'Sagar@11',
	'database' => 'digitalcard_card',
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
