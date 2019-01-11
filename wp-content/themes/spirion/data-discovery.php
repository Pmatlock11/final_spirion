<?php
/* Template Name: Data Discovery */
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
        <div class="banner discovery">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Data Discovery & Classification</h2>
                        <strong>Rapid, reliable discovery and classification results with industry leading<br> accuracy
                            and prevision</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="discovery_content">
            <div class="container">
                <div class="row content_row">
                    <div class="col-sm-7">
                        <p>The efficacy of every task throughout the sensitive data lifecycle-classification,
                            monitoring and protecting-hinges on rapid accuracy, the core component of Spirion's
                            methodology.</p>
                        <p>Fast accurate data discovery is the critical first step in any effective information
                            security program: You cannot protect data if you don't know it exists. Spirion performs
                            fast and accurate searches of both structured, semi-structured data and unstructured data
                            in locations where many other solutions cannot, Including data mning within images, on
                            hosted and on-premise email servers, in databases, and in SharePoint and the cloud.</p>
                        <p>By reducing your sensitive data exposure, you can more accurately focus your data security
                            spend and protect sensitive data</p>
                    </div>
                    <div class="col-sm-5 pull-right text-center">
                        <div class="vid_holder"><iframe width="560" height="315" src="https://www.youtube.com/embed/iQaeV6PzGOs"
                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe></div>
                        <h1>You cannot protect <span>data if you don't know</span> it exists.</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabs_section with_bg discovery auto_switch">
            <div class="container-fluid">
                <div class="row tabbing_row">
                    <div class="col-sm-3 tabset_col">
                        <ul class="tabs auto_tabs list-unstyled">
                            <li><a href="#tab1">Unparalleled <br> Speed</a></li>
                            <li><a href="#tab2">Machine <br> Learning</a></li>
                            <li><a href="#tab3">Powerful <br> Classification</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="tab" id="tab1">
                            <div class="tab_text fluid white-text">
                                <h3 class="white-text">Machine learning and analytics to rapidly search structured <br>and
                                    unstructured data</h3>
                                <div class="twocols">
                                    <div class="text_col">
                                        <p>AnyFind's proprietary algorithms rapidly and accurately identify data in
                                            structured and unstructured sources.</p>
                                        <p>Sensitive Data Engine<sup>TM</sup> can be easily configured to locate data
                                            unique to your organization (e.g., intellectual property, or any other data
                                            type, file and document).</p>
                                        <p class="toggled_text">Sensitive Data Engine<sup>TM</sup> can be easily
                                            configured to locate data
                                            unique to your organization (e.g., intellectual property, or any other data
                                            type, file and document).</p>
                                    </div>
                                    <div class="text_col">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/iQaeV6PzGOs"
                                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="show_more_div">
                                    <a href="#" class="text_toggler"><img src="<?php bloginfo('template_url'); ?>/img/btn_more.png"
                                            alt="#">
                                        Show more</a>
                                </div>
                            </div>
                            <div class="img_holder">
                                <!-- <img src="<?php //bloginfo('template_url'); ?>/img/img10.png" alt="#"> -->
                            </div>
                        </div>
                        <div class="tab active" id="tab2">
                            <div class="tab_text fluid white-text">
                                <h3 class="white-text">Machine learning and analytics to rapidly search structured <br>and
                                    unstructured data</h3>
                                <div class="twocols">
                                    <div class="text_col">
                                        <p>AnyFind's proprietary algorithms rapidly and accurately identify data in
                                            structured and unstructured sources.</p>
                                        <p>Sensitive Data Engine<sup>TM</sup> can be easily configured to locate data
                                            unique to your organization (e.g., intellectual property, or any other data
                                            type, file and document).</p>
                                        <p class="toggled_text">Sensitive Data Engine<sup>TM</sup> can be easily
                                            configured to locate data
                                            unique to your organization (e.g., intellectual property, or any other data
                                            type, file and document).</p>
                                    </div>
                                    <div class="text_col">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/iQaeV6PzGOs"
                                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="show_more_div">
                                    <a href="#" class="text_toggler"><img src="<?php bloginfo('template_url'); ?>/img/btn_more.png"
                                            alt="#">
                                        Show more</a>
                                </div>
                            </div>
                            <div class="img_holder">
                                <!-- <img src="<?php //bloginfo('template_url'); ?>/img/img10.png" alt="#"> -->
                            </div>
                        </div>
                        <div class="tab" id="tab3">
                            <div class="tab_text fluid white-text">
                                <h3 class="white-text">Machine learning and analytics to rapidly search structured <br>and
                                    unstructured data</h3>
                                <div class="twocols">
                                    <div class="text_col">
                                        <p>AnyFind's proprietary algorithms rapidly and accurately identify data in
                                            structured and unstructured sources.</p>
                                        <p>Sensitive Data Engine<sup>TM</sup> can be easily configured to locate data
                                            unique to your organization (e.g., intellectual property, or any other data
                                            type, file and document).</p>
                                        <p class="toggled_text">Sensitive Data Engine<sup>TM</sup> can be easily
                                            configured to locate data
                                            unique to your organization (e.g., intellectual property, or any other data
                                            type, file and document).</p>
                                    </div>
                                    <div class="text_col">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/iQaeV6PzGOs"
                                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="show_more_div">
                                    <a href="#" class="text_toggler"><img src="<?php bloginfo('template_url'); ?>/img/btn_more.png"
                                            alt="#">
                                        Show more</a>
                                </div>
                            </div>
                            <div class="img_holder">
                                <!-- <img src="<?php //bloginfo('template_url'); ?>/img/img10.png" alt="#"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="how_works get_started">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>How to get started</h3>
                    </div>
                </div>
                <div class="row center_blocks">
                    <div class="col-12 col-sm-3">
                        <div class="col_holder">
                            <div class="col_header">
                                <span>1</span>
                                <img src="<?php bloginfo('template_url'); ?>/img/img4.png">
                            </div>
                            <div class="col_text">
                                <strong class="txt_heading">Schedule a demo</strong>
                                <p>Let us show you how Spirion can help your organization</p>
                                <a href="#" class="btn-primary big filled">Schedule Demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3">
                        <div class="col_holder">
                            <div class="col_header">
                                <span>2</span>
                                <img src="<?php bloginfo('template_url'); ?>/img/img5.png">
                            </div>
                            <div class="col_text">
                                <strong class="txt_heading">Install & see data in 30 minutes</strong>
                                <p>Sign up for a Spirion Cloud or On-premise trial for free.</p>
                                <a href="#" class="btn-primary big filled">Sign up for Spirion Cloud</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3">
                        <div class="col_holder">
                            <div class="col_header">
                                <span>3</span>
                                <img src="<?php bloginfo('template_url'); ?>/img/img6.png">
                            </div>
                            <div class="col_text">
                                <strong class="txt_heading">Finish: Protect & monitor data</strong>
                                <p>Start using the dashboard to secure your network and cloud environments and monitor
                                    your risk.</p>
                                <a href="#" class="btn-primary big filled">Lorem Ipsum</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>