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
                        <h2>Healthcare</h2>
                        <strong>The Remedy for Controlling Patient Data</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="container healthcare_text_holder">
            <div class="row">
                <div class="col-12">
                    <div class="health_text">
                        <p>Hospitals, clinics and doctor’s offices have a regulatory requirement to protect patient
                            data in their systems and are subject to costly fines for noncompliance. If breached, PHI
                            data sells for more on the underground market than PII, making it an attractive target.</p>
                        <p>Spirion helps your organization locate Social Security numbers, insurance numbers and
                            medical record numbers with the utmost accuracy. That way, your organization knows exactly
                            what and where the regulated data is and can take immediate protective measures to manage
                            it. Spirion keeps your organization in compliance with HIPAA and HITECH by helping to find
                            and keep confidential: PCI, PII and PHI information.</p>
                        <p>Spirion Data Platform is the one solution your organization needs for managing structured
                            and unstructured data and continuously classifying and protecting new data as it is created
                            and transmitted.</p>
                    </div>
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
<div class="container mt">
    <div class="row">
        <div class="col-12 text-center">
            <a href="#" class="btn-primary big filled ml-0">Request A Demo</a>
        </div>
    </div>
</div>
<div class="resources">

    <div class="container-fluid">
        <div class="row text-center">
            <h3 class="col-12 text-center">Resources Downloads</h3>
        </div>
        <div class="row resource_cols">
            <div id="resource_slider" class="carousel clients_slider slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-sm-3">
                            <div class="resource_col">
                                <img src="<?php bloginfo('template_url'); ?>/img/img15.png" class="img-responsive">
                                <div class="txt text-center">
                                    <strong>CCPA Automation</strong>
                                    <p>Download the Datasheet</p>
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </div>
                                <div class="resource_hover">
                                    <div class="d-table">
                                        <div class="v-middle">
                                            <h5>[CTA to sign up for future webinar]</h5>
                                            <a href="#">[Link to sign up] >>></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="resource_col">
                                <img src="<?php bloginfo('template_url'); ?>/img/img15.png" class="img-responsive">
                                <div class="txt text-center">
                                    <strong>CCPA Automation</strong>
                                    <p>Download the Datasheet</p>
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </div>
                                <div class="resource_hover">
                                    <div class="d-table">
                                        <div class="v-middle">
                                            <h5>[CTA to sign up for future webinar]</h5>
                                            <a href="#">[Link to sign up] >>></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="resource_col">
                                <img src="<?php bloginfo('template_url'); ?>/img/img15.png" class="img-responsive">
                                <div class="txt text-center">
                                    <strong>CCPA Automation</strong>
                                    <p>Download the Datasheet</p>
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </div>
                                <div class="resource_hover">
                                    <div class="d-table">
                                        <div class="v-middle">
                                            <h5>[CTA to sign up for future webinar]</h5>
                                            <a href="#">[Link to sign up] >>></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="resource_col">
                                <img src="<?php bloginfo('template_url'); ?>/img/img15.png" class="img-responsive">
                                <div class="txt text-center">
                                    <strong>CCPA Automation</strong>
                                    <p>Download the Datasheet</p>
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </div>
                                <div class="resource_hover">
                                    <div class="d-table">
                                        <div class="v-middle">
                                            <h5>[CTA to sign up for future webinar]</h5>
                                            <a href="#">[Link to sign up] >>></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-sm-3">
                            <div class="resource_col">
                                <img src="<?php bloginfo('template_url'); ?>/img/img15.png" class="img-responsive">
                                <div class="txt text-center">
                                    <strong>CCPA Automation</strong>
                                    <p>Download the Datasheet</p>
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </div>
                                <div class="resource_hover">
                                    <div class="d-table">
                                        <div class="v-middle">
                                            <h5>[CTA to sign up for future webinar]</h5>
                                            <a href="#">[Link to sign up] >>></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="resource_col">
                                <img src="<?php bloginfo('template_url'); ?>/img/img15.png" class="img-responsive">
                                <div class="txt text-center">
                                    <strong>CCPA Automation</strong>
                                    <p>Download the Datasheet</p>
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </div>
                                <div class="resource_hover">
                                    <div class="d-table">
                                        <div class="v-middle">
                                            <h5>[CTA to sign up for future webinar]</h5>
                                            <a href="#">[Link to sign up] >>></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="resource_col">
                                <img src="<?php bloginfo('template_url'); ?>/img/img15.png" class="img-responsive">
                                <div class="txt text-center">
                                    <strong>CCPA Automation</strong>
                                    <p>Download the Datasheet</p>
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </div>
                                <div class="resource_hover">
                                    <div class="d-table">
                                        <div class="v-middle">
                                            <h5>[CTA to sign up for future webinar]</h5>
                                            <a href="#">[Link to sign up] >>></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="resource_col">
                                <img src="<?php bloginfo('template_url'); ?>/img/img15.png" class="img-responsive">
                                <div class="txt text-center">
                                    <strong>CCPA Automation</strong>
                                    <p>Download the Datasheet</p>
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </div>
                                <div class="resource_hover">
                                    <div class="d-table">
                                        <div class="v-middle">
                                            <h5>[CTA to sign up for future webinar]</h5>
                                            <a href="#">[Link to sign up] >>></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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