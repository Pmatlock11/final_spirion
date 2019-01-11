<div class="clients" style="background:url('<?php bloginfo('template_url'); ?>/img/bg-clients.png') no-repeat; background-size: cover;">
    <div class="container">
        <div class="row text-center">
            <h3 class="col-12 text-center">
                <?php echo get_field('our_clients', 'option'); ?>
            </h3>
        </div>
        <div class="row text-center">
            <div id="carouselExampleControls4" class="carousel clients_slider slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $args = array('post_type' => 'clients', 'posts_per_page' => -1, 'order' => 'ASC'); $the_query = new WP_Query($args); ?>
                    <?php $cn = 1; if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="carousel-item <?php if ($cn == 1) { echo 'active'; } ?>">
                        <?php $cn = 1; if (have_rows('client')) : while (have_rows('client')) : the_row(); ?>
                        <div class="client_image"><img src="<?php the_sub_field('client_image'); ?>"></div>
                        <?php $cn++; endwhile; endif; ?>
                    </div>
                    <?php wp_reset_postdata(); endwhile; endif; ?>
                </div>
                <ol class="carousel-indicators">
                    <?php $args = array('post_type' => 'clients', 'posts_per_page' => -1, 'order' => 'ASC'); $the_query = new WP_Query($args); ?>
                    <?php $pagination_counter = 0; if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li data-target="#carouselExampleControls4" data-slide-to="<?php echo $pagination_counter++; ?>"
                        class="<?php if ($pagination_counter == 0) { echo 'active'; } ?>"></li>
                    <?php  wp_reset_postdata(); endwhile; endif; ?>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn-primary big filled ml-0">Request A Demo</a>
            </div>
        </div>
    </div>
</div>