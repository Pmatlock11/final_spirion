<?php
/* Template Name: Solution 2.0 */
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
        <div class="banner discovery add solution">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Solution</h2>
                        <ul class="tabs sol_pages text-center list-unstyled">
                            <li class="active"><a href="#tab1">Compliance</a></li>
                            <li><a href="#tab2">Industry</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="solution_content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text tab active" id="tab1">
                            <h2>Rationalizing Privacy and Security Compliance Obligations with Spirion</h2>
                            <p>Data privacy and security obligations stem from multiple regulatory dimensions: those
                                imposed by government regulatory agencies, those agreed to via contract, and those than
                                an
                                organization aspires to meet. For example, regulatory agencies around the world re
                                continually refining and enhancing existing data privacy and security compliance
                                requirements, implementing new legal frameworks, and promulgating new gulations to
                                address
                                emerging internal and external threats to sensitive data. When sharing sensitive or
                                confidential data, business partners often agree via contract to standards athat exceed
                                what those regulators would require.</p>
                            <div class="btn_more_div text-center"><a href=" #" class="link_more">See More <i class="fa fa-angle-double-down"
                                        aria-hidden="true"></i></a></div>
                        </div>
                        <div class="text tab" id="tab2">
                            <h2>Rationalizing Privacy and Security Compliance Obligations with Spirion</h2>
                            <p>Data privacy and security obligations stem from multiple regulatory dimensions: those
                                imposed by government regulatory agencies, those agreed to via contract, and those than
                                an
                                organization aspires to meet. For example, regulatory agencies around the world re
                                continually refining and enhancing existing data privacy and security compliance
                                requirements, implementing new legal frameworks, and promulgating new gulations to
                                address
                                emerging internal and external threats to sensitive data. When sharing sensitive or
                                confidential data, business partners often agree via contract to standards athat exceed
                                what those regulators would require.</p>
                            <div class="btn_more_div text-center"><a href=" #" class="link_more">See More <i class="fa fa-angle-double-down"
                                        aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="solution_posts">
            <article class="solution_post">
                <div class="container">
                    <div class="row post_header text-center">
                        <div class="col-12">
                            <strong class="head_title">Broadly Applicable Privacy and Security Statutes and Regulations</strong>
                            <h2>Unitied States Federal</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 expand_div text-center">
                            <a href="#" class="state_expender btn-primary">Expand <i class="fa fa-angle-double-down"
                                    aria-hidden="true"></i></a> </div>
                    </div>
                </div>
            </article>
            <article class="solution_post">
                <div class="container">
                    <div class="row post_header text-center">
                        <div class="col-12">
                            <strong class="head_title">Broadly Applicable Privacy and Security Statutes
                                and
                                Regulations</strong>
                            <h2>Selected U.S States</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was
                                        designed
                                        to
                                        harmonize data privacy laws across Europe, to protect and
                                        empower
                                        all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 expand_div text-center">
                            <a href="#" class="state_expender btn-primary">Expand <i class="fa fa-angle-double-down"
                                    aria-hidden="true"></i></a> </div>
                    </div>
                </div>
            </article>
            <article class="solution_post">
                <div class="container">
                    <div class="row post_header text-center">
                        <div class="col-12">
                            <strong class="head_title">Selected Privacy and Security Contractual Requirements</strong>
                            <h2>Global Public and Private Sector</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 expand_div text-center">
                            <a href="#" class="state_expender btn-primary">Expand <i class="fa fa-angle-double-down"
                                    aria-hidden="true"></i></a> </div>
                    </div>
                </div>
            </article>
            <article class="solution_post">
                <div class="container">
                    <div class="row post_header text-center">
                        <div class="col-12">
                            <strong class="head_title">Sector-Spefic Privacy and Security Statutes and Regulations</strong>
                            <h2>United States</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 post_col">
                            <div class="holder">
                                <div class="abbr_code">[Abbr Code]</div>
                                <div class="txt">
                                    <strong class="title">EU GDPR</strong>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                                <div class="post_hover">
                                    <p>The <b>EU General Data Protection Regulation (GDPR)</b> was designed to
                                        harmonize data privacy laws across Europe, to protect and empower all EU
                                        citizen data privacy.</p>
                                    <a href="#" class="learn_more">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 expand_div text-center">
                            <a href="#" class="state_expender btn-primary">Expand <i class="fa fa-angle-double-down"
                                    aria-hidden="true"></i></a> </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="articles">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-3 col-6 article_box">
                        <img src="<?php bloginfo('template_url'); ?>/img/img9.png" class="max_width">
                        <div class="txt">
                            <span class="date">Date</span>
                            <strong>Article Title</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipscing elit. In ut velit lectus.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-6 article_box">
                        <img src="<?php bloginfo('template_url'); ?>/img/img9.png" class="max_width">
                        <div class="txt">
                            <span class="date">Date</span>
                            <strong>Article Title</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipscing elit. In ut velit lectus.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-6 article_box">
                        <img src="<?php bloginfo('template_url'); ?>/img/img9.png" class="max_width">
                        <div class="txt">
                            <span class="date">Date</span>
                            <strong>Article Title</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipscing elit. In ut velit lectus.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-6 article_box">
                        <img src="<?php bloginfo('template_url'); ?>/img/img9.png" class="max_width">
                        <div class="txt">
                            <span class="date">Date</span>
                            <strong>Article Title</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipscing elit. In ut velit lectus.</p>
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