<?php
/* Template Name: Health Care */
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
                            <?php the_title(); ?>
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
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('blocks/clients-section'); ?>
</div>
<div class="resources">

    <div class="container-fluid">
        <div class="row text-center">
            <h3 class="col-12 text-center"><?php echo get_field('resources_downloads', 'option'); ?></h3>
        </div>
        <div class="row resource_cols">
            <div id="resource_slider" class="carousel clients_slider slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $args = array('post_type' => 'download resource', 'posts_per_page' => -1, 'order' => 'ASC');
                    $the_query = new WP_Query($args); ?>
                    <?php $slide_counter = 1;
                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="carousel-item <?php if ($slide_counter == 1) { echo " active"; } ?>">
                        <?php if (have_rows('slide_item')) : while (have_rows('slide_item')) : the_row(); ?>
                        <div class="col-sm-3">
                            <div class="resource_col">
                                <img src="<?php the_sub_field('item_image'); ?>" class="img-responsive">
                                <div class="txt text-center">
                                    <strong>
                                        <?php the_sub_field('item_heading'); ?></strong>
                                    <p>
                                        <?php the_sub_field('download_button_text'); ?>
                                    </p>
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </div>
                                <div class="resource_hover">
                                    <div class="d-table">
                                        <div class="v-middle">
                                            <h5>
                                                <a href="#">
                                                    <?php the_sub_field('cta_text_1'); ?>
                                                </a>
                                            </h5>
                                            <a href="#">
                                                <?php the_sub_field('cta_text_2'); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                    <?php $slide_counter++; wp_reset_postdata(); endwhile; endif; ?>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#resource_slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#resource_slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('blocks/our-features'); ?>
</main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>