<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Auaha
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <?php wp_head(); ?>
</head>

<body class="opacity-active" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header" class="container-fluid cor01">
        <article class="container nav_logo">
            <figure class="nav_logo__customlogo">
                <?php


                    /**
					 * Custom Logo
                    */

					if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
						printf('<div class="img_custom_logo">%s</div>', get_custom_logo());
					}else{
						printf('<div class="img_custom_logo">%s</div>', 'Nenhuma logo cadastrada no momento. Por favor cadastre uma Logo!');
					}
                ?>
            </figure>
            
            <div class="button-contact-container">
                <a href="https://wa.me/55<?php echo nl2br(get_theme_mod('whats')); ?>" class="button-contact"><?php echo nl2br(get_theme_mod('phone')); ?></a>
            </div>
        </article>
    </header>

<?php wp_reset_query(); ?>
