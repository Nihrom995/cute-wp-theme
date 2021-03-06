<?php
/**
 * nihrom995 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nihrom995
 */

if ( ! function_exists( 'nihrom995_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nihrom995_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nihrom995, use a find and replace
		 * to change 'nihrom995' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nihrom995', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header-menu' => esc_html__( 'Primary', 'nihrom995' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'nihrom995_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'nihrom995_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nihrom995_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nihrom995_content_width', 640 );
}
add_action( 'after_setup_theme', 'nihrom995_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nihrom995_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar right', 'nihrom995' ),
		'id'            => 'sidebar-right',
		'description'   => esc_html__( 'Add widgets here.', 'nihrom995' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'nihrom995' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'nihrom995' ),
        'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="footer-widget-title">',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'nihrom995' ),
        'id'            => 'sidebar-footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'nihrom995' ),
        'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="footer-widget-title">',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'nihrom995' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'nihrom995' ),
        'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="footer-widget-title">',
        'after_title'   => '</h5>',
    ) );

}
add_action( 'widgets_init', 'nihrom995_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nihrom995_scripts() {

    wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery.min.js', array(), '3', true );
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array( 'jquery' ), '4', true );
    wp_enqueue_script( 'bootstrap' );

    wp_register_script( 'aos', get_template_directory_uri().'/js/aos.js', array( 'jquery' ), '1', true );
    wp_enqueue_script( 'aos' );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nihrom995_scripts' );


/**
 * Register styles.
 */
function nihrom995_styles() {

    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', false, '4' );
    wp_enqueue_style( 'bootstrap' );

    wp_register_style( 'style', get_template_directory_uri().'/css/style.css', false);
    wp_enqueue_style( 'style' );

}
add_action( 'wp_enqueue_scripts', 'nihrom995_styles' );


add_action('wp_print_styles', 'nihrom995_dequeue_css_from_plugins', 100);
function nihrom995_dequeue_css_from_plugins()  {
    wp_dequeue_style( "contact-form-7" );
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load THM
 */
require get_template_directory() . '/tgm/setup.php';

/**
 * Load WP Bootstrap Navigation
 */
require_once('wp-bootstrap-navwalker.php');