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
	register_post_type('download resource', array(
		'label' => __('Download Resources'),
		'singular_label' => __('Download Resource'),
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

add_action('init', 'theme_custom_init');
function theme_custom_init()
{
	$labels = array(
		'name' => _x('Resources', 'post type general name', 'your_text_domain'),
		'singular_name' => _x('Resource', 'post type singular name', 'your_text_domain'),
		'add_new' => _x('Add New', 'Resource', 'your_text_domain'),
		'add_new_item' => __('Add New Resource', 'your_text_domain'),
		'edit_item' => __('Edit Resource', 'your_text_domain'),
		'new_item' => __('New Resource', 'your_text_domain'),
		'all_items' => __('All Resources', 'your_text_domain'),
		'view_item' => __('View Resources', 'your_text_domain'),
		'search_items' => __('Search Resources', 'your_text_domain'),
		'not_found' => __('No Resources found', 'your_text_domain'),
		'not_found_in_trash' => __('No Resources found in Trash', 'your_text_domain'),
		'parent_item_colon' => '',
		'menu_name' => __('Resources', 'your_text_domain')
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
	);
	register_post_type('resource', $args);
}
add_action('init', 'resource_categories');
function resource_categories()
{
	$labels = array(
		'name' => _x('Resource Categories', 'taxonomy general name'),
		'singular_name' => _x('Resource Category', 'taxonomy singular name'),
		'search_items' => __('Search Resource Categories'),
		'all_items' => __('All Resource Categories'),
		'parent_item' => __('Parent Resource Category'),
		'parent_item_colon' => __('Parent Resource Category:'),
		'edit_item' => __('Edit Resource Category'),
		'update_item' => __('Update Resource Category'),
		'add_new_item' => __('Add New Resource Category'),
		'new_item_name' => __('New Resource Category Name'),
	);
	register_taxonomy('resource_taxonomies', 'resource', array(
		'hierarchical' => true,
		'show_admin_column' => true,
		'labels' => $labels

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
function custom_search_form()
{
	$sq = get_search_query() ? get_search_query() : __('', 'base'); ?>
<form method="get" action="<?php echo home_url(); ?>">
		<input type="search" name="s" value="<?php echo $sq; ?>" placeholder="What are your looking for?" />
</form>
<?php

}
function custom_header_search_form()
{
	$sq = get_search_query() ? get_search_query() : __('', 'base'); ?>
<form method="get" action="<?php echo home_url(); ?>">
		<input type="search" name="s" value="<?php echo $sq; ?>" placeholder="Search..." />
</form>
<?php

}
