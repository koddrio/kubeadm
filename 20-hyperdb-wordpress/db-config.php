<?php
$wpdb->add_database( [
	'host'      => 'wordpress-mariadb-primary',
	'user'      => DB_USER,
	'password'  => DB_PASSWORD,
	'name'      => DB_NAME,
	'write'     => 1,
	'read'      => 1000,
] );

$wpdb->add_database( [
	'host'     => 'wordpress-mariadb-secondary',
	'user'     => DB_USER,
	'password' => DB_PASSWORD,
	'name'     => DB_NAME,
	'write'    => 0,
	'read'     => 1,
] );