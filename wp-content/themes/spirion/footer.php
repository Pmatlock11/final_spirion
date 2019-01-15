<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<footer class="wrapper" id="wrapper-footer">
    <div class="<?php echo esc_attr($container); ?>">
        <div class="row">
            <div class="col-12 col-sm-3 col-6 xs_none">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer_logo"><img src="<?php echo get_field('footer_logo', 'option'); ?>"
                        class="max_width"></a>
                <p>
                    <?php echo get_field('company_moto', 'option'); ?>
                </p>
            </div>
            <div class="col-12 col-sm-2 col-6">
                <div class="col_holder">
                    <strong>List Title</strong>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu1',
                        'menu_id' => 'menu',
                        'order' => 'ASC',
                        'menu_class' => 'list-unstyled'
                    ));
                    ?>
                </div>
                <div class="col_holder">
                    <strong>List Title</strong>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu2',
                        'menu_id' => 'menu',
                        'order' => 'ASC',
                        'menu_class' => 'list-unstyled'
                    ));
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-2 col-6">
                <div class="col_holder">
                    <strong>List Title</strong>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu3',
                        'menu_id' => 'menu',
                        'order' => 'ASC',
                        'menu_class' => 'list-unstyled'
                    ));
                    ?>
                </div>
                <div class="col_holder">
                    <strong>List Title</strong>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu4',
                        'menu_id' => 'menu',
                        'order' => 'ASC',
                        'menu_class' => 'list-unstyled'
                    ));
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-2 col-6">
                <div class="col_holder">
                    <strong>List Title</strong>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu5',
                        'menu_id' => 'menu',
                        'order' => 'ASC',
                        'menu_class' => 'list-unstyled'
                    ));
                    ?>
                </div>
                <div class="col_holder">
                    <strong>List Title</strong>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu6',
                        'menu_id' => 'menu',
                        'order' => 'ASC',
                        'menu_class' => 'list-unstyled'
                    ));
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-2 col-6">
                <div class="col_holder">
                    <ul class="list-unstyled socials border_bottom">
                        <li><a href="<?php echo get_field('twitter_url', 'option'); ?>">
                                <?php echo get_field('twitter_icon', 'option'); ?></a></li>
                        <li><a href="<?php echo get_field('youtube_url', 'option'); ?>">
                                <?php echo get_field('youtube_icon', 'option'); ?></a></li>
                        <li><a href="<?php echo get_field('linked_url', 'option'); ?>">
                                <?php echo get_field('linked_icon', 'option'); ?></a></li>
                        <li><a href="<?php echo get_field('rss_url', 'option'); ?>">
                                <?php echo get_field('rss_icon', 'option'); ?></a></li>
                    </ul>
                </div>
                <div class="col_holder">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu7',
                        'menu_id' => 'menu',
                        'order' => 'ASC',
                        'menu_class' => 'list-unstyled border_bottom'
                    ));
                    ?>
                </div>
                <div class="col_holder">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu8',
                        'menu_id' => 'menu',
                        'order' => 'ASC',
                        'menu_class' => 'list-unstyled'
                    ));
                    ?>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row">
            <div class="col-12 col-sm-3 col-6 lg_none">
                <a href="#" class="footer_logo"><img src="<?php bloginfo('template_url'); ?>/img/footer_logo.png" class="max_width"></a>
                <p>
                    <?php echo get_field('company_moto', 'option'); ?>
                </p>
            </div>
            <div class="col-12 text-center rights">
                <p>
                    <?php echo get_field('copyrights', 'option'); ?> | <a href="#">Legal</a> | <a href="#">Privacy</a></p>
            </div>
        </div>
    </div><!-- container end -->
</footer><!-- wrapper end -->
<div class="right_sticky">
    <a href="#" class="contact_opener"><img src="<?php bloginfo('template_url'); ?>/img/btn_1.png" alt="#"></a>
    <div class="stickey_contact_form">
        <a href="#" class="sticky_closer contact_closer"><i class="fa fa-times" aria-hidden="true"></i></a>
        <?php echo do_shortcode('[contact-form-7 id="338" title="Contact form 1"]'); ?>
    </div>
    <a href="#" class=""><img src="<?php bloginfo('template_url'); ?>/img/btn_2.png" alt="#"></a>
    <a href="tel:042 000 000"><img src="<?php bloginfo('template_url'); ?>/img/btn_3.png" alt="#"></a>
</div>
</div><!-- #page we need this extra closing tag here -->
<script>
    jQuery('.contact_opener').click(function(e) {
        e.preventDefault();
        jQuery('.stickey_contact_form').addClass('active')
    });
    jQuery('.contact_closer').click(function(e) {
        e.preventDefault();
        jQuery('.stickey_contact_form').removeClass('active')
    });

    jQuery('.nav_opener').click(function(e) {
        e.preventDefault();
        jQuery('#nav').slideToggle();

    });
    jQuery('.text_toggler').click(function(e) {
        e.preventDefault();
        jQuery('.toggled_text').slideToggle();
    });

    jQuery('.tabs a').click(function(e) {
        e.preventDefault();

        jQuery('.tabs li').removeClass('active');
        jQuery(this).closest('li').addClass('active');
        jQuery('.tab').removeClass('active');
        var curr_tab = jQuery(this).attr('href');
        jQuery(curr_tab).addClass('active');
    });

    jQuery(document).ready(function() {
        jQuery('.tabs li a').each(function() {
            var str = jQuery(this).attr('href');
            var newStr = str.replace(/\s+/g, '');
            jQuery(this).attr('href', newStr);
        });
        jQuery('.tab').each(function() {
            var tab_id = jQuery(this).attr('id');
            var tab_id_holder = tab_id.replace(/\s+/g, '');
            jQuery(this).attr('id', tab_id_holder);
        });

        jQuery(".auto_tabs li:first-child").addClass("active");
        setTimeout(autoAddClass, 3000);

        jQuery('.state_expender').click(function(e) {
            e.preventDefault();
            jQuery(this).closest('.row').find('.post_col').slideToggle();
        });

        jQuery('.understrap-read-more-link').closest('p').hide();
    });

    function autoAddClass() {
        var next = jQuery(".auto_tabs li.active").removeClass("active").next();
        if (next.length)
            jQuery(next).addClass('active');
        else
            jQuery('.auto_tabs li:first-child').addClass('active');
        setTimeout(autoAddClass, 3000);
        jQuery('.auto_switch .tab').removeClass('active');
        var curr_tab = jQuery('.auto_tabs li.active').find('a').attr('href');
        jQuery(curr_tab).addClass('active');
    }

    var win_width = jQuery(window).width();
    if (jQuery(win_width < 768)) {
        jQuery('#wrapper-footer .col_holder').find('strong').click(function() {
            jQuery(this).closest('.col_holder').find('ul').slideToggle();
        });
    }
</script>
<?php wp_footer(); ?>
</body>

</html>