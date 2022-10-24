<?php
if ( ! function_exists( 'bakerystore_setup' ) ) :
function bakerystore_setup() {

// Root path/URI.
define( 'BAKERYSTORE_PARENT_DIR', get_template_directory() );
define( 'BAKERYSTORE_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'BAKERYSTORE_PARENT_INC_DIR', BAKERYSTORE_PARENT_DIR . '/inc');
define( 'BAKERYSTORE_PARENT_INC_URI', BAKERYSTORE_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );

	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'bakery-store' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'bakery-store' ),
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
	
	
	add_theme_support('custom-logo');

	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', bakerystore_google_font() ) );
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bakerystore_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'bakerystore_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bakerystore_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bakerystore_content_width', 1170 );
}
add_action( 'after_setup_theme', 'bakerystore_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function bakerystore_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'bakery-store' ),
		'id' => 'bakerystore-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'bakery-store' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'bakery-store' ),
		'id' => 'bakerystore-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'bakery-store' ),
		'before_widget' => '<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title w-title">',
		'after_title' => '</h5><span class="shap"></span>',
	) );

	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'bakery-store' ),
		'id' => 'bakerystore-woocommerce-sidebar',
		'description' => __( 'This Widget area for WooCommerce Widget', 'bakery-store' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
}
add_action( 'widgets_init', 'bakerystore_widgets_init' );

/**
 * All Styles & Scripts.
 */

require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';


/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/bakerystore-customizer.php';

require_once get_template_directory() . '/inc/tab-control.php';


    
// for header
function bakerystore_header_reset_settings() {
    remove_theme_mod('hide_show_sticky');
    remove_theme_mod('topheader_phoneicon');
    remove_theme_mod('topheader_phonetext');
    remove_theme_mod('topheader_btntext');
    remove_theme_mod('topheader_btntextlink');
    remove_theme_mod('header_bgcolor');
    remove_theme_mod('header_phniconcolor');
    remove_theme_mod('header_phntxtcolor');
    remove_theme_mod('header_carticoncolor');
    remove_theme_mod('header_carttextcolor');
    remove_theme_mod('header_carttxtbgcolor');
    remove_theme_mod('header_btnbgcolor');                
    remove_theme_mod('header_btntxtcolor');
    remove_theme_mod('header_bordercolor');
    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_bakerystore_header_reset_settings', 'bakerystore_header_reset_settings' );



// for slider

function bakerystore_slider_reset_settings() {
    remove_theme_mod('slider1');
    remove_theme_mod('slider2');
    remove_theme_mod('slider3');
    remove_theme_mod('slider4');
    remove_theme_mod('slider5');
    remove_theme_mod('slider6');
    remove_theme_mod('slider_titlecolor');
    remove_theme_mod('slider_titlebordercolor');
    remove_theme_mod('slider_descriptioncolor');
    remove_theme_mod('slider_btntxt1color');
    remove_theme_mod('slider_btnbg1color');                
    remove_theme_mod('slider_btntxt2color');
    remove_theme_mod('slider_btnbg2color');

    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_bakerystore_slider_reset_settings', 'bakerystore_slider_reset_settings' );


// for productcat

function bakerystore_productcat_reset_settings() {
    remove_theme_mod('productcat_heading');
    remove_theme_mod('productcat_headingcolor');
    remove_theme_mod('productcat_bordercolor1');
    remove_theme_mod('productcat_bordercolor2');
    remove_theme_mod('productcat_boxbg1');
    remove_theme_mod('productcat_boxbg2');
    remove_theme_mod('productcat_boxbg3');
    remove_theme_mod('productcat_boxbg4');
    remove_theme_mod('productcat_titlecolor');
    remove_theme_mod('productcat_boxtitle1');
    remove_theme_mod('productcat_boxtitle2');                
    remove_theme_mod('productcat_boxtitle3');
    remove_theme_mod('productcat_boxtitle4');

    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_bakerystore_productcat_reset_settings', 'bakerystore_productcat_reset_settings' );


// for banner

function bakerystore_banner_reset_settings() {
    remove_theme_mod('banner_text1');
    remove_theme_mod('banner_btntextlink');
    remove_theme_mod('banner_btntext');
    remove_theme_mod('banner_text2');
    remove_theme_mod('banner_btntext2');
    remove_theme_mod('banner_btntextlink2');
    remove_theme_mod('banner_titlecolor');
    remove_theme_mod('banner_box1bgcolor');
    remove_theme_mod('banner_box1btnbgcolor');
    remove_theme_mod('banner_box2bgcolor');
    remove_theme_mod('banner_box2btnbgcolor');                
    remove_theme_mod('banner_btntxtcolor');

    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_bakerystore_banner_reset_settings', 'bakerystore_banner_reset_settings' );


// for popularproducts

function bakerystore_popularproducts_reset_settings() {
    remove_theme_mod('popularproducts_heading');
    remove_theme_mod('popularproducts_headingcolor');
    remove_theme_mod('popularproducts_border1color');
    remove_theme_mod('popularproducts_border2color');
    remove_theme_mod('popularproducts_box1bgcolor');
    remove_theme_mod('popularproducts_box2bgcolor');
    remove_theme_mod('popularproducts_box3bgcolor');
    remove_theme_mod('popularproducts_titlecolor');
    remove_theme_mod('popularproducts_pricecolor');
    remove_theme_mod('popularproducts_btnbgcolor');
    remove_theme_mod('popularproducts_btn1txticoncolor');             
    remove_theme_mod('popularproducts_btn2txticoncolor');
    remove_theme_mod('popularproducts_btn3txticoncolor');

    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_bakerystore_popularproducts_reset_settings', 'bakerystore_popularproducts_reset_settings' );



add_filter( 'nav_menu_link_attributes', 'bakerystore_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function bakerystore_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

