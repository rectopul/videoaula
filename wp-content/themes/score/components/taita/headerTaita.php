<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package auaha
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-57PX3S');</script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" type="image/x-icon">
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c49f093f38770fb"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57PX3S"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header id="header" class="header header--taita">
        <div class="header__wrapper">
            <div class="header__logo">
                <h1>
                    <a class="header__logo-link" href="<?php echo get_home_url(); ?>">
                        <?php
                            while ( have_posts() ) : the_post();
                        ?>    
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <span>
                            <?php
                                the_title();
                                the_content();
                            ?>    
                        </span>
                        <?php
                            endwhile;
                        ?>
                    </a>
                </h1>
            </div>
            <div class="header__menu">
                <nav class="header__nav">
                    <a href="#" title="diferenciais" class="header__link">diferenciais</a>
                    <a href="#" title="preços" class="header__link">preços</a>
                    <a href="#" title="fale conosco" class="header__link">fale conosco</a>
                    <a href="/" title="layout personalizado" class="header__link header__link--personalizado">layout personalizado</a>
                </nav>
                <button class="header__mobile-close">
                    <svg id="icon-cancel-music" viewBox="0 0 32 32">
                        <title>cancel-music</title>
                        <path d="M19.803 16l11.409-11.409c1.050-1.050 1.050-2.753 0-3.803s-2.753-1.050-3.803 0l-11.409 11.409-11.409-11.409c-1.050-1.050-2.753-1.050-3.803 0s-1.050 2.753 0 3.803l11.409 11.409-11.409 11.409c-1.050 1.050-1.050 2.753 0 3.803s2.753 1.050 3.803 0l11.409-11.409 11.409 11.409c1.050 1.050 2.753 1.050 3.803 0s1.050-2.753 0-3.803l-11.409-11.409z"></path>
                    </svg>
                </button>
            </div>
            <button class="header__mobile"></button>
        </div>
    </header>

<?php wp_reset_query(); ?>
