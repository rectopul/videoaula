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

    <header id="header" class="header header__mkt header__mkt-single" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/bg-header-post-servicos.png')">
        <div class="header__wrapper">
            <div class="header__logo">
                <h1>
                    <a class="header__logo-link" href="/auaha-mkt/">
                        <?php
                            while ( have_posts() ) : the_post();
                        ?>
                        <svg id="icon-logo-auahamkt" viewBox="0 0 144 32">
                            <title>logo-auahamkt</title>
                            <path fill="#fefefe" style="fill: var(--color1, #fefefe)" d="M13.13 19.546c-0.787 2.755-9.816 0.946-9.816 5.839 0 1.809 1.367 3.372 4.929 3.372 3.024 0 4.887-1.111 4.887-1.111v-8.101zM13.005 16.298c0-2.097-0.952-3.578-4.804-3.578s-6.462 1.481-6.462 4.359c-0.787-1.111-1.118-2.138-1.118-3.002 0-2.796 3.562-4.235 7.58-4.235 5.26 0 8.118 2.467 8.118 6.62v14.721c-0.994-0.411-1.864-0.535-2.734-0.535-1.905 0-3.645 0.74-5.923 0.74-3.769 0-7.662-1.603-7.662-6.045 0-7.936 11.556-5.099 13.005-9.046v0z"></path>
                            <path fill="#fefefe" style="fill: var(--color1, #fefefe)" d="M45.452 19.546c-0.787 2.755-9.816 0.946-9.816 5.839 0 1.809 1.367 3.372 4.929 3.372 3.023 0 4.887-1.111 4.887-1.111v-8.101zM45.328 16.298c0-2.097-0.952-3.578-4.805-3.578s-6.461 1.481-6.461 4.359c-0.787-1.111-1.119-2.138-1.119-3.002 0-2.796 3.562-4.235 7.579-4.235 5.26 0 8.118 2.467 8.118 6.62v14.721c-0.994-0.411-1.864-0.535-2.733-0.535-1.906 0-3.645 0.74-5.923 0.74-3.769 0-7.662-1.603-7.662-6.045 0-7.936 11.556-5.099 13.005-9.046v0z"></path>
                            <path fill="#fefefe" style="fill: var(--color1, #fefefe)" d="M31.87 25.344c0-1.122 0.225-2.031 0.614-2.78v-10.461c0-2.056-3.314-2.056-3.314-2.056v17.722c0 0-1.947 0.864-4.971 0.864-3.686 0-5.012-1.48-5.012-4.030v-12.5c0-2.015-3.314-2.056-3.314-2.056v15.173c0 4.852 3.976 6.168 7.745 6.168 2.361 0 4.183-0.863 6.171-0.863 0.828 0 1.74 0.164 2.693 0.658v-3.094c-0.389-0.765-0.614-1.673-0.614-2.745z"></path>
                            <path fill="#fefefe" style="fill: var(--color1, #fefefe)" d="M77.774 19.546c-0.787 2.755-9.816 0.946-9.816 5.839 0 1.809 1.367 3.372 4.929 3.372 3.024 0 4.888-1.111 4.888-1.111v-8.101zM77.65 16.298c0-2.097-0.952-3.578-4.804-3.578s-6.462 1.481-6.462 4.359c-0.787-1.111-1.118-2.138-1.118-3.002 0-2.796 3.562-4.235 7.58-4.235 5.26 0 8.118 2.467 8.118 6.62v14.721c-0.994-0.411-1.864-0.535-2.734-0.535-1.905 0-3.644 0.74-5.923 0.74-3.769 0-7.663-1.603-7.663-6.045 0-7.936 11.556-5.099 13.005-9.046v0z"></path>
                            <path fill="#fefefe" style="fill: var(--color1, #fefefe)" d="M64.192 25.344c0-1.122 0.225-2.032 0.614-2.781v-6.225c0-4.071-3.355-6.497-7.249-6.497-5.012 0-6.461 2.261-6.461 2.261s0.414-0.946 0.414-3.742v-5.716c0-2.549-3.065-2.467-3.314-2.467v28.948c0 2.057 3.314 2.057 3.314 2.057v-14.639c0-2.385 2.775-4.029 5.509-4.029 2.568 0 4.473 1.357 4.473 4.441v12.171c0 2.015 3.314 2.057 3.314 2.057v-3.094c-0.39-0.765-0.614-1.673-0.614-2.746z"></path>
                            <path fill="#fff" style="fill: var(--color2, #fff)" d="M108.515 16.727c0-2.871-1.844-4.078-5.071-4.078-3.060 0-5.030 1.498-5.030 3.37v15.437c0 0-3.353 0-3.353-2.080v-12.649c0-2.871-1.341-4.078-5.071-4.078-3.060 0-5.029 0.957-5.029 0.957v17.85c0 0-3.353 0-3.353-2.080v-19.306c0 0 1.635 0.749 2.389 0.749 2.137 0 4.191-0.957 6.58-0.957 2.347 0 5.156 0.707 6.287 2.247 0.796-0.749 3.059-2.247 7.334-2.247 3.814 0 7.67 1.873 7.67 6.366v15.229c0 0-3.353-0.042-3.353-2.080v-12.649z"></path>
                            <path fill="#fff" style="fill: var(--color2, #fff)" d="M129.822 31.165c0 0-1.216 0.291-1.76 0.291-4.82 0-1.593-9.986-12.196-10.819v10.819c0 0-3.353 0-3.353-2.080v-29.376c0 0 3.353 0 3.353 2.080v15.853c3.814 0 5.449-1.956 7.712-6.158 0.251-0.458 0.964-1.706 3.478-1.706 0.377 0 0.797 0.041 1.257 0.166-1.718 2.497-4.065 8.364-8.131 8.863 7.251 1.623 7.879 9.32 9.64 12.067z"></path>
                            <path fill="#fff" style="fill: var(--color2, #fff)" d="M128.955 5.409c0 0 3.353 0.042 3.353 2.122v3.454h8.759c0 0-0.042 2.871-2.096 2.871h-6.664v9.945c0 2.996 1.048 4.951 4.358 4.951 2.892 0 5.365-1.581 5.365-4.41 0.796 1.165 1.132 2.205 1.132 3.079 0 2.829-3.437 4.244-6.832 4.244-4.485 0-7.377-2.496-7.377-6.699v-19.556z"></path>
                        </svg>
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
                <?php zotMenu('Menu Mkt') ?>
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
