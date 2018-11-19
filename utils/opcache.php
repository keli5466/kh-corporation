<?php

// Get the auth vars using htaccess if necessary
// https://stackoverflow.com/a/7792912/59160
$header = $_SERVER['REDIRECT_HTTP_AUTHORIZATION'] ?: $_SERVER['HTTP_AUTHORIZATION'];
if (!empty($header)) {
	list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) =
	  explode(':', base64_decode(substr($header , 6)));
}

// Cheap test for premission
if (empty($_SERVER['PHP_AUTH_USER'])
	|| $_SERVER['PHP_AUTH_USER'] != 'utils'
	|| $_SERVER['PHP_AUTH_PW'] != 'please, be my guest friend') {
	header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  exit('You gotta sign in to use.');
}

// Do the reset
if (function_exists('opcache_reset')) {
	opcache_reset();
	exit('Success! Opcache reset.');
} else {
	exit('No opcache');
}
