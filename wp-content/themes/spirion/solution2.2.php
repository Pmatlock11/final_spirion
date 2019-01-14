<?php
/* Template Name: Solution 2.2 */
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
        <div class="banner discovery add">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>
                            <?php the_field('banner_heading'); ?>
                        </h2>
                        <strong>
                            <?php the_field('banner_tagline'); ?></strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="container healthcare_text_holder">
            <div class="row">
                <div class="col-12">
                    <div class="health_text">
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container healthcare_text_holder featured_solution">
            <?php $args = array('post_type' => 'step', 'category_name' => 'featured-step'); $the_query = new WP_Query($args); ?>
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="row">
                <div class="col-sm-6">
                    <strong class="title">
                        <?php the_title(); ?></strong>
                    <span>
                        <?php the_field('tagline'); ?></span>
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
                <div class="col-sm-6 pull-right">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <?php wp_reset_postdata(); endwhile; endif; ?>
        </div>
        <div class="container solution_list">
            <div class="row">
                <div class="col-sm-6 solution_item">
                    <ul class="solution_items list-unstyled">
                        <?php $args = array('post_type' => 'step', 'category_name' => 'left-steps'); $the_query = new WP_Query($args); ?>
                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                            <strong class="title">
                                <?php the_title(); ?></strong>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </li>
                        <?php wp_reset_postdata(); endwhile;  endif; ?>
                    </ul>
                </div>
                <div class="col-sm-5 solution_item pull-right">
                    <ul class="solution_items list-unstyled">
                        <?php $args = array('post_type' => 'step', 'category_name' => 'right-steps'); $the_query = new WP_Query($args); ?>
                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                            <strong class="title">
                                <?php the_title(); ?></strong>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </li>
                        <?php wp_reset_postdata(); endwhile; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php get_template_part('blocks/clients-section'); ?>
</div>
<?php get_template_part('blocks/our-features'); ?>
</main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>