<?php
/* Template Name: Home Page */
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
        <?php $home_bg_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
        <div class="promo_area" style="background:url('<?php echo $home_bg_img[0]; ?>') no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1>
                    <?php the_field('banner_heading'); ?>
                </h1>
                <div class="btn text-uppercase">
                    <a href="#" class="btn-primary filled">CTA TEXT</a>
                    <a href="#" class="btn-primary">CTA TEXT</a>
                </div>
            </div>
        </div>
        <div class="video_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="vid_holder">
                            <img src="<?php the_field('promo_image'); ?>" class="img-responsive">
                            <a href="<?php the_field('video_url'); ?>" class="vid_player" target="_blank">Play</a>
                        </div>
                        <p class="text-center">
                            <?php the_field('promo_tagline'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="platforms">
            <div class="container">
                <div class="row">
                    <?php $args = array('post_type' => 'platform slider', 'posts_per_page' => 3, 'order' => 'ASC'); $the_query = new WP_Query($args); ?>
                    <?php $slider_counter = 1; $left_slide_btn = 1; $right_slide_btn = 1; if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-sm-4 slide_col text-center">
                        <div id="carouselExampleControls<?php echo $slider_counter++ ?>" class="carousel slide"
                            data-ride="carousel">
                            <div class="carousel-inner">
                                <?php $cn = 1; if (have_rows('platform_slide')) : while (have_rows('platform_slide')) : the_row(); ?>
                                <div class="carousel-item <?php if ($cn == 1) { echo 'active'; } ?>">
                                    <div class="img_holder"><img src="<?php the_sub_field('platform_icon'); ?>"></div>
                                    <strong>
                                        <?php the_sub_field('platform_title'); ?></strong>
                                    <p>
                                        <?php the_sub_field('platform_text'); ?>
                                    </p>
                                </div>
                                <?php $cn++; endwhile; endif; ?>
                            </div>
                            <div class="slider_btns text-center">
                                <a class="carousel-control-prev" href="#carouselExampleControls<?php echo $left_slide_btn++ ?>"
                                    role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls<?php echo $right_slide_btn++ ?>"
                                    role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); endwhile; endif; ?>
                </div>
                <div class="row text-center btn_div">
                    <a href="#" class="btn-primary big filled">Tour Our Platform</a>
                </div>
            </div>
        </div>
        <div class="how_works">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>
                            <?php the_field('how_it_works_heading'); ?>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <?php if (have_rows('process')) : while (have_rows('process')) : the_row(); ?>
                    <div class="col-sm-4 text-center work_col">
                        <strong class="title">
                            <div class="d-table">
                                <div class="v-middle">
                                    <?php the_sub_field('process_heading'); ?>
                                </div>
                            </div>
                        </strong>
                        <div class="txt">
                            <img src="<?php the_sub_field('process_image'); ?>" alt="#">
                            <p>
                                <?php the_sub_field('process_text'); ?>
                            </p>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>

        <?php get_template_part('blocks/get-started'); ?>

        <?php get_template_part('blocks/clients-section'); ?>


</div>
<div class="articles">
    <div class="container">
        <div class="row">
            <?php $args = array('post_type' => 'articles', 'posts_per_page' => -1, 'order' => 'ASC'); $the_query = new WP_Query($args); ?>
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col-12 col-sm-3 col-6 article_box">
                <?php the_post_thumbnail('full', array('class' => 'max_width')); ?>
                <div class="txt">
                    <span class="date">
                        <?php echo get_the_date(); ?></span>
                    <strong>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></strong>
                    </a>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                </div>
            </div>
            <?php wp_reset_postdata(); endwhile; endif; ?>
        </div>
    </div>
</div>
</div>
</main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>