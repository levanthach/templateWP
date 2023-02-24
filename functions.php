<?php

// Require typerocket
include 'typerocket/init.php';


// Require Inc
include 'inc/init.php';

// huggy's includes directory.
$theme_inc_dir = 'inc';

// Array of files to include.
$theme_includes = array(
	'/enqueue.php',  // Enqueue scripts and styles.
);


// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$theme_includes[] = '/woocommerce.php';
}


// Include files.
foreach ( $theme_includes as $file ) {
	require_once get_theme_file_path( $theme_inc_dir . $file );
}