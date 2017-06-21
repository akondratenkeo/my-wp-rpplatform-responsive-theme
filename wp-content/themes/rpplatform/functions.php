<?php
/**
 * RPplatform functions and definitions
 */

/**
 * RPplatform only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'rpplatform_setup' ) ) :

function rpplatform_setup() {

	load_theme_textdomain( 'rpplatform', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' =>        __( 'Main Menu', 'rpplatform' ),
        'header-social' =>  __( 'Header Social Links', 'rpplatform' ),
        'footer' =>         __( 'Footer Menu', 'rpplatform' ),
		'footer-social'  => __( 'Footer Social Links', 'rpplatform' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', rpplatform_fonts_url() ) );
}
endif; // rpplatform_setup
add_action( 'after_setup_theme', 'rpplatform_setup' );


/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 */
function rpplatform_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rpplatform_content_width', 840 );
}
add_action( 'after_setup_theme', 'rpplatform_content_width', 0 );


/**
 * Registers a widget area.
 */
function rpplatform_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'rpplatform' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'rpplatform' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rpplatform_widgets_init' );


if ( ! function_exists( 'rpplatform_fonts_url' ) ) :
/**
 * Register Google fonts for RPplatform.
 */
function rpplatform_fonts_url() {
	$fonts_url = 'https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic';
	return $fonts_url;
}
endif;


/**
 * Handles JavaScript detection.
 */
function rpplatform_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'rpplatform_javascript_detection', 0 );


/**
 * Enqueues scripts and styles.
 */
function rpplatform_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'rpplatform-fonts', rpplatform_fonts_url(), array(), null );

	// Add Bootstrap, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.6' );
    wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap-theme.min.css', array(), '3.3.6' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css', array(), '20160114' );
    wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css', array(), '20160114' );
    wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/vendor/bxslider/jquery.bxslider.css', array(), '20160114' );

	// Theme stylesheet.
	wp_enqueue_style( 'rpplatform-style', get_stylesheet_uri() );
    wp_enqueue_style( 'rpplatform-responsive', get_template_directory_uri() . '/css/style-responsive.css', array( 'rpplatform-style' ) );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'rpplatform-ie', get_template_directory_uri() . '/css/ie.css', array( 'rpplatform-style' ) );
	wp_style_add_data( 'rpplatform-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'rpplatform-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'rpplatform-style' ) );
	wp_style_add_data( 'rpplatform-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'rpplatform-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'rpplatform-style' ) );
	wp_style_add_data( 'rpplatform-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'rpplatform-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'rpplatform-html5', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_script( 'rpplatform-bxslider', get_template_directory_uri() . '/vendor/bxslider/jquery.bxslider.min.js', array( 'jquery' ), '20160114', true );
    wp_enqueue_script( 'rpplatform-owl-carousel', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js', array( 'jquery' ), '20160114', true );
    wp_enqueue_script( 'rpplatform-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'rpplatform-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160114', true );

    //	wp_localize_script( 'rpplatform-script', 'screenReaderText', array(
    //		'expand'   => __( 'expand child menu', 'rpplatform' ),
    //		'collapse' => __( 'collapse child menu', 'rpplatform' ),
    //	) );
}
add_action( 'wp_enqueue_scripts', 'rpplatform_scripts' );


/**
 * Adds custom classes to the array of body classes.
 */
function rpplatform_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'rpplatform_body_classes' );


/**
 * Converts a HEX value to RGB.
 */
function rpplatform_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 */
function rpplatform_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'rpplatform_content_image_sizes_attr', 10 , 2 );


/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 */
function rpplatform_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'rpplatform_post_thumbnail_sizes_attr', 10 , 3 );


/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 */
function rpplatform_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'rpplatform_widget_tag_cloud_args' );


function rpplatform_replace_content($content)
{
    $source = array("<li>", "</li>");
    $replace   = array("<li><p>", "</p></li>");
    $content = str_replace($source, $replace, $content);
    return $content;
}
add_filter('the_content','rpplatform_replace_content');