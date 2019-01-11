<?php
/* Template Name: Solution 2.2 */
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
                        <h2>GDPR Data Inventory and Monitoring</h2>
                        <strong>How Spirion can help you meet GDPR requirements</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="container healthcare_text_holder">
            <div class="row">
                <div class="col-12">
                    <div class="health_text">
                        <p>Spirion automates data discovery for GDPR data inventory with unparalleled accuracy, and
                            helps map all your relevant GDPR data, as defined by you. Once you know where all your
                            sensitive data resides, your organization can start to identify and prioritize gaps in GDPR
                            compliance. Spirion's automated persistent classification tags and protects each file
                            according to its specific dat classification. Monitor and autdit user activity, detect and
                            manage risky behavior of newly created and existing assets with the Spyglass dashboard.
                            Automate notification and remediation actions to respond to DSAR (Data Subject Access
                            rights) requests and comply with Article 17, the right of erasure ("right to be
                            forgotten"). Know your maximum exposure vs. whats' protected at any time - on premise and
                            with third-party processors - before, during, and after the GDPR deadline.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container healthcare_text_holder featured_solution">
            <div class="row">
                <div class="col-sm-6">
                    <strong class="title">[Featured Type]</strong>
                    <span>[Resource Title Goes Here and Can Be <br>Multiple Lines]</span>
                    <p>[Dedicated intro description] Lorem ipsum dolor sit amet, consectetur adipscing elit. Fusce
                        sed libero sem. Nulla vestibulum nisi ante, sit amet viverra ipsum tincideunt in. Ut in
                        metus ut quam interdum pretium. Tiam auctor nulla in malesuada imperdiet.</p>
                </div>
                <div class="col-sm-6 pull-right">
                    <img src="<?php bloginfo('template_url'); ?>/img/img13.png" class="img-responsive">
                </div>
            </div>
        </div>
        <div class="container solution_list">
            <div class="row">
                <div class="col-sm-6 solution_item">
                    <ul class="solution_items list-unstyled">
                        <li>
                            <strong class="title">Title Header Step</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur <br>adipscing elit. Praesent nec aliquam nunc.</p>
                        </li>
                        <li>
                            <strong class="title">Title Header Step</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur <br>adipscing elit. Praesent nec aliquam nunc.</p>
                        </li>
                        <li>
                            <strong class="title">Title Header Step</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur <br>adipscing elit. Praesent nec aliquam nunc.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-5 solution_item pull-right">
                    <ul class="solution_items list-unstyled">
                        <li>
                            <strong class="title">Title Header Step</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur <br>adipscing elit. Praesent nec aliquam nunc.</p>
                        </li>
                        <li>
                            <strong class="title">Title Header Step</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur <br>adipscing elit. Praesent nec aliquam nunc.</p>
                        </li>
                        <li>
                            <strong class="title">Title Header Step</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur <br>adipscing elit. Praesent nec aliquam nunc.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clients" style="background:url('<?php bloginfo('template_url'); ?>/img/bg-clients.png') no-repeat; background-size: cover;">
            <div class="container">
                <div class="row text-center">
                    <h3 class="col-12 text-center">Our Clients</h3>
                </div>
                <div class="row text-center">
                    <div id="carouselExampleControls4" class="carousel clients_slider slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image active"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image active"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image active"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleControls4" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleControls4" data-slide-to="1"></li>
                            <li data-target="#carouselExampleControls4" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="container">
    <div class="row threecols">
        <div class="col-sm-4 text-center col col-12">
            <div class="col_holder">
                <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/icon4.png" alt="#"></div>
                <p>Find the sensitive data hiding on your systems.</p>
                <a href="#" class="btn-primary filled">Try Now</a>
            </div>
        </div>
        <div class="col-sm-4 text-center col col-12">
            <div class="col_holder">
                <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/icon5.png" alt="#"></div>
                <p>View an expert-guided tour of our platform.</p>
                <a href="#" class="btn-primary filled">Try Now</a>
            </div>
        </div>
        <div class="col-sm-4 text-center col col-12">
            <div class="col_holder">
                <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/icon6.png" alt="#"></div>
                <p>Contact us and learn about costs and capabilities.</p>
                <a href="#" class="btn-primary filled">Try Now</a>
            </div>
        </div>
    </div>
</div>
</main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>