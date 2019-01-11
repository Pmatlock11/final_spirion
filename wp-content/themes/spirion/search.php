<?php
/* Template Name: Search Results */
/**
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="wrapper" id="index-wrapper">

		<main class="site-main" id="main">
			<div class="banner search">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h2>Search</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="search_content">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="search_form">
								<form>
									<input type="search" placeholder="What are your looking for?">
								</form>
							</div>
							<ul class="list-unstyled">
								<li>
									<strong class="title"><a href="#">Title of search results]</a></strong>
									<p>[Brief excerpt of search result] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed libero sem. Nulla vestibulum nisi ante, sit amet viverra ipsum tincidunt in...</p>
								</li>
								<li>
									<strong class="title"><a href="#">Title of search results]</a></strong>
									<p>[Brief excerpt of search result] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed libero sem. Nulla vestibulum nisi ante, sit amet viverra ipsum tincidunt in...</p>
								</li>
								<li>
									<strong class="title"><a href="#">Title of search results]</a></strong>
									<p>[Brief excerpt of search result] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed libero sem. Nulla vestibulum nisi ante, sit amet viverra ipsum tincidunt in...</p>
								</li>
								<li>
									<strong class="title"><a href="#">Title of search results]</a></strong>
									<p>[Brief excerpt of search result] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed libero sem. Nulla vestibulum nisi ante, sit amet viverra ipsum tincidunt in...</p>
								</li>
								<li>
									<strong class="title"><a href="#">Title of search results]</a></strong>
									<p>[Brief excerpt of search result] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed libero sem. Nulla vestibulum nisi ante, sit amet viverra ipsum tincidunt in...</p>
								</li>
								<li>
									<strong class="title"><a href="#">Title of search results]</a></strong>
									<p>[Brief excerpt of search result] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed libero sem. Nulla vestibulum nisi ante, sit amet viverra ipsum tincidunt in...</p>
								</li>
								<li>
									<strong class="title"><a href="#">Title of search results]</a></strong>
									<p>[Brief excerpt of search result] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed libero sem. Nulla vestibulum nisi ante, sit amet viverra ipsum tincidunt in...</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container mt">
					<div class="row">
						<div class="col-12 text-center">
							<a href="#" class="btn-primary big filled ml-0 see_more">See more</a>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>
