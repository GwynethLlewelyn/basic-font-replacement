<?php
/**
 * @package basic_font_replacement
 * @version 0.0.1
 *
 * This plugin doesn't even have an admin panel. It exists for the sole purpose
 * of replacing the header font with Ardour GM.
 */
/*
Plugin Name: Basic Font Replacement
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: A very basic plugin just to add some extra local fonts.
Author: Gwyneth Llewelyn
Version: 0.0.1
Author URI: https://gwynethllewelyn.net/
*/

/**
 * Proper way to enqueue scripts and styles
 *
 * @return void
 */
function basic_font_replacement_scripts_and_styles() {
	/** var string Directory where this plugin is installed. */
	$basic_font_replacement_dir = trailingslashit( dirname( plugin_basename( __FILE__ ) ) );

	// we have no scripts (for now) (gwyneth 20230527)
	/* wp_enqueue_script( 'basic_font_replacement-script',
		$basic_font_replacement_dir . '/js/replacement-font.js',
		array(),
		'1.0.0',
		true
	); */

	// Enqueue our basic CSS which references the new font.
	wp_enqueue_style( 'basic_font_replacement-css',
		$basic_font_replacement_dir . '/css/replacement-font.css',
		array(),
		filemtime( $basic_font_replacement_dir .  '/css/replacement-font.css' ),
		false
	);
}

add_action( 'wp_enqueue_scripts', 'basic_font_replacement_scripts_and_styles' );
