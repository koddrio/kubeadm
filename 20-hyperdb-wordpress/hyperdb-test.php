<?php
add_action( 'muplugins_loaded', function() {
	global $wpdb;
	$wpdb->queries = [];
	$wpdb->save_queries = true;

	$wpdb->query( "SELECT * FROM {$wpdb->users} LIMIT 1;" );
	print_r( $wpdb->queries );
	print_r( $wpdb->dbhs );

	$wpdb->query( "UPDATE $wpdb->users SET user_login = 'foo' where user_login = 'bar' LIMIT 1;" );
	print_r( $wpdb->queries );
	print_r( $wpdb->dbhs );
	die();
} );