<?php
/* Template Name: About Spirion */
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
                    <div class="health_text add">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients team_section">
            <div class="container">
                <div class="row text-center">
                    <h3 class="col-12 text-center">
                        <?php echo get_field('team_section_heading', 'option'); ?>
                    </h3>
                </div>
                <div class="row text-center">
                    <?php $args = array('post_type' => 'team', 'posts_per_page' => -1, 'order' => 'ASC'); $the_query = new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-sm-4">
                        <div class="team_holder">
                            <div class="img_holder">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="text">
                                <h4><a href="#" data-toggle="modal" data-target="#myModal">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); endwhile; endif; ?>
                </div>
            </div>
            <div class="container mt">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn-primary big filled ml-0">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php get_template_part('blocks/our-features'); ?>
</main><!-- #main -->
</div><!-- #index-wrapper -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="container">
                    <?php $args = array('post_type' => 'team', 'posts_per_page' => 4, 'order' => 'ASC'); $the_query = new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="row">
                        <div class="col-sm-3 text-center">
                            <img src="<?php bloginfo('template_url'); ?>/img/img12.png" class="bio_photo">
                            <h4>
                                <?php the_title(); ?>
                            </h4>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                        <div class="col-sm-9">
                            <?php if (have_rows('bio_row')) : while (have_rows('bio_row')) : the_row(); ?>
                            <strong>
                                <?php the_sub_field('heading'); ?></strong>
                            <p>
                                <?php the_sub_field('text'); ?>
                            </p>
                            <?php endwhile; 
                                endif; ?>
                        </div>

                    </div>
                    <?php wp_reset_postdata(); endwhile; endif; ?>
                </div>
            </div>
        </div>

    </div>
</div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>