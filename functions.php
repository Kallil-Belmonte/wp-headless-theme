<?php
/**
 * WP Headless Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage WP_Headeless_Theme
 */

function wp_headless_theme_setup() {
	/**
	 * Supports
	 */
	require get_template_directory() . '/includes/template-supports.php';

	/**
	 * Image sizes
	 */
	require get_template_directory() . '/includes/template-image-sizes.php';
}

add_action( 'after_setup_theme', 'wp_headless_theme_setup' );

/**
 * General functions
 */
require get_template_directory() . '/includes/template-general-functions.php';

/**
 * Enqueues
 */
require get_template_directory() . '/includes/template-enqueues.php';

/**
 * Filters
 */
require get_template_directory() . '/includes/template-filters.php';

/**
 * Actions
 */
require get_template_directory() . '/includes/template-actions.php';
