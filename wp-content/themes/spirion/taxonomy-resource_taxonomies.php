<?php
$taxonomy = get_queried_object();
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>
<div class="wrapper" id="index-wrapper">
    <main class="site-main" id="main">
        <div class="banner resources no_bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                    <?php post_type_archive_title('<h2>', '</h2>'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="resources_content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <aside id="sidebar">
                            <ul class="category-lists list-unstyled ">
						<?php $count_posts = wp_count_posts('resource')->publish;
        $term_list = $terms = get_terms(array(
            'taxonomy' => 'resource_taxonomies',
                'orderby' => 'id',
            'order' => 'ASC',
        ));
							//print_r($term_list); 
        ?>
                                <li><a href="<?php echo get_post_type_archive_link('resource'); ?>" class="active">All (<?php echo $count_posts; ?>)</a></li>
                                <?php foreach ($term_list as $term) : ?>
									<li <?php if ($taxonomy->name == $term->name) {
                echo 'class="active"';
            } ?>><a href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?> (<?php echo $term->count; ?>)</a></li>
								<?php endforeach; ?>	
                               
                            </ul>
                        </aside>
                    </div>
                    <div class="col-sm-9">
                        <div class="articles resources">
                            <div class="container">
                                <div class="row">
                                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <div class="col-sm-4 col-6">
                                        <div class="column">
                                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                            <div class="txt">
                                                <h5 class="resource_title">
                                                <?php echo get_the_term_list(get_the_ID(), 'resource_taxonomies', '', ', '); ?>
                                                </h5>
                                                <div class="txt_holder">
                                                    <strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
                                                    <p>
                                                        <?php the_excerpt(); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #index-wrapper -->
<?php get_footer(); ?>
