<?php
function bakerystore_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'bakery-store'),
		) 
	);

	
	/*=========================================
	Bakery Store Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','bakery-store'),
			'panel'  		=> 'header_section',
		)
    );


	

	// topheader Logo Width
    $wp_customize->add_setting('topheader_logowidth',array(
        'default' => 100,
        'sanitize_callback' => 'bakerystore_sanitize_float'
    ));
    $wp_customize->add_control(new bakerystore_Custom_Control( $wp_customize, 'topheader_logowidth',array(
	    'label' => __('Logo Width','bakery-store'),
	    'section' => 'title_tagline',
	    'input_attrs' => array(
	            'min' => 0,
	            'max' => 500,
	            'step' => 1,
	        ),
    )));


    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','bakery-store'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','bakery-store'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Bakery Store header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','bakery-store'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('bakerystore_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new bakerystore_Reset_Custom_Control($wp_customize, 'bakerystore_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'bakery-store'),
	  'description' => 'bakerystore_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('bakerystore_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new bakerystore_Tab_Control($wp_customize, 'bakerystore_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'bakery-store'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
            	'topheader_phoneicon',
            	'topheader_phonetext',
            	'topheader_btntext',
            	'topheader_btntextlink'

            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'bakery-store'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'header_bgcolor',
            	'header_phniconcolor',
            	'header_phntxtcolor',
            	'header_carticoncolor',
            	'header_carttextcolor',
            	'header_carttxtbgcolor',
            	'header_btnbgcolor',
            	'header_btntxtcolor',
            	'header_bordercolor'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'bakerystore_switch_sanitization'
   	) );
   	$wp_customize->add_control( new bakerystore_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','bakery-store' ),
        'section' => 'top_header'
   	)));


    // topheader icon 1
	$topheaderphoneicon = esc_html__('fa fa-phone', 'bakery-store' );
	$wp_customize->add_setting(
    	'topheader_phoneicon',
    	array(
			'default' => $topheaderphoneicon,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'topheader_phoneicon',
		array(
		    'label'   		=> __('Phone Icon','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);



	// topheader text 1
	$topheaderphonetext = esc_html__('+91 802 9329 222', 'bakery-store' );
	$wp_customize->add_setting(
    	'topheader_phonetext',
    	array(
			'default' => $topheaderphonetext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_phonetext',
		array(
		    'label'   		=> __('Phone Text','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// btn text
	$topheaderbtntext = esc_html__('My Account', 'bakery-store' );
	$wp_customize->add_setting(
    	'topheader_btntext',
    	array( 
			'default' => $topheaderbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntext',
		array(
		    'label'   		=> __('Button Text','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// btn textlink
	$topheaderbtntextlink = esc_html__('#', 'bakery-store' );
	$wp_customize->add_setting(
    	'topheader_btntextlink',
    	array(
			'default' => $topheaderbtntextlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntextlink',
		array(
		    'label'   		=> __('Button Text Link','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting

	// header bg Color
	$headerbgcolor = esc_html__('#BB8FE8', 'bakery-store' );
	$wp_customize->add_setting(
    	'header_bgcolor',
    	array(
			'default' => $headerbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bgcolor',
		array(
		    'label'   		=> __('BG Color','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header phnicon Color
	$headerphniconcolor = esc_html__('#FBFA02', 'bakery-store' );
	$wp_customize->add_setting(
    	'header_phniconcolor',
    	array(
			'default' => $headerphniconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_phniconcolor',
		array(
		    'label'   		=> __('Phone Icon Color','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header phntxt Color
	$headerphntxtcolor = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'header_phntxtcolor',
    	array(
			'default' => $headerphntxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_phntxtcolor',
		array(
		    'label'   		=> __('Phone Text Color','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header cart icon Color
	$headercarticoncolor = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'header_carticoncolor',
    	array(
			'default' => $headercarticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_carticoncolor',
		array(
		    'label'   		=> __('Cart Icon Color','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header carttext Color
	$headercarttextcolor = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'header_carttextcolor',
    	array(
			'default' => $headercarttextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_carttextcolor',
		array(
		    'label'   		=> __('Cart Text Color','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header carttxtbg Color
	$headercarttxtbgcolor = esc_html__('#FD67BE', 'bakery-store' );
	$wp_customize->add_setting(
    	'header_carttxtbgcolor',
    	array(
			'default' => $headercarttxtbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_carttxtbgcolor',
		array(
		    'label'   		=> __('Cart Text BG Color','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btnbg Color
	$headerbtnbgcolor = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'header_btnbgcolor',
    	array(
			'default' => $headerbtnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbgcolor',
		array(
		    'label'   		=> __('Button BG Color','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btntxt Color
	$headerbtntxtcolor = esc_html__('#000', 'bakery-store' );
	$wp_customize->add_setting(
    	'header_btntxtcolor',
    	array(
			'default' => $headerbtntxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxtcolor',
		array(
		    'label'   		=> __('Button Text Color','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header border Color
	$headerbordercolor = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'header_bordercolor',
    	array(
			'default' => $headerbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bordercolor',
		array(
		    'label'   		=> __('Border Color','bakery-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);




	$wp_customize->register_control_type('bakerystore_Tab_Control');
	$wp_customize->register_panel_type( 'bakerystore_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'bakerystore_WP_Customize_Section' );



	

}
add_action( 'customize_register', 'bakerystore_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class bakerystore_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'bakerystore_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class bakerystore_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'bakerystore_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






