<?php
add_filter( 's3_uploads_s3_client_params', function( $params ) {
	$params['endpoint'] = 'http://minio:9000';
	$params['use_path_style_endpoint'] = true;
	return $params;
} );

add_filter( 's3_uploads_bucket_url', function( $url ) {
	return content_url();
} );