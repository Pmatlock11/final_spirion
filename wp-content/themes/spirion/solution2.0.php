<?php
/* Template Name: Solution 2.0 */
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
        <div class="banner discovery add solution">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <ul class="tabs sol_pages text-center list-unstyled">
                            <?php $args = array('post_type' => 'tab', 'category_name' => 'Solution Tabs'); $the_query = new WP_Query($args); ?>
                            <?php $cn = 1; if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="<?php if($cn == 1){ echo " active"; }?>"><a href="#<?php the_title(); ?>">
                                    <?php the_title(); ?></a></li>
                            <?php $cn++; wp_reset_postdata(); endwhile; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="solution_content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php $args = array('post_type' => 'tab', 'category_name' => 'Solution Tabs'); $the_query = new WP_Query($args); ?>
                        <?php $cn = 1; if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="text tab <?php if ($cn == 1) { echo 'active'; } ?>" id="<?php the_title(); ?>">
                            <h2>
                                <?php the_field('custom_heading'); ?>
                            </h2>
                            <?php the_content(); ?>
                            <div class="btn_more_div text-center">
                                <a href="#" class="link_more text_toggler">See More <i class="fa fa-angle-double-down"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <?php $cn++; wp_reset_postdata(); endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="solution_posts">
            <?php if (have_rows('solution_country')) : while (have_rows('solution_country')) : the_row(); ?>
            <article class="solution_post">
                <div class="container">
                    <div class="row post_header text-center">
                        <div class="col-12">
                            <strong class="head_title">
                                <?php the_sub_field('country_tagline'); ?></strong>
                            <h2>
                                <?php the_sub_field('country_name'); ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <?php if (have_rows('solution_column')) : while (have_rows('solution_column')) : the_row(); ?>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">
                                    <?php the_sub_field('abbr_code'); ?>
                                </div>
                                <div class="txt">
                                    <strong class="title">
                                        <?php the_sub_field('title'); ?></strong>
                                    <a href="<?php the_sub_field('learn_more_link'); ?>" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>
                                        <?php the_sub_field('hover_text'); ?>
                                    </p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                        <div class="col-12 expand_div text-center">
                            <a href="#" class="state_expender btn-primary">Expand <i class="fa fa-angle-double-down"
                                    aria-hidden="true"></i></a> </div>
                    </div>
                </div>
            </article>
            <?php endwhile; endif; ?>
        </div>
        <?php get_template_part('blocks/articles'); ?>
        <?php get_template_part('blocks/get-started'); ?>
    </main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>