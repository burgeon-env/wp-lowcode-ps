<?php
/**
 * LoCoPaS functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BurgeonEnv Themes
 * @subpackage LoCoPaS
 * @since 0.1.0
 */


if ( ! function_exists( 'locopas_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function locopas_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on LoCoPaS, use a find and replace
	 * to change 'locopas' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'locopas', trailingslashit( get_template_directory() ) . '/languages' );

	// Add default posts and comments RSS feed links to head.
	// add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for custom logo.
	 *
	 * @since 0.1.0
	 */
	add_image_size( 'locopas-site-logo', 268, 90 );
	add_theme_support( 'custom-logo', array( 'size' => 'locopas-site-logo' ) );

	// Woocommerce Compatibility
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	/**
	 * Define custom thumbnail size
	 *
	 * @since 0.1.0
     * @deprecated 0.4.0
	 */
	// add_image_size( 'locopas_project_thumb', 450, 422, true );
	// add_image_size( 'locopas_services_thumb', 393, 384, true );
	// add_image_size( 'locopas_team_thumb', 230, 316, true );
	
    /**
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     * @deprecated 0.5.0
     *
	 */
	// add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'locopas_primary_menu' => esc_html__( 'Primary Menu', 'locopas' ),
		'locopas_top_menu' => esc_html__( 'Top Header Menu', 'locopas' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'gallery',
		'caption',
	) );
	// add_theme_support( 'html5', array(
	// 	'search-form',
	// 	'comment-form',
	// 	'comment-list',
	// 	'gallery',
	// 	'caption',
	// ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background');

	// Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'locopas_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );

	/**
	 * This theme styles several css elements by using separate files inside the theme,
	 * specifically font, colors, icons, and column width.
	 */
	// add_editor_style( 'assets/css/editor-style.css' );


	/**
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	// add_editor_style( 'assets/css/editor-style.css' );

}
endif;
add_action( 'after_setup_theme', 'locopas_setup' );

/**
 * Load LoCoPaS Custom Functions file
 */
require trailingslashit( get_template_directory() ) . '/inc/locopas-functions.php';

/**
 * Load LoCoPaS breadcrumbs Functions file
 */
require trailingslashit( get_template_directory() ) . '/inc/locopas-breadcrumbs.php';

/**
 * Load LoCoPaS Custom Widget Functions file
 */
require trailingslashit( get_template_directory() ) . '/inc/widgets/locopas-widget-functions.php';

/**
 * Implement the Custom Header feature.
 */
require trailingslashit( get_template_directory() ) . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require trailingslashit( get_template_directory() ) . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require trailingslashit( get_template_directory() ) . '/inc/extras.php';

/**
 * Customizer additions.
 */
require trailingslashit( get_template_directory() ) . '/inc/customizer/customizer.php';
require trailingslashit( get_template_directory() ) . '/inc/customizer/general-panel.php';
require trailingslashit( get_template_directory() ) . '/inc/customizer/header-panel.php';
require trailingslashit( get_template_directory() ) . '/inc/customizer/homepage-panel.php';
require trailingslashit( get_template_directory() ) . '/inc/customizer/design-panel.php';
require trailingslashit( get_template_directory() ) . '/inc/customizer/footer-panel.php';
// require trailingslashit( get_template_directory() ) . '/inc/customizer/additional-panel.php';
// require trailingslashit( get_template_directory() ) . '/assets/css/dynamic-styles.php';

/**
 * Required files for customizer
 */
require trailingslashit( get_template_directory() ) . '/inc/customizer/locopas-customizer-classes.php';
require trailingslashit( get_template_directory() ) . '/inc/customizer/locopas-sanitize.php';

/**
 * Load Jetpack compatibility file.
 */
require trailingslashit( get_template_directory() ) . '/inc/jetpack.php';

/**
 * Typography
 */
// require trailingslashit(get_template_directory()).'/inc/typography/typography.php';

/**
 * Load metaboxes file
 */
// require trailingslashit( get_template_directory() ) . '/inc/metaboxes/metabox.php';

/**
 * Load Welcome Page
 */
#require trailingslashit( get_template_directory() ) . '/welcome/welcome.php';
