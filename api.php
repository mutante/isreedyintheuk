<?php
require_once( __DIR__ . '/functions.php' );
lastModifiedHeaders();
header( 'Content-Type: application/json' );

$result = [];

if ( isReedyInTheUK() ) {
	$result['isreedyintheuk'] = '';
}

$result['message'] = isReedyInTheUKMessage();
echo json_encode( $result );

