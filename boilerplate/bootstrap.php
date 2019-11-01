<?php
/**
 * PHPUnit bootstrap file.
 */

// Composer autoloader must be loaded before WP_PHPUNIT__DIR will be available.
require_once dirname( __DIR__ ) . '/vendor/autoload.php';

// Give access to tests_add_filter() function.
require_once getenv( 'WP_PHPUNIT__DIR' ) . '/includes/functions.php';

// Load custom setup file.
if ( file_exists( __DIR__ . '/setup.php' ) ) {
	require __DIR__ . '/setup.php';
}

// Start up the WP testing environment.
require getenv( 'WP_PHPUNIT__DIR' ) . '/includes/bootstrap.php';
