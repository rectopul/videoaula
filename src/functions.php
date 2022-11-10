<?php

/**
 * auaha functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package auaha
 */

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
//after wp_enqueue_script
wp_localize_script( 'javascriptVariables', 'wpvariables', $translation_array );


if (!function_exists('auaha_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function auaha_setup()
	{
		/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on auaha, use a find and replace
	 * to change 'auaha' to the name of your theme in all the template files.
	 */
		load_theme_textdomain('auaha', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
		add_theme_support('title-tag');

		/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'auaha'),
		));

		/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('auaha_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 *	Custom images size
		 *	Add Images sizes customizables in system
		 */

		add_image_size('solutions_thumbnail', 376, 185, true);
		add_image_size('case', 831, 398, false);
		add_image_size('perfil', 190, 190, false);
		add_image_size('marketplace', 630, 113, true);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 40,
			'width'       => 200,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array('site-title', 'site-description')
		));

		add_theme_support('post-thumbnails', array('marketplace', 'post', 'gallery-items', 'audio-items', 'video-items', 'page', 'event-items', 'staff'));
	}
endif;
add_action('after_setup_theme', 'auaha_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function auaha_content_width()
{
	$GLOBALS['content_width'] = apply_filters('auaha_content_width', 640);
}
add_action('after_setup_theme', 'auaha_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function auaha_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'auaha'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'auaha'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'auaha_widgets_init');

add_filter('wp_nav_menu_items', 'add_custom_in_menu', 10, 2);

function add_custom_in_menu($items, $args)
{
	if ($args->theme_location == 'menu-1') // only for primary menu
	{
		$items_array = array();
		while (false !== ($item_pos = strpos($items, '<li', 3))) {
			$items_array[] = substr($items, 0, $item_pos);
			$items = substr($items, $item_pos);
		}
		$items_array[] = $items;
		//array_splice($items_array, 2, 0, '<li>custom HTML here</li>'); // insert custom item after 2nd one

		$items = implode('', $items_array);
	}
	return $items;
}

/**
 * Enqueue scripts and styles.
 */

function auaha_scripts()
{
	wp_enqueue_script('jquery');
	// 	style
	wp_enqueue_style('Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');

	//Get Popper JS
	wp_enqueue_script('Quiz Js', get_template_directory_uri() . '/assets/js/quiz.js', array('jquery'), '4.3.1', true);

	//Get Popper JS
	wp_enqueue_script('Popper JS', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '4.3.1', true);

	//Get Bootstrap CSS
	wp_enqueue_style('Bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '4.2.1');
	//Get Bootstrap JS
	wp_enqueue_script('Bootstrap JS', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), '4.2.1', true);

	//Main CSS
	wp_register_style('theme-stylesheet', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), '', 'all');
	wp_enqueue_style('theme-stylesheet');

	//Get Swiper CSS
	wp_enqueue_style('Swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', false, '4.3.1');
	//Get Swiper JS
	wp_enqueue_script('Swiper JS', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '4.3.1', true);

	//Bootstrap Icons
	wp_enqueue_style('Bootstrap Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css', array(), '4.3.1', true);

	/* Font - Lato */
	wp_enqueue_style('Lato', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap');
	wp_enqueue_style('Google Fonts', 'https://fonts.googleapis.com/css2?family=Amiri&family=Asap:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Figtree:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
	/* Font Nunito */
	wp_enqueue_style('Nunito', 'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap');

	//  main
	//wp_enqueue_script( 'main' );

	wp_register_script( 'main', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '4.2.1', true );
	wp_enqueue_script( 'main' );

	//Get Animate CSS
	wp_enqueue_style('Animate', get_template_directory_uri() . '/assets/css/animate.css', false, '4.3.1');



	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'auaha_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Função para css
 * Funçao que gera o css
 */

function css($selector, $property, $theme_mod)
{
	$return = '';
	$theme_mod = get_theme_mod($theme_mod);
	if (!empty($theme_mod)) {
		$return = sprintf(
			'%s { %s:%s; }',
			$selector,
			$property,
			$property == 'background-image' ? 'url("' . $theme_mod . '")' : $theme_mod
		);
		return $return;
	}
}


// Output custom CSS to live site
function output()
{
	echo '<style id="rmb-css">';
	echo css('.hero', 'background-color', 'hero_background_color');
	echo css('.marktplace', 'background-image', 'ptina_marketplace_background_image');
	echo '</style>';
}
add_action('wp_head', 'output');


//Modificar los campos Autor, Email y Sitio web del formulario de comentarios
function apk_modify_comment_fields($fields)
{

	//Variables necesarias para que esto funcione
	$commenter = wp_get_current_commenter();
	$aria_req = ($req ? " aria-required='true'" : '');

	$fields =  array(
		'author' =>
		'<input id="author" name="author" type="text" value="" size="30"' . $aria_req . ' placeholder="' . __('Nome', 'apk') . '" />',
		'message' =>
		'<textarea id="comment1" name="comment" cols="45" rows="5" maxlength="65525"' . $aria_req . ' placeholder="' . __('Escreva seu coment��rio...', 'apk') . '"></textarea>',
	);

	return $fields;
}

add_filter('comment_form_default_fields', 'apk_modify_comment_fields');


function book_setup_post_type()
{
	$args = array(
		'public'    => true,
		'labels'     => array(
			'name' => __('Marketplace', 'textdomain'),
			'add_new' => _x('Adicionar Marketplace', 'book'),
			'add_new_item' => __('Adicionar Marketplace'),
			'edit_item' => __('Edit Marketplaces'),
			'all_items' => __('Marketplaces'),
			'search_items' => __('Search Marketplace'),
			'not_found' =>  __('Não há nenhum Marketplace'),
			'parent_item_colon' => ''
		),
		'menu_icon' => 'dashicons-store',
		'supports'  => array('title', 'editor', 'thumbnail', 'revisions', 'gallery-items')
	);

	$argscase = array(
		'public'    => true,
		'label'     => __('Cases', 'textdomain'),
		'menu_icon' => 'dashicons-hammer',
		'supports'  => array('title', 'editor', 'thumbnail')
	);

	$argsrep = array(
		'public'    => true,
		'label'     => __('Representantes', 'textdomain'),
		'menu_icon' => 'dashicons-admin-users',
		'supports'  => array('title', 'thumbnail', 'excerpt')
	);
	register_post_type('Representantes', $argsrep);
	register_post_type('marketplace', $args);
	register_post_type('cases', $argscase);
}
add_action('init', 'book_setup_post_type');
