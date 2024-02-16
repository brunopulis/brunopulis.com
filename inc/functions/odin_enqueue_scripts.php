<?php

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function odin_enqueue_scripts()
{
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style('odin-style', get_stylesheet_uri(), array(), null, 'all');

	// jQuery.
	wp_enqueue_script('jquery');

	// General scripts.
	wp_enqueue_script( 'bootstrap-jquery', $template_url . '/assets/js/vendor/jquery.min.js' );
	// wp_enqueue_script( 'font-awesome', $template_url . '/assets/js/vendor/font-awesome.min.js' );
	wp_enqueue_script( 'custom-scripts', $template_url . '/assets/js/custom.min.js', '', '', true );
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir )
{
	$template_url = get_template_directory_uri();

	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );
