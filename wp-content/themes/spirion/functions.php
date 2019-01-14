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
register_nav_menu('footer-menu1', 'Footer-Menu1');
register_nav_menu('footer-menu2', 'Footer-Menu2');
register_nav_menu('footer-menu3', 'Footer-Menu3');
register_nav_menu('footer-menu4', 'Footer-Menu4');
register_nav_menu('footer-menu5', 'Footer-Menu5');
register_nav_menu('footer-menu6', 'Footer-Menu6');
register_nav_menu('footer-menu7', 'Footer-Menu7');
register_nav_menu('footer-menu8', 'Footer-Menu8');

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
register_post_type('feature', array(
	'label' => __('Our Features'),
	'singular_label' => __('Our Features'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag', 'category'),
	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));
register_post_type('team', array(
	'label' => __('Team Members'),
	'singular_label' => __('Team Members'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag', 'category'),
	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));
register_post_type('resource', array(
	'label' => __('Resources'),
	'singular_label' => __('Resources'),
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

add_action('init', 'create_tabs_post_type');
function create_tabs_post_type()
{
	register_post_type('tab', array(
		'label' => __('Tabs'),
		'singular_label' => __('Tab'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => false,
		'query_var' => false,
		'taxonomies' => array('post_tag', 'category'),
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
	));
}
add_action('init', 'create_step_post_type');
function create_step_post_type()
{
	register_post_type('step', array(
		'label' => __('Steps'),
		'singular_label' => __('Step'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => false,
		'query_var' => false,
		'taxonomies' => array('post_tag', 'category'),
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
	));
}
add_action('init', 'create_blog_post_type');
function create_blog_post_type()
{
	register_post_type('blog post', array(
		'label' => __('Blog Posts'),
		'singular_label' => __('Blog Post'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => false,
		'query_var' => false,
		'taxonomies' => array('post_tag', 'category'),
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
	));
}
function change_excerpt($text)
{
	$pos = strrpos($text, '[');
	if ($pos === false) {
		return $text;
	}

	return rtrim(substr($text, 0, $pos));
}
add_filter('get_the_excerpt', 'change_excerpt');