<div class="container">
    <div class="row threecols">
        <?php $args = array('post_type' => 'feature', 'posts_per_page' => 4, 'order' => 'ASC');
        $the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="col-sm-4 text-center col col-12">
            <div class="col_holder">
                <div class="img_holder">
                    <?php the_post_thumbnail('full'); ?>
                </div>
                <p>
                    <?php the_content(); ?>
                </p>
                <a href="#" class="btn-primary filled">Try Now</a>
            </div>
        </div>
        <?php wp_reset_postdata();
        endwhile;
        endif; ?>
    </div>
</div>