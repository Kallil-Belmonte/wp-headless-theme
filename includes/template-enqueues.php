<?php
/**
 * Enqueues
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 *
 * @package WordPress
 * @subpackage WP_Headeless_Theme
 */

/**
 * FONTS
 */
function wp_headless_theme_fonts() {
	/** ROBOTO */
	wp_enqueue_style( 'roboto_font', '//fonts.googleapis.com/css?family=Roboto' );
}

add_action( 'wp_enqueue_scripts', 'wp_headless_theme_fonts' );

/**
 * LOGIN
 */
function wp_headless_theme_styles() {
	wp_enqueue_style( 'login_styles', get_template_directory_uri() . '/assets/css/login.css', array(), null );
}

add_action( 'login_enqueue_scripts', 'wp_headless_theme_styles' );

/**
 * ADMIN
 */
function wp_headless_theme_admin_styles() {
	wp_enqueue_style( 'admin_styles', get_template_directory_uri() . '/assets/css/admin.css', array(), null );
}

add_action( 'admin_enqueue_scripts', 'wp_headless_theme_admin_styles' );
