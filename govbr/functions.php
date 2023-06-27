<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @since 0.1.0
 */

// This theme requires WordPress 6.2 or later.
if ( version_compare( $GLOBALS['wp_version'], '6.2', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'gov_br_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function gov_br_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Gov BR, use a find and replace
		 * to change 'govbr' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'govbr', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Menu principal', 'govbr' ),
				'institutional' => esc_html__( 'Links institucionais', 'govbr' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 140;
		$logo_height = 111;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );


		// Allows creating custom template parts
		add_theme_support( 'block-template-parts' );

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_empty_string' );

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', gov_br_get_starter_content() );
		}
	}
}
add_action( 'after_setup_theme', 'gov_br_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since 0.1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function gov_br_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gov_br_content_width', 1152 );
}
add_action( 'after_setup_theme', 'gov_br_content_width', 0 );

/**
 * Adds label and description to menu footer template area
 * 
 * @since 0.1.0
 *
 */
function gov_br_template_part_areas( array $areas ) {
	$areas[] = array(
		'area'        => 'menu-footer',
		'area_tag'    => 'div',
		'label'       => __( 'Menu lateral', 'govbr' ),
		'description' => __( 'Área do menu lateral abaixo do menu de navegação.', 'govbr' ),
		'icon'        => 'sidebar'
	);
	return $areas;
}
add_filter( 'default_wp_template_part_areas', 'gov_br_template_part_areas' );

/**
 * Enqueue scripts and styles.
 *
 * @since 0.1.0
 *
 * @return void
 */
function gov_br_scripts() {

	global $wp_scripts;

	// Standard stylesheet.
	wp_enqueue_style( 'gov-br-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// RTL styles.
	wp_style_add_data( 'gov-br-style', 'rtl', 'replace' );

	// Print styles.
	wp_enqueue_style( 'gov-br-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'gov-br-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Back to top script
	wp_enqueue_script(
		'gov-br-back-to-top-script',
		get_template_directory_uri() . '/assets/js/back-to-top.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Our own script for initilizing DSGov components
	// Find the path.
	$dependencies_file_path = get_template_directory() . '/scripts/build/index.asset.php';

	// If the file exists, enqueue it.
	if ( file_exists( $dependencies_file_path ) ) {
		$dependencies = require $dependencies_file_path;
		wp_enqueue_script(
			'gov-br-setup-script',
			get_template_directory_uri() . '/scripts/build/index.js',
			$dependencies['dependencies'],
			$dependencies['version']
		);
	}

	// Fontawesome icons.
	wp_enqueue_style( 'gov-br-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), wp_get_theme()->get( 'Version' ) );

	// Removes some core block styles
	wp_deregister_style( 'wp-block-table' );

}
add_action( 'wp_enqueue_scripts', 'gov_br_scripts' );

/**
 * Loads each core block assets separately
 * 
 * While loosing a bit of performance, this allows us to deregister some core block styling
 * that we are not interested at all, like the Table one.
 * 
 * @see https://make.wordpress.org/core/2021/07/01/block-styles-loading-enhancements-in-wordpress-5-8/
 * 
 */
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

/**
 * Enqueue block editor script.
 *
 * @since 0.1.0
 *
 * @return void
 */
function gov_br_block_editor_script() {

	wp_enqueue_script( 'govbr-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'enqueue_block_editor_assets', 'gov_br_block_editor_script' );

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_collapsable_list_block_init() {
	register_block_type( __DIR__ . '/blocks/collapse/build/' );
	register_block_type( __DIR__ . '/blocks/collapse-label/build/' );
	register_block_type( __DIR__ . '/blocks/collapse-content/build/' );
}
add_action( 'init', 'create_block_collapsable_list_block_init' );

/* Necessary for using is_plugin_active() later... maybe we should bind them do admin_init? */
include_once(ABSPATH.'wp-admin/includes/plugin.php');

// SVG Icons class.
require get_template_directory() . '/classes/class-gov-br-svg-icons.php';

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Breadcrumb function.
require get_template_directory() . '/inc/breadcrumbs.php';

// Adds signature field to settings.
require get_template_directory() . '/classes/class-gov-br-signature-field.php';
new Gov_BR_Signature_Field();

// Customizer additions.
require get_template_directory() . '/classes/class-gov-br-customize.php';
new Gov_BR_Customize();

// Admin Page
require get_template_directory() . '/classes/class-gov-br-admin-page.php';
new Gov_BR_Admin_Page();

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Block Styles.
require get_template_directory() . '/inc/block-filters.php';

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Contrast Mode.
require_once get_template_directory() . '/classes/class-gov-br-contrast-mode.php';
new Gov_BR_Contrast_Mode();

// VLibras.
require_once get_template_directory() . '/classes/class-gov-br-vlibras.php';
new Gov_BR_VLibras();

// Plugins: Icon Block
if ( is_plugin_active( 'icon-block/icon-block.php' ) ) {
	require get_template_directory() . '/plugins/icon-block.php';
}

/**
 * Calculate classes for the main <html> element.
 *
 * @since 0.1.0
 *
 * @return void
 */
function gov_br_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since 0.1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'gov_br_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}
