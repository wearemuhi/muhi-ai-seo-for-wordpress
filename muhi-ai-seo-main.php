<?php
/**
 * Muhi AI SEO for WordPress
 *
 */

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

/**
 * {@internal Nobody should be able to overrule the real version number as this can cause
 *            serious issues with the options.}
 */
const MUHI_VERISON = "1.0";

if ( ! defined( 'MUHIAISEO_PATH' ) ) {
	define( 'MUHIAISEO_PATH', plugin_dir_path( MUHIAISEO_FILE ) );
}

if ( ! defined( 'MUHIAISEO_BASENAME' ) ) {
	define( 'MUHIAISEO_BASENAME', plugin_basename( MUHIAISEO_FILE ) );
}
