<div class="how_works get_started">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3>
                    <?php echo get_field('how_to_get_started', 'option'); ?>
                </h3>
            </div>
        </div>
        <div class="row center_blocks">
            <?php $args = array('post_type' => 'get start', 'posts_per_page' => -1, 'order' => 'ASC'); $the_query = new WP_Query($args); ?>
            <?php $cn = 1; if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col-12 col-sm-3">
                <div class="col_holder">
                    <div class="col_header">
                        <span>
                            <?php echo $cn++; ?></span>
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div class="col_text">
                        <strong class="txt_heading">
                            <?php the_title(); ?></strong>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <a href="#" class="btn-primary big filled">Schedule Demo</a>
                    </div>
                </div>
            </div>
            <?php wp_reset_postdata(); endwhile; endif; ?>
        </div>
    </div>
</div>