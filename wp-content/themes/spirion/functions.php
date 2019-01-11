<?php

/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
);

foreach ($understrap_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' => 'Options',
		'menu_title' => 'Options',
		'menu_slug' => 'options',
		'capability' => 'edit_posts',
		'redirect' => false
	));

}
register_post_type('platform slider', array(
	'label' => __('Platform Sliders'),
	'singular_label' => __('Platform Sliders'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag', 'category'),
	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));
register_post_type('get start', array(
	'label' => __('Get Start'),
	'singular_label' => __('Get Start'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag', 'category'),
	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));
register_post_type('clients', array(
	'label' => __('Clients'),
	'singular_label' => __('Clients'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag', 'category'),
	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));
register_post_type('articles', array(
	'label' => __('Articles'),
	'singular_label' => __('Articles'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag', 'category'),
	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));
remove_filter('the_content', 'wpautop');
// AND
remove_filter('the_excerpt', 'wpautop');