<?php
function bakerystore_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'bakerystore_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'bakery-store' ),
		)
	);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'bakery-store' ),
			'priority' => 1,
			'panel' => 'bakerystore_frontpage_sections',
		)
	);


	$wp_customize->add_setting('bakerystore_reset_slider_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new bakerystore_Reset_Custom_Control($wp_customize, 'bakerystore_reset_slider_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset All Settings', 'bakery-store'),
	  'description' => 'bakerystore_slider_reset_settings',
	  'section' => 'slider_setting'
	)));
	

	$wp_customize->add_setting('bakerystore_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new bakerystore_Tab_Control($wp_customize, 'bakerystore_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'bakery-store'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'bakery-store'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
                'slider_titlebordercolor',
                'slider_descriptioncolor',
                'slider_btntxt1color',
                'slider_btnbg1color',
                'slider_btntxt2color',
                'slider_btnbg2color'

            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#000', 'bakery-store' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider titleborder Color
	$slidertitlebordercolor = esc_html__('#FD67BE', 'bakery-store' );
	$wp_customize->add_setting(
    	'slider_titlebordercolor',
    	array(
			'default' => $slidertitlebordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlebordercolor',
		array(
		    'label'   		=> __('Title Border Color','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider description Color
	$sliderdescriptioncolor = esc_html__('#000', 'bakery-store' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt1 Color
	$sliderbtntxt1color = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'slider_btntxt1color',
    	array(
			'default' => $sliderbtntxt1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt1color',
		array(
		    'label'   		=> __('Button 1 Text Color','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg1 Color
	$sliderbtnbg1color = esc_html__('#FD67BE', 'bakery-store' );
	$wp_customize->add_setting(
    	'slider_btnbg1color',
    	array(
			'default' => $sliderbtnbg1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbg1color',
		array(
		    'label'   		=> __('Button 1 BG Color','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt2 Color
	$sliderbtntxt2color = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'slider_btntxt2color',
    	array(
			'default' => $sliderbtntxt2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt2color',
		array(
		    'label'   		=> __('Button 2 Text Color','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg2 Color
	$sliderbtnbg2color = esc_html__('#FDDD18', 'bakery-store' );
	$wp_customize->add_setting(
    	'slider_btnbg2color',
    	array(
			'default' => $sliderbtnbg2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbg2color',
		array(
		    'label'   		=> __('Button 2 BG Color','bakery-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	/*=========================================
	Product Category Section
	=========================================*/
	$wp_customize->add_section(
		'productcat_setting', array(
			'title' => esc_html__( 'Product Category Section', 'bakery-store' ),
			'priority' => 2,
			'panel' => 'bakerystore_frontpage_sections',
		)
	);


	$wp_customize->add_setting('bakerystore_reset_productcat_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new bakerystore_Reset_Custom_Control($wp_customize, 'bakerystore_reset_productcat_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset All Settings', 'bakery-store'),
	  'description' => 'bakerystore_productcat_reset_settings',
	  'section' => 'productcat_setting'
	)));
	

	$wp_customize->add_setting('bakerystore_productcat_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new bakerystore_Tab_Control($wp_customize, 'bakerystore_productcat_tabs', array(
	   'section' => 'productcat_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'bakery-store'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'productcat_heading'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'bakery-store'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'productcat_headingcolor',
            	'productcat_bordercolor1',
            	'productcat_bordercolor2',
            	'productcat_boxbg1',
            	'productcat_boxbg2',
            	'productcat_boxbg3',
            	'productcat_boxbg4',
            	'productcat_titlecolor',
            	'productcat_boxtitle1',
            	'productcat_boxtitle2',
            	'productcat_boxtitle3',
            	'productcat_boxtitle4'

            ),
     	)
	    
    	),
	))); 


	// general settings

	// productcat text
	$productcatheading = esc_html__('Product Category', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_heading',
    	array(
			'default' => $productcatheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'productcat_heading',
		array(
		    'label'   		=> __('Heading','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// style setting

	// productcat heading col
	$productcatheadingcolor = esc_html__('#000', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_headingcolor',
    	array(
			'default' => $productcatheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_headingcolor',
		array(
		    'label'   		=> __('Heading Color','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// productcat border color 1
	$productcatbordercolor1 = esc_html__('#bb8fe7', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_bordercolor1',
    	array(
			'default' => $productcatbordercolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_bordercolor1',
		array(
		    'label'   		=> __('Border Color 1','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// productcat border color 2
	$productcatbordercolor2 = esc_html__('#fcf900', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_bordercolor2',
    	array(
			'default' => $productcatbordercolor2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_bordercolor2',
		array(
		    'label'   		=> __('Border Color 2','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// productcat box 1 bg
	$productcatboxbg1 = esc_html__('#96bb7b ', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_boxbg1',
    	array(
			'default' => $productcatboxbg1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_boxbg1',
		array(
		    'label'   		=> __('Box 1 BG Color','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// productcat box 2 bg
	$productcatboxbg2 = esc_html__('#fbdd17 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_boxbg2',
    	array(
			'default' => $productcatboxbg2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_boxbg2',
		array(
		    'label'   		=> __('Box 2 BG Color','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// productcat box 3 bg
	$productcatboxbg3 = esc_html__('#ffdddb ', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_boxbg3',
    	array(
			'default' => $productcatboxbg3,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_boxbg3',
		array(
		    'label'   		=> __('Box 3 BG Color','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// productcat box 4 bg
	$productcatboxbg4 = esc_html__('#e5edef ', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_boxbg4',
    	array(
			'default' => $productcatboxbg4,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_boxbg4',
		array(
		    'label'   		=> __('Box 4 BG Color','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// productcat title color
	$productcattitlecolor = esc_html__('#000 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_titlecolor',
    	array(
			'default' => $productcattitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_titlecolor',
		array(
		    'label'   		=> __('Title Color','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// productcat title 1 bg
	$productcatboxtitle1 = esc_html__('#d6eca2 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_boxtitle1',
    	array(
			'default' => $productcatboxtitle1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_boxtitle1',
		array(
		    'label'   		=> __('Box 1 Title Color','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// productcat title 2 bg
	$productcatboxtitle2 = esc_html__('#fae97d ', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_boxtitle2',
    	array(
			'default' => $productcatboxtitle2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_boxtitle2',
		array(
		    'label'   		=> __('Box 2 Title Color','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// productcat title 3 bg
	$productcatboxtitle3 = esc_html__('#f97189 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_boxtitle3',
    	array(
			'default' => $productcatboxtitle3,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_boxtitle3',
		array(
		    'label'   		=> __('Box 3 Title Color','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// productcat title 4 bg
	$productcatboxtitle4 = esc_html__('#c9e3e9 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'productcat_boxtitle4',
    	array(
			'default' => $productcatboxtitle4,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'productcat_boxtitle4',
		array(
		    'label'   		=> __('Box 4 Title Color','bakery-store'),
		    'section'		=> 'productcat_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	/*=========================================
	Banner Section
	=========================================*/
	$wp_customize->add_section(
		'banner_setting', array(
			'title' => esc_html__( 'Banner Section', 'bakery-store' ),
			'priority' => 3,
			'panel' => 'bakerystore_frontpage_sections',
		)
	);


	$wp_customize->add_setting('bakerystore_reset_banner_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new bakerystore_Reset_Custom_Control($wp_customize, 'bakerystore_reset_banner_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset All Settings', 'bakery-store'),
	  'description' => 'bakerystore_banner_reset_settings',
	  'section' => 'banner_setting'
	)));
	

	$wp_customize->add_setting('bakerystore_banner_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new bakerystore_Tab_Control($wp_customize, 'bakerystore_banner_tabs', array(
	   'section' => 'banner_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'bakery-store'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'banner_text1',
            	'banner_btntextlink',
            	'banner_btntext',
            	'banner_text2',
            	'banner_btntext2',
            	'banner_btntextlink2'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'bakery-store'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'banner_titlecolor',
            	'banner_box1bgcolor',
            	'banner_box1btnbgcolor',
            	'banner_box2bgcolor',
            	'banner_box2btnbgcolor',
            	'banner_btntxtcolor'

            ),
     	)
    	),
	))); 


	// general setting

	// banner text 1
	$bannertext1 = esc_html__('Any Design For Your Feast Day', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_text1',
    	array(
			'default' => $bannertext1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'banner_text1',
		array(
		    'label'   		=> __('Banner 1 Text','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// banner button text 1
	$bannerbtntext = esc_html__('Make Order Now', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_btntext',
    	array(
			'default' => $bannerbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'banner_btntext',
		array(
		    'label'   		=> __('Banner 1 Btn Text','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// banner button text 1
	$bannerbtntextlink = esc_html__('#', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_btntextlink',
    	array(
			'default' => $bannerbtntextlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'banner_btntextlink',
		array(
		    'label'   		=> __('Banner 1 Btn Text Link','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// banner text 2
	$bannertext2 = esc_html__('Any Candy In Our Store', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_text2',
    	array(
			'default' => $bannertext2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'banner_text2',
		array(
		    'label'   		=> __('Banner 2 Text','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// banner button text 2
	$bannerbtntext2 = esc_html__('Make Order Now', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_btntext2',
    	array(
			'default' => $bannerbtntext2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'banner_btntext2',
		array(
		    'label'   		=> __('Banner 2 Btn Text','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// banner button text 2
	$bannerbtntextlink2 = esc_html__('#', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_btntextlink2',
    	array(
			'default' => $bannerbtntextlink2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'banner_btntextlink2',
		array(
		    'label'   		=> __('Banner 2 Btn Text Link','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Style setting

	// banner title
	$bannertitlecolor = esc_html__('#fff ', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_titlecolor',
    	array(
			'default' => $bannertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_titlecolor',
		array(
		    'label'   		=> __('Title Color','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner box1bg
	$bannerbox1bgcolor = esc_html__('#fbdd17 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_box1bgcolor',
    	array(
			'default' => $bannerbox1bgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_box1bgcolor',
		array(
		    'label'   		=> __('Box 1 BG Color','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner box1btnbg
	$bannerbox1btnbgcolor = esc_html__('#faee9c ', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_box1btnbgcolor',
    	array(
			'default' => $bannerbox1btnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_box1btnbgcolor',
		array(
		    'label'   		=> __('Box 1 Button BG Color','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// banner box2bg
	$bannerbox2bgcolor = esc_html__('#fa3759 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_box2bgcolor',
    	array(
			'default' => $bannerbox2bgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_box2bgcolor',
		array(
		    'label'   		=> __('Box 2 BG Color','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner box2btnbg
	$bannerbox2btnbgcolor = esc_html__('#fa6a83 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_box2btnbgcolor',
    	array(
			'default' => $bannerbox2btnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_box2btnbgcolor',
		array(
		    'label'   		=> __('Box 2 Button BG Color','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner btntxt
	$bannerbtntxtcolor = esc_html__('#000 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'banner_btntxtcolor',
    	array(
			'default' => $bannerbtntxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_btntxtcolor',
		array(
		    'label'   		=> __('Button Text Color','bakery-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	/*=========================================
	Popular Products Section
	=========================================*/
	$wp_customize->add_section(
		'popularproducts_setting', array(
			'title' => esc_html__( 'Popular Products Section', 'bakery-store' ),
			'priority' => 4,
			'panel' => 'bakerystore_frontpage_sections',
		)
	);


	$wp_customize->add_setting('bakerystore_reset_popularproducts_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new bakerystore_Reset_Custom_Control($wp_customize, 'bakerystore_reset_popularproducts_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset All Settings', 'bakery-store'),
	  'description' => 'bakerystore_popularproducts_reset_settings',
	  'section' => 'popularproducts_setting'
	)));
	

	$wp_customize->add_setting('bakerystore_popularproducts_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new bakerystore_Tab_Control($wp_customize, 'bakerystore_popularproducts_tabs', array(
	   'section' => 'popularproducts_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'bakery-store'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'popularproducts_heading'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'bakery-store'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'popularproducts_headingcolor',
            	'popularproducts_border1color',
            	'popularproducts_border2color',
            	'popularproducts_box1bgcolor',
            	'popularproducts_box2bgcolor',
            	'popularproducts_box3bgcolor',
            	'popularproducts_titlecolor',
            	'popularproducts_pricecolor',
            	'popularproducts_btnbgcolor',
            	'popularproducts_btn1txticoncolor',
            	'popularproducts_btn2txticoncolor',
            	'popularproducts_btn3txticoncolor'

            ),
     	)
	    
    	),
	))); 



	// popularproducts heading
	$popularproductsheading = esc_html__('Popular Products', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_heading',
    	array(
			'default' => $popularproductsheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_heading',
		array(
		    'label'   		=> __('Heading','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts heading
	$popularproductsheadingcolor = esc_html__('#000 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_headingcolor',
    	array(
			'default' => $popularproductsheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_headingcolor',
		array(
		    'label'   		=> __('Heading Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts border1
	$popularproductsborder1color = esc_html__('#bb8fe7 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_border1color',
    	array(
			'default' => $popularproductsborder1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_border1color',
		array(
		    'label'   		=> __('Border 1 Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts border2
	$popularproductsborder2color = esc_html__('#fcf900 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_border2color',
    	array(
			'default' => $popularproductsborder2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_border2color',
		array(
		    'label'   		=> __('Border 2 Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts box1bg
	$popularproductsbox1bgcolor = esc_html__('#fb3c5e ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_box1bgcolor',
    	array(
			'default' => $popularproductsbox1bgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_box1bgcolor',
		array(
		    'label'   		=> __('Box 1 BG Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts box2bg
	$popularproductsbox2bgcolor = esc_html__('#71a006 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_box2bgcolor',
    	array(
			'default' => $popularproductsbox2bgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_box2bgcolor',
		array(
		    'label'   		=> __('Box 2 BG Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts box3bg
	$popularproductsbox3bgcolor = esc_html__('#fddd19 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_box3bgcolor',
    	array(
			'default' => $popularproductsbox3bgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_box3bgcolor',
		array(
		    'label'   		=> __('Box 3 BG Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// popularproducts title
	$popularproductstitlecolor = esc_html__('#fff ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_titlecolor',
    	array(
			'default' => $popularproductstitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_titlecolor',
		array(
		    'label'   		=> __('Title Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts price
	$popularproductspricecolor = esc_html__('#fff ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_pricecolor',
    	array(
			'default' => $popularproductspricecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_pricecolor',
		array(
		    'label'   		=> __('Price Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts btnbg
	$popularproductsbtnbgcolor = esc_html__('#fff ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_btnbgcolor',
    	array(
			'default' => $popularproductsbtnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_btnbgcolor',
		array(
		    'label'   		=> __('Button BG Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts btn1txticon
	$popularproductsbtn1txticoncolor = esc_html__('#fb3c5e ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_btn1txticoncolor',
    	array(
			'default' => $popularproductsbtn1txticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_btn1txticoncolor',
		array(
		    'label'   		=> __('Button 1 Text & Icon Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts btn2txticon
	$popularproductsbtn2txticoncolor = esc_html__('#71a006 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_btn2txticoncolor',
    	array(
			'default' => $popularproductsbtn2txticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_btn2txticoncolor',
		array(
		    'label'   		=> __('Button 2 Text & Icon Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts btn3txticon
	$popularproductsbtn3txticoncolor = esc_html__('#fddd19 ', 'bakery-store' );
	$wp_customize->add_setting(
    	'popularproducts_btn3txticoncolor',
    	array(
			'default' => $popularproductsbtn3txticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_btn3txticoncolor',
		array(
		    'label'   		=> __('Button 3 Text & Icon Color','bakery-store'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	$wp_customize->register_control_type('bakerystore_Tab_Control');

}

add_action( 'customize_register', 'bakerystore_blog_setting' );

// service selective refresh
function bakerystore_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'bakerystore_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'bakerystore_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'bakerystore_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'bakerystore_blog_section_partials' );

// blog_title
function bakerystore_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function bakerystore_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function bakerystore_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


