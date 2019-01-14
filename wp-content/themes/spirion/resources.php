<?php
/* Template Name: Resources */
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
        <div class="banner resources no_bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="resources_content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <aside id="sidebar">
                            <ul class="tabs list-unstyled resources_tabs">
                                <li><a href="#tab1">All (31)</a></li>
                                <li class="active"><a href="#tab2">White Papers (7)</a></li>
                                <li><a href="#tab3">Webinars (15)</a></li>
                                <li><a href="#tab3">Data Sheets (4)</a></li>
                                <li><a href="#tab3">Case Study (5)</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-sm-9">
                        <div class="articles resources">
                            <div class="container">
                                <div class="row">
                                    <?php $args = array('post_type' => 'blog post', 'posts_per_page' => -1, 'order' => 'ASC'); $the_query = new WP_Query($args); ?>
                                    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="col-sm-4 col-6">
                                        <div class="column">
                                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                            <div class="txt">
                                                <h5 class="resource_title">
                                                    <?php $category = get_the_category(); ?>

                                                    <?php echo $category[0]->cat_name; ?>
                                                    <?php get_the_category($id)[0]->name ?>
                                                </h5>
                                                <div class="txt_holder">
                                                    <strong>
                                                        <?php the_title(); ?></strong>
                                                    <p>
                                                        <?php the_excerpt(); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php wp_reset_postdata(); endwhile; endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>