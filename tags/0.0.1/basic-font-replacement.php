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
 * Proper way to enqueue scripts and styles.
 *
 * @return void
 */
function basic_font_replacement_scripts_and_styles() {
	// The only thing we may need to debug is if the paths are correct...
	if ( defined( 'WP_DEBUG' ) && true === WP_DEBUG )
	{
		error_log('[DEBUG] ' . plugin_basename( __FILE__ ) . ' plugin: URL: "' . plugin_dir_url( __FILE__ ) . '" Path: "' . plugin_dir_path( __FILE__ ) . '"');
	}

	// Enqueue our basic CSS which references the new font.
	wp_enqueue_style( plugin_basename( __FILE__ ),
		plugin_dir_url( __FILE__ ) . 'css/replacement-font.css',
		array(),
		filemtime( plugin_dir_path( __FILE__ ) .  'css/replacement-font.css' ),
		false
	);
}

add_action( 'wp_enqueue_scripts', 'basic_font_replacement_scripts_and_styles' );
