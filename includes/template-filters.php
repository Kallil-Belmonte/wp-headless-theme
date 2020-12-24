<?php
/**
 * Filters
 *
 * @link https://codex.wordpress.org/Plugin_API/Filter_Reference
 *
 * @package WordPress
 * @subpackage WP_Headeless_Theme
 */

/**
 * LOGIN LOGO TITLE
 */
function login_logo_title() {
  return get_option('blogname');
}

add_filter('login_headertitle', 'login_logo_title');

/**
 * LOGIN LOGO URL
 */
function login_logo_url() {
  return "https://www.google.com.br/";
}

add_filter('login_headerurl', 'login_logo_url');
