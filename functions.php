<?php
/**
 * Timer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Timer
 */

//wp-bootstrap-navwalker For Sub Menu
require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';
//wp-bootstrap-navwalker For Sub Menu

//Tgm Plugin Activation
require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/tgm.php';

//customizer file include
require_once get_template_directory() . '/inc/customizer/customizer.php';
require_once get_template_directory() . '/inc/customizer/home.customizer.php';
require_once get_template_directory() . '/inc/customizer/contact.customizer.php';

//include ACF
require_once get_template_directory() . '/inc/acf.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'timer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function timer_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Timer, use a find and replace
		 * to change 'timer' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'timer', get_template_directory() . '/languages' );

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
		add_image_size( 'custom-size', 84, 84 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'Main-Menu' => esc_html__( 'Primary', 'timer' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'timer_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'timer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function timer_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'timer_content_width', 640 );
}
add_action( 'after_setup_theme', 'timer_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function timer_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Category', 'timer' ),
			'id'            => 'category-1',
			'description'   => esc_html__( 'Add widgets here.', 'timer' ),
			'before_widget' => '<section id="%1$s" class="categories widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-head">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Recent Post', 'timer' ),
			'id'            => 'recent_post',
			'description'   => esc_html__( 'Add widgets here.', 'timer' ),
			'before_widget' => '<section id="%1$s" class="recent-post widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'timer_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function timer_scripts() {
    wp_enqueue_style( "maps-css", get_theme_file_uri( "/assets/css/maps/style.css.map" ), null );
	wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/plugins/bootstrap/bootstrap.min.css" ), null );
	wp_enqueue_style( "ionicons-css", get_theme_file_uri( "/assets/plugins/ionicons/ionicons.min.css" ), null );
	wp_enqueue_style( "animate-css-css", get_theme_file_uri( "/assets/plugins/animate-css/animate.css" ), null );
	wp_enqueue_style( "slider-css", get_theme_file_uri( "/assets/plugins/slider/slider.css" ), null );
	wp_enqueue_style( "owl-carousel-css", get_theme_file_uri( "/assets/plugins/owl-carousel/owl.carousel.css" ), null );
	wp_enqueue_style( "owl-theme-css", get_theme_file_uri( "/assets/plugins/owl-carousel/owl.theme.css" ), null );
	wp_enqueue_style( "facncybox-css", get_theme_file_uri( "/assets/plugins/facncybox/jquery.fancybox.css" ), null );
	wp_enqueue_style( "roboto",'//fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' );
	wp_enqueue_style( "condensed",'//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' );
	wp_enqueue_style( "glegoo",'//fonts.googleapis.com/css?family=Glegoo' );
	wp_enqueue_style( "style-css", get_theme_file_uri( "/assets/css/style.css" ), null );
	wp_enqueue_style( "main-css", get_stylesheet_uri(), null );
	
	$form_icon_color=get_theme_mod('icon_color_setting','#02bdd5');
	$form_iconstyle=<<<EOD
	#feature .icon {
		background-color: {$form_icon_color};
	}
	EOD;
	wp_add_inline_style( 'main-css', $form_iconstyle );

	
	wp_enqueue_script( "owl-Theme-carousel-js", get_theme_file_uri( "/assets/plugins/jQurey/jquery.min.js" ), null, "1.0",true );
    wp_enqueue_script( "form-validation-min-js", get_theme_file_uri( "/assets/plugins/form-validation/jquery.form.js" ), null, "1.0",true );
    wp_enqueue_script( "form-validation-js", get_theme_file_uri( "/assets/plugins/form-validation/jquery.validate.min.js" ), null, "1.0",true );
    wp_enqueue_script( "owl-carousel-js", get_theme_file_uri( "/assets/plugins/owl-carousel/owl.carousel.min.js" ), null, "1.0",true );
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/plugins/bootstrap/bootstrap.min.js" ), null, "1.0",true );
	wp_enqueue_script( "wow-js", get_theme_file_uri( "/assets/plugins/wow-js/wow.min.js" ), null, "1.0",true );
	wp_enqueue_script( "slider-js", get_theme_file_uri( "/assets/plugins/slider/slider.js" ), null, "1.0",true );
	wp_enqueue_script( "facncybox-js", get_theme_file_uri( "/assets/plugins/facncybox/jquery.fancybox.js" ), null, "1.0",true );
	wp_enqueue_script( "main-js", get_theme_file_uri( "/assets/js/main.js" ), array( "jquery" ), "1.0", true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'timer_scripts' );

function cust_customizer_assets() {
	wp_enqueue_script( "timer-customizer-js", get_theme_file_uri( "/assets/js/customizer.js" ), array(
		'jquery',
		'customize-preview'
	), time(), true );
}

add_action( "customize_preview_init", 'cust_customizer_assets' );


function timer_theme_custom_post() {
    register_post_type( 'posttype',
        array(
            'labels' => array(
                'name' => __( 'Author Info' ),
                'singular_name' => __( 'author-info' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true,
        )
	);
	register_post_type( 'latest_work',
		array(
			'labels' => array(
				'name' => __( 'Latest Works' ),
				'singular_name' => __( 'latest-work' )
			),
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
			'public' => false,
			'show_ui' => true,
		)
	);
}
add_action( 'init', 'timer_theme_custom_post' );



