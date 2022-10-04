<?php

/**
 * NewsX Paper Theme Customizer
 *
 * @package NewsX Paper
 */

//calback functon for topbar header
if (!function_exists('newsx_paper_header_top_calback')) :
	function newsx_paper_header_top_calback()
	{
		if (get_theme_mod('newsx_paper_header_top') == 1) {
			return true;
		} else {
			return false;
		}
	}
endif;

// adctive call back function for header social
if (!function_exists('newsx_paper_header_social_callback')) :
	function newsx_paper_header_social_callback()
	{
		if (get_theme_mod('newsx_paper_header_social_show') == 1) {
			return true;
		} else {
			return false;
		}
	}
endif;

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function newsx_paper_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	//select sanitization function
	function newsx_paper_sanitize_select($input, $setting)
	{
		$input = sanitize_key($input);
		$choices = $setting->manager->get_control($setting->id)->choices;
		return (array_key_exists($input, $choices) ? $input : $setting->default);
	}

	$wp_customize->add_panel('newsx_paper_settings', array(
		'priority'       => 50,
		'title'          => __('NewsX Paper Theme settings', 'newsx-paper'),
		'description'    => __('All NewsX Paper theme settings', 'newsx-paper'),
	));
	$wp_customize->add_section('newsx_paper_header', array(
		'title' => __('NewsX Paper Header Settings', 'newsx-paper'),
		'capability'     => 'edit_theme_options',
		'description'     => __('NewsX Paper theme header settings', 'newsx-paper'),
		'panel'    => 'newsx_paper_settings',

	));

	$wp_customize->add_setting('newsx_paper_header_top', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'default'       =>  '1',
		'sanitize_callback' => 'absint',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_header_top', array(
		'label'      => __('Show Header Area Top?', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_header_top',
		'type'       => 'checkbox',
	));

	$wp_customize->add_setting('newsx_paper_latest_news', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'default'       =>  '1',
		'sanitize_callback' => 'absint',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_latest_news', array(
		'label'      => __('Show Latest News Ticker?', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_latest_news',
		'type'       => 'checkbox',
		'active_callback' => 'newsx_paper_header_top_calback',
	));
	$wp_customize->add_setting('newsx_paper_date_show', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'default'       =>  '1',
		'sanitize_callback' => 'absint',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_date_show', array(
		'label'      => __('Date Show?', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_date_show',
		'type'       => 'checkbox',
		'active_callback' => 'newsx_paper_header_top_calback',
	));

	$wp_customize->add_setting('newsx_paper_search_show', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'default'       =>  '1',
		'sanitize_callback' => 'absint',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_search_show', array(
		'label'      => __('Show Header Search?', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_search_show',
		'type'       => 'checkbox',
	));
	$wp_customize->add_setting('newsx_paper_header_social_show', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'default'       =>  1,
		'sanitize_callback' => 'absint',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_header_social_show', array(
		'label'      => __('Show Header Social?', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_header_social_show',
		'type'       => 'checkbox',
	));
	// header social link start
	// Header facebook url
	$wp_customize->add_setting('newsx_paper_hfacebook_link', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_hfacebook_link', array(
		'label'      => __('Header Facebook url', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_hfacebook_link',
		'type'       => 'url',
		'active_callback' => 'newsx_paper_header_social_callback',
	));
	// Header twitter url
	$wp_customize->add_setting('newsx_paper_htwitter_link', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_htwitter_link', array(
		'label'      => __('Header Twitter url', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_htwitter_link',
		'type'       => 'url',
		'active_callback' => 'newsx_paper_header_social_callback',
	));
	// Header linkedin url
	$wp_customize->add_setting('newsx_paper_hlinkedin_link', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_hlinkedin_link', array(
		'label'      => __('Header Linkedin url', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_hlinkedin_link',
		'type'       => 'url',
		'active_callback' => 'newsx_paper_header_social_callback',
	));
	// Header linkedin url
	$wp_customize->add_setting('newsx_paper_hyoutube_link', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_hyoutube_link', array(
		'label'      => __('Header Youtube url', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_hyoutube_link',
		'type'       => 'url',
		'active_callback' => 'newsx_paper_header_social_callback',
	));
	// Header pinterest url
	$wp_customize->add_setting('newsx_paper_hpinterest_link', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_hpinterest_link', array(
		'label'      => __('Header Pinterest url', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_hpinterest_link',
		'type'       => 'url',
		'active_callback' => 'newsx_paper_header_social_callback',
	));
	// Header INSTAGRAM url
	$wp_customize->add_setting('newsx_paper_hinstagram_link', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_hinstagram_link', array(
		'label'      => __('Header Instagram url', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_hinstagram_link',
		'type'       => 'url',
		'active_callback' => 'newsx_paper_header_social_callback',
	));

	//Header social link end

	$wp_customize->add_setting('newsx_paper_main_menu_position', array(
		'default'        => 'center',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'newsx_paper_sanitize_select',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_main_menu_position', array(
		'label'      => __('Main Menu Position', 'newsx-paper'),
		'description' => __('You can set the menu top of the page or under logo. ', 'newsx-paper'),
		'section'    => 'newsx_paper_header',
		'settings'   => 'newsx_paper_main_menu_position',
		'type'       => 'select',
		'choices'    => array(
			'left' => __('Left', 'newsx-paper'),
			'center' => __('Center', 'newsx-paper'),
			'right' => __('Right', 'newsx-paper'),
		),
	));

	//NewsBox PLus blog settings
	$wp_customize->add_section('newsx_paper_blog', array(
		'title' => __('NewsX Paper Blog Settings', 'newsx-paper'),
		'capability'     => 'edit_theme_options',
		'description'     => __('NewsX Paper theme blog settings', 'newsx-paper'),
		'panel'    => 'newsx_paper_settings',

	));
	$wp_customize->add_setting('newsx_paper_blog_container', array(
		'default'        => 'container',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'newsx_paper_sanitize_select',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_blog_container', array(
		'label'      => __('Container type', 'newsx-paper'),
		'description' => __('You can set standard container or full width container. ', 'newsx-paper'),
		'section'    => 'newsx_paper_blog',
		'settings'   => 'newsx_paper_blog_container',
		'type'       => 'select',
		'choices'    => array(
			'container' => __('Standard Container', 'newsx-paper'),
			'container-fluid' => __('Full width Container', 'newsx-paper'),
		),
	));
	$wp_customize->add_setting('newsx_paper_posts_mtitle', array(
		'default'        => esc_html__('Latest News', 'newsx-paper'),
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_posts_mtitle', array(
		'label'      => __('Posts Main Header', 'newsx-paper'),
		'description' => __('Posts main title. Leave empty if you hide the title. ', 'newsx-paper'),
		'section'    => 'newsx_paper_blog',
		'settings'   => 'newsx_paper_posts_mtitle',
		'type'       => 'text',
	));
	$wp_customize->add_setting('newsx_paper_blog_layout', array(
		'default'        => 'rightside',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'newsx_paper_sanitize_select',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_blog_layout', array(
		'label'      => __('Select Blog Layout', 'newsx-paper'),
		'description' => __('Right and Left sidebar only show when sidebar widget is available. ', 'newsx-paper'),
		'section'    => 'newsx_paper_blog',
		'settings'   => 'newsx_paper_blog_layout',
		'type'       => 'select',
		'choices'    => array(
			'rightside' => __('Right Sidebar', 'newsx-paper'),
			'leftside' => __('Left Sidebar', 'newsx-paper'),
			'fullwidth' => __('No Sidebar', 'newsx-paper'),
		),
	));
	$wp_customize->add_setting('newsx_paper_blog_style', array(
		'default'        => 'grid',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'newsx_paper_sanitize_select',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_blog_style', array(
		'label'      => __('Select Blog Style', 'newsx-paper'),
		'section'    => 'newsx_paper_blog',
		'settings'   => 'newsx_paper_blog_style',
		'type'       => 'select',
		'choices'    => array(
			'grid' => __('Grid Style', 'newsx-paper'),
			'list' => __('List Style', 'newsx-paper'),
			'classic' => __('Classic Style', 'newsx-paper'),
		),
	));
	//NewsX Paper page settings
	$wp_customize->add_section('newsx_paper_page', array(
		'title' => __('NewsX Paper Page Settings', 'newsx-paper'),
		'capability'     => 'edit_theme_options',
		'description'     => __('NewsX Paper theme blog settings', 'newsx-paper'),
		'panel'    => 'newsx_paper_settings',

	));
	$wp_customize->add_setting('newsx_paper_page_container', array(
		'default'        => 'container',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'newsx_paper_sanitize_select',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_page_container', array(
		'label'      => __('Page Container type', 'newsx-paper'),
		'description' => __('You can set standard container or full width container for page. ', 'newsx-paper'),
		'section'    => 'newsx_paper_page',
		'settings'   => 'newsx_paper_page_container',
		'type'       => 'select',
		'choices'    => array(
			'container' => __('Standard Container', 'newsx-paper'),
			'container-fluid' => __('Full width Container', 'newsx-paper'),
		),
	));
	$wp_customize->add_setting('newsx_paper_page_header', array(
		'default'        => 'show',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'newsx_paper_sanitize_select',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('newsx_paper_page_header', array(
		'label'      => __('Show Page header', 'newsx-paper'),
		'section'    => 'newsx_paper_page',
		'settings'   => 'newsx_paper_page_header',
		'type'       => 'select',
		'choices'    => array(
			'show' => __('Show all pages', 'newsx-paper'),
			'hide-home' => __('Hide Only Front Page', 'newsx-paper'),
			'hide' => __('Hide All Pages', 'newsx-paper'),
		),
	));




	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'newsx_paper_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'newsx_paper_customize_partial_blogdescription',
			)
		);
	}
}
add_action('customize_register', 'newsx_paper_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function newsx_paper_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function newsx_paper_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function newsx_paper_customize_preview_js()
{
	wp_enqueue_script('newsx-paper-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), NEWSXPAPER_VERSION, true);
}
add_action('customize_preview_init', 'newsx_paper_customize_preview_js');
