<?php
/* Template Name: Data Discovery */
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
        <div class="banner discovery">
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

        <div class="discovery_content">
            <div class="container">
                <div class="row content_row">
                    <div class="col-sm-7">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-sm-5 pull-right text-center">
                        <div class="vid_holder"><iframe src="<?php the_field('video_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe></div>
                        <h1>
                            <?php the_field('main_heading'); ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabs_section with_bg discovery auto_switch">
            <div class="container-fluid">
                <div class="row tabbing_row">
                    <div class="col-sm-3 tabset_col">
                        <ul class="tabs auto_tabs list-unstyled">
                            <?php $args = array('post_type' => 'tab', 'category_name' => 'Discovery Tabs'); $the_query = new WP_Query($args); ?>
                            <?php $cn = 1; if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li><a href="#<?php the_title(); ?>">
                                    <?php the_title(); ?></a></li>
                            <?php $cn++; wp_reset_postdata(); endwhile; endif; ?>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <?php $args = array('post_type' => 'tab', 'category_name' => 'Discovery Tabs'); $the_query = new WP_Query($args); ?>
                        <?php $cn = 1; if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="tab <?php if ($cn == 1) { echo 'active'; } ?>" id="<?php the_title(); ?>">
                            <div class="tab_text fluid white-text">
                                <h3 class="white-text">
                                    <?php the_field('custom_heading'); ?>
                                </h3>
                                <div class="twocols">
                                    <div class="text_col">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="text_col">
                                        <iframe width="560" height="315" src="<?php the_field('tab_video_url'); ?>"
                                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="show_more_div">
                                    <a href="#" class="text_toggler"><img src="<?php bloginfo('template_url'); ?>/img/btn_more.png"
                                            alt="#">
                                        Show more</a>
                                </div>
                            </div>
                            <div class="img_holder">
                                <!-- <img src="<?php //bloginfo('template_url'); ?>/img/img10.png" alt="#"> -->
                            </div>
                        </div>
                        <?php $cn++; wp_reset_postdata(); endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('blocks/get-started'); ?>

    </main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>