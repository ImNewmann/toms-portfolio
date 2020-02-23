<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <div class="mobile-nav-wrapper">
        <nav class="mobile-nav">
            <img class="mobile-nav__logo" src="<?php echo get_theme_file_uri('/src/images/Logos/small-logo2.png')?>"/>
            <a class="mobile-nav__link" href="<?php echo site_url() ?>"><label class="header__nav-link-label <?php if (get_post_type() == 'post') echo 'header__nav-link-label--active'?>">Work</label></a>
            <a class="mobile-nav__link" href="<?php echo site_url('/contact')?>"><label class="header__nav-link-label <?php if (is_page('contact')) echo 'header__nav-link-label--active'?>">Contact</label></a>
        </nav>
    </div>
    <div class="site">
        <div class="header">
            <div class="header__logo">
                <a href="<?php echo site_url() ?>">
                    <img src="<?php echo get_theme_file_uri('/src/images/Logos/main-logo2.png')?>"/>
                </a>    
            </div>
            <nav class="header__nav header__nav--desktop">
                <a class="header__nav-link" href="<?php echo site_url() ?>"><label class="header__nav-link-label <?php if (get_post_type() == 'post') echo 'header__nav-link-label--active'?>">Work</label></a>
                <a class="header__nav-link" href="<?php echo site_url('/contact')?>"><label class="header__nav-link-label <?php if (is_page('contact')) echo 'header__nav-link-label--active'?>">Contact</label></a>
            </nav> 
            <div class="header__nav header__nav--mobile">
                <div class="hamburger">
                    <div class="hamburger__line hamburger__line--line1"></div>
                    <div class="hamburger__line hamburger__line--line2"></div>
                    <div class="hamburger__line hamburger__line--line3"></div>
                </div>
            </div>
        </div>