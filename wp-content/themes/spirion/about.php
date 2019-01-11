<?php
/* Template Name: About Spirion */
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
                        <h2>About Spirion</h2>
                        <strong>A Data Management Software Provider</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="container healthcare_text_holder">
            <div class="row">
                <div class="col-12">
                    <div class="health_text add">
                        <p>Spirion, headquartered in St. Petersburg, FL, is the leading provider of enterprise data
                            management software to help businesses reduce their sensitive data footprint and
                            proactively minimize the risks, costs and reputational damage of successful cyberattacks.
                            Spirion helps organizations avoid costly data breaches by discovering, classifying,
                            monitoring and protecting personal information, medical records, credit card numbers, and
                            intellectual property stored across the enterprise, within e-mail, and in the cloud.
                            Spirion specializes in the high-precison search and automated classification of unstructred
                            data using its AnyFind<sup>TM</sup> engine's unparraleled accuracy when analyzing
                            human-genrated text and images, Spirion has thousands of customers among leading firms in
                            the healthcare, public sector, retial, education, financial services, energy, industrial,
                            and entertainment markets.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients team_section">
            <div class="container">
                <div class="row text-center">
                    <h3 class="col-12 text-center">Our Management Team</h3>
                </div>
                <div class="row text-center">
                    <div class="col-sm-4">
                        <div class="team_holder">
                            <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/img12.png" alt="#"></div>
                            <div class="text">
                                <h4><a href="#" data-toggle="modal" data-target="#myModal">AG Crum</a></h4>
                                <p>Chieg Executive Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team_holder">
                            <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/img12.png" alt="#"></div>
                            <div class="text">
                                <h4><a href="#" data-toggle="modal" data-target="#myModal">AG Crum</a></h4>
                                <p>Chieg Executive Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team_holder">
                            <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/img12.png" alt="#"></div>
                            <div class="text">
                                <h4><a href="#" data-toggle="modal" data-target="#myModal">AG Crum</a></h4>
                                <p>Chieg Executive Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn-primary big filled ml-0">Meet Our Team</a>
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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 text-center">
                            <img src="<?php bloginfo('template_url'); ?>/img/img12.png" class="bio_photo">
                            <h4>AG Crum</h4>
                            <p>Chief Executive Officer</p>
                        </div>
                        <div class="col-sm-9">
                            <strong>[Attribute Title]</strong>
                            <p>[Attribute Answer] Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's. </p>
                            <strong>[Attribute Title]</strong>
                            <p>[Attribute Answer] Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's. </p>
                            <strong>[Attribute Title]</strong>
                            <p>[Attribute Answer] Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's. </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>