<?php
/* Template Name: Platform Template */
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
        <div class="banner platform">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2><?php the_field('banner_heading'); ?></h2>
                        <strong><?php the_field('banner_tagline'); ?></strong>
                        <span class="small"><?php the_field('banner_slogan'); ?></span>
                        <iframe src="<?php the_field('banner_video_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="rapid_area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="rapid_header">
                            <h2><?php the_field('rapid_heading'); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs_section">
            <div class="container">
                <div class="row tabbing_row">
                    <div class="col-sm-3 tabset_col no_bg">
                        <ul class="tabs list-unstyled">
                            <?php $args = array('post_type' => 'tab', 'category_name' => 'Platform Tabs'); $the_query = new WP_Query($args); ?>
                            <?php $cn = 1; if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="<?php if ($cn == 1) { echo 'active'; } ?>"><a href="#<?php the_title(); ?>"><?php the_title(); ?></a></li>
						    <?php $cn++; wp_reset_postdata(); endwhile; endif; ?>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                            <?php $args = array('post_type' => 'tab', 'category_name' => 'Platform Tabs'); $the_query = new WP_Query($args); ?>
                            <?php $tab_counter = 1; if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="tab <?php if ($tab_counter == 1) { echo 'active'; } ?>" id="<?php the_title(); ?>">
                                    <div class="tab_text">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_content(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="read_more">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="img_holder">
                                        <img src="<?php bloginfo('template_url'); ?>/img/img10.png" alt="#">
                                    </div>
                                </div>
                            <?php $tab_counter++; wp_reset_postdata(); endwhile; endif; ?>
                    </div>
                </div>
                <div class="row tab_btns_row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn-primary filled center">[CTA Text]</a>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>