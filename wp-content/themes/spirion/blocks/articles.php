<div class="articles">
    <div class="container">
        <div class="row">
            <?php $args = array('post_type' => 'articles', 'posts_per_page' => -1, 'order' => 'ASC');
            $the_query = new WP_Query($args); ?>
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
            <?php wp_reset_postdata();
            endwhile;
            endif; ?>
        </div>
    </div>
</div>