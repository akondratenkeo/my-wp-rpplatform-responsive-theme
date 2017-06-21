<?php
/**
 * The template for displaying the header
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" rel="shortcut icon" type="image/x-icon"; />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header class="site-header navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <div class="site-logo"><a href="http://rpplatform.com/" rel="home"><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/logo-dark.png" alt="Logo" /></a></div>
                    </div>
                    <div id="lang-wrapper" class="col-sm-5 col-sm-offset-3 col-md-3 col-md-offset-0 col-md-push-6">
                        <div class="header-lang">
                            <p><a id="aboutus-requestdemo-menubtn" class="demo-request" href="#" data-toggle="modal" data-target="#modal-request-demo">Request a Demo</a></p>
                            <ul>
                                <li class="hide-menu-item"><a>EN</a></li>
                                <li class="hide-menu-item"><a>DE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="site-header-menu-wrapper" class="col-sm-12 col-md-6 col-md-pull-3">
                        <nav id="site-header-menu" class="site-header-menu">
                            <div class="menu-main-menu-container">
                                <ul id="menu-main-menu" class="main-menu">
                                    <li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-26 menu-item-28"><a href="http://rpplatform.com/features/">Features</a></li>
                                    <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="http://rpplatform.com/pricing/">Pricing</a></li>
                                    <li id="menu-item-15" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15"><a href="http://rpplatform.com/category/blog/">Blog</a></li>
                                    <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="http://rpplatform.com/about-us/">About us</a></li>
                                    <li id="menu-item-17" class="hide-menu-item menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17"><a href="http://rpplatform.com/category/faq/">FAQ</a></li>
                                    <li id="menu-item-18" class="hide-menu-item menu-item menu-item-type-custom menu-item-object-custom menu-item-18"><a href="#">Sign up</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div id="content" class="site-content">