<?php
/* Template Name: Platform Template */
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
        <div class="banner platform">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Rapid sensitive data protection</h2>
                        <strong>The average reduction of Sensitive Data Footprint with Spirion is 98.5%</strong>
                        <span class="small">(Based on before and after audits with organizations of 1,000 or, more
                            users)</span>
                        <iframe src="https://www.youtube.com/embed/iQaeV6PzGOs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="rapid_area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="rapid_header">
                            <h2>Rapid, automated discovery and classification for all the sensitive data <br>across
                                your network and cloud.</h2>
                            <p>Spirion is the leader in automated data discovery and classification solutions that
                                rapidly secure sensitive data with unmatched speed and precision -- amplifying your
                                existing security investments with visibility and control needed to minimize risk,
                                while easily integrating with eisting IT security infrastructures. Thousands of
                                customers use Spirion to reduce their sensitive data footprint across the network and
                                public cloud, while complying with regulations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs_section">
            <div class="container">
                <div class="row tabbing_row">
                    <div class="col-sm-3 tabset_col no_bg">
                        <ul class="tabs list-unstyled">
                            <li><a href="#tab1">Discovery & <br>Classification</a></li>
                            <li class="active"><a href="#tab2">Analytics</a></li>
                            <li><a href="#tab3">Integration</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="tab active" id="tab1">
                            <div class="tab_text">
                                <h3>Analytics</h3>
                                <p>Quickly see the posture, risk exposure and protection status of sensitive data
                                    across the company, and make dta driven decisions with Spirion's Spyglass<sup>TM</sup>.</p>
                                <a href="#" class="read_more">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="img_holder">
                                <img src="<?php bloginfo('template_url'); ?>/img/img10.png" alt="#">
                            </div>
                        </div>
                        <div class="tab" id="tab2">
                            <div class="tab_text">
                                <h3>Analytics</h3>
                                <p>Quickly see the posture, risk exposure and protection status of sensitive data
                                    across the company, and make dta driven decisions with Spirion's Spyglass<sup>TM</sup>.</p>
                                <a href="#" class="read_more">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="img_holder">
                                <img src="<?php bloginfo('template_url'); ?>/img/img10.png" alt="#">
                            </div>
                        </div>
                        <div class="tab" id="tab3">
                            <div class="tab_text">
                                <h3>Analytics</h3>
                                <p>Quickly see the posture, risk exposure and protection status of sensitive data
                                    across the company, and make dta driven decisions with Spirion's Spyglass<sup>TM</sup>.</p>
                                <a href="#" class="read_more">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="img_holder">
                                <img src="<?php bloginfo('template_url'); ?>/img/img10.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tab_btns_row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn-primary filled center">[CTA Text]</a>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>