<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenbeli
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HQ8S7PTQL4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-HQ8S7PTQL4');
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">
            <?php esc_html_e('Skip to content', 'greenbeli'); ?>
        </a>
        <header id="masthead" class="site-header">
            <div class="main-header">
                <div class="container h-100">
                    <div class="site-header-wrapper">
                        <div class="js-collapse-aside-menu-mobile">
                            <i class="fal fa-bars"></i>
                            <i class="fal fa-times"></i>
                        </div>
                        <div class="site-branding">
                            <?php the_custom_logo();
                            if (is_front_page() && is_home()) : ?>
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                            <?php else : ?>
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                            <?php endif;
                            $greenbeli_description = get_bloginfo('description', 'display');
                            if ($greenbeli_description || is_customize_preview()) :
                            ?>
                            <p class="site-description">
                                <?php echo $greenbeli_description; ?>
                            </p>
                            <?php endif; ?>
                        </div>
                        <nav id="site-navigation" class="main-navigation">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                )
                            );
                            ?>
                            <div class="close-nav-mobile">
                                <i class="fal fa-times"></i>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>