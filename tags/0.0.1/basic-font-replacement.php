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
function basic_font_replacement_scripts() {
	wp_enqueue_style( 'basic_font_replacement-font', get_stylesheet_uri()  . '/css/replacement-font.css', array(), filemtime( get_template_directory() . '/css/replacement-font.css' ), false );
	// wp_enqueue_script( 'basic_font_replacement-script', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'basic_font_replacement_scripts' );
