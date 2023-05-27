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
 */
/*
function basic_font_replacement_scripts() {
	$basic_font_replacement_js_dir = trailingslashit( dirname( plugin_basename( __FILE__ ) ) ) . '/css';

	wp_enqueue_script( 'basic_font_replacement-script', $basic_font_replacement_js_dir . '/js/example.js', array(), '1.0.0', true );
}
*/
function basic_font_replacement_styles() {
	$basic_font_replacement_css_dir = trailingslashit( dirname( plugin_basename( __FILE__ ) ) ) . '/css';

	wp_enqueue_style( 'basic_font_replacement-font', $basic_font_replacement_css_dir . '/replacement-font.css', array(), filemtime( $basic_font_replacement_css_dir .  '/css/replacement-font.css' ), false );
}
// add_action( 'wp_enqueue_scripts', 'basic_font_replacement_scripts' );
add_action( 'wp_head', 'basic_font_replacement_styles' );
