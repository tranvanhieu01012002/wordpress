<?php
	
	/*-----------------------First highlight color-------------------*/

	$vw_pet_shop_first_color = get_theme_mod('vw_pet_shop_first_color');

	$vw_pet_shop_custom_css = '';

	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='.sidebar .tagcloud a:hover,.pagination span, .pagination a,.search-box button, .logo_outer, input[type="submit"], .slider .carousel-control-prev-icon i:hover, .slider .carousel-control-next-icon i:hover, .slider .more-btn a:hover, .woocommerce span.onsale:hover, .scrollup i, .sidebar .custom-social-icons a i:hover, .footer .custom-social-icons a i:hover, .sidebar input[type="submit"], .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button, .woocommerce-page .woocommerce-error .button, .woocommerce-page .woocommerce-info .button, .woocommerce-page .woocommerce-message .button, .hvr-sweep-to-right:before, .yearwrap, .woocommerce a.remove:hover, .footer .widget_price_filter .ui-slider .ui-slider-range, .footer .widget_price_filter .ui-slider .ui-slider-handle, .footer .woocommerce-product-search button, .sidebar .woocommerce-product-search button, .sidebar .widget_price_filter .ui-slider .ui-slider-range, .sidebar .widget_price_filter .ui-slider .ui-slider-handle, .footer a.custom_read_more:hover, .sidebar a.custom_read_more:hover, .toggle-nav i, .woocommerce nav.woocommerce-pagination ul li a, .nav-previous a, .nav-next a, .footer .wp-block-search .wp-block-search__button, .sidebar .wp-block-search .wp-block-search__button{';
			$vw_pet_shop_custom_css .='background-color: '.esc_attr($vw_pet_shop_first_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='#comments input[type="submit"].submit{';
			$vw_pet_shop_custom_css .='background-color: '.esc_attr($vw_pet_shop_first_color).'!important;';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='.sidebar td#prev a,.sidebar td,.sidebar caption,.sidebar th,a, .footer h3, .sidebar h3, .woocommerce-message::before, .blogbutton-small, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .footer li a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a , a.button, .logo-responsive p.site-title a, .logo-responsive h1.site-title a, .footer a.custom_read_more, .sidebar a.custom_read_more, .sidebar ul li a:hover, .post-main-box:hover h2 a, .post-main-box:hover .metabox a, .metabox:hover a, nav.woocommerce-MyAccount-navigation ul li a:hover, .contact_details ul li span a:hover, .slider .inner_carousel h1 a:hover, .footer .wp-block-search .wp-block-search__label, .sidebar .wp-block-search .wp-block-search__label, .entry-summary a{';
			$vw_pet_shop_custom_css .='color: '.esc_attr($vw_pet_shop_first_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='.woocommerce a.remove{';
			$vw_pet_shop_custom_css .='color: '.esc_attr($vw_pet_shop_first_color).'!important;';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='.footer .tagcloud a:hover,.blogbutton-small, a.button, .footer a.custom_read_more, .sidebar a.custom_read_more, .loader-line{';
			$vw_pet_shop_custom_css .='border-color: '.esc_attr($vw_pet_shop_first_color).'!important;';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='.logo_outer:after, .woocommerce-message{';
			$vw_pet_shop_custom_css .='border-top-color: '.esc_attr($vw_pet_shop_first_color).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*-------------------Second highlight color-------------------*/

	$vw_pet_shop_second_color = get_theme_mod('vw_pet_shop_second_color');

	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='.pagination a:hover,.pagination .current,.top_bar, .slider .carousel-control-prev-icon i, .slider .carousel-control-next-icon i, .slider .more-btn a, .woocommerce span.onsale, .woocommerce ul.products li.product .button, .sidebar .custom-social-icons a i, .footer .custom-social-icons a i, .footer-2, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, nav.woocommerce-MyAccount-navigation ul li, .date-monthwrap, #comments a.comment-reply-link, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .nav-previous a:hover, .nav-next a:hover, #preloader{';
			$vw_pet_shop_custom_css .='background-color: '.esc_attr($vw_pet_shop_second_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='.sidebar ul li::before, .sidebar ul.cart_list li::before, .sidebar ul.product_list_widget li::before{';
			$vw_pet_shop_custom_css .='background-color: '.esc_attr($vw_pet_shop_second_color).'!important;';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='#header .main-navigation ul a:hover, #header .logo .site-title a:hover{';
			$vw_pet_shop_custom_css .='color: '.esc_attr($vw_pet_shop_second_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='.woocommerce li.product{';
			$vw_pet_shop_custom_css .='border-color: '.esc_attr($vw_pet_shop_second_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='.main-navigation ul ul{';
			$vw_pet_shop_custom_css .='border-top-color: '.esc_attr($vw_pet_shop_second_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='.main-navigation ul ul{';
			$vw_pet_shop_custom_css .='border-bottom-color: '.esc_attr($vw_pet_shop_second_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	
	/*---------------------------Width Layout -------------------*/

	$vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_width_option','Full Width');
    if($vw_pet_shop_theme_lay == 'Boxed'){
		$vw_pet_shop_custom_css .='body{';
			$vw_pet_shop_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.scrollup i{';
		  $vw_pet_shop_custom_css .='right: 100px;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.scrollup.left i{';
		  $vw_pet_shop_custom_css .='left: 100px;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Wide Width'){
		$vw_pet_shop_custom_css .='body{';
			$vw_pet_shop_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.scrollup i{';
		  $vw_pet_shop_custom_css .='right: 30px;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.scrollup.left i{';
		  $vw_pet_shop_custom_css .='left: 30px;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Full Width'){
		$vw_pet_shop_custom_css .='body{';
			$vw_pet_shop_custom_css .='max-width: 100%;';
		$vw_pet_shop_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_slider_opacity_color','0.5');
	if($vw_pet_shop_theme_lay == '0'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.1'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.1';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.2'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.2';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.3'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.3';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.4'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.4';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.5'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.5';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.6'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.6';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.7'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.7';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.8'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.8';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.9'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.9';
		$vw_pet_shop_custom_css .='}';
		}

	/*-------------------Slider Content Layout -------------------*/

	$vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_slider_content_option','Left');
    if($vw_pet_shop_theme_lay == 'Left'){
		$vw_pet_shop_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$vw_pet_shop_custom_css .='text-align:left; left:17%; right:45%;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Center'){
		$vw_pet_shop_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$vw_pet_shop_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Right'){
		$vw_pet_shop_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$vw_pet_shop_custom_css .='text-align:right; left:45%; right:17%;';
		$vw_pet_shop_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_pet_shop_slider_content_padding_top_bottom = get_theme_mod('vw_pet_shop_slider_content_padding_top_bottom');
	$vw_pet_shop_slider_content_padding_left_right = get_theme_mod('vw_pet_shop_slider_content_padding_left_right');
	if($vw_pet_shop_slider_content_padding_top_bottom != false || $vw_pet_shop_slider_content_padding_left_right != false){
		$vw_pet_shop_custom_css .='.slider .carousel-caption{';
			$vw_pet_shop_custom_css .='top: '.esc_attr($vw_pet_shop_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_pet_shop_slider_content_padding_top_bottom).';left: '.esc_attr($vw_pet_shop_slider_content_padding_left_right).';right: '.esc_attr($vw_pet_shop_slider_content_padding_left_right).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_pet_shop_slider_height = get_theme_mod('vw_pet_shop_slider_height');
	if($vw_pet_shop_slider_height != false){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='height: '.esc_attr($vw_pet_shop_slider_height).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_blog_layout_option','Default');
    if($vw_pet_shop_theme_lay == 'Default'){
		$vw_pet_shop_custom_css .='.post-main-box{';
			$vw_pet_shop_custom_css .='';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.post-main-box h2{';
			$vw_pet_shop_custom_css .='padding:0;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.new-text p{';
			$vw_pet_shop_custom_css .='margin-top:10px;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.blogbutton-small{';
			$vw_pet_shop_custom_css .='margin: 0; display: inline-block;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Center'){
		$vw_pet_shop_custom_css .='.post-main-box, .post-main-box h2, .new-text p, .metabox, .content-bttn{';
			$vw_pet_shop_custom_css .='text-align:center;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.new-text p{';
			$vw_pet_shop_custom_css .='margin-top:0;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.metabox{';
			$vw_pet_shop_custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.blogbutton-small{';
			$vw_pet_shop_custom_css .='margin: 0; display: inline-block;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Left'){
		$vw_pet_shop_custom_css .='.post-main-box, .post-main-box h2, .new-text p, .content-bttn{';
			$vw_pet_shop_custom_css .='text-align:Left;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.metabox{';
			$vw_pet_shop_custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$vw_pet_shop_custom_css .='}';
	}

	/*------------Responsive Media -----------------------*/

	$vw_pet_shop_resp_topbar = get_theme_mod( 'vw_pet_shop_resp_topbar_hide_show',false);
	if($vw_pet_shop_resp_topbar == true && get_theme_mod( 'vw_pet_shop_topbar_hide_show', false) == false){
    	$vw_pet_shop_custom_css .='.top_bar{';
			$vw_pet_shop_custom_css .='display:none;';
		$vw_pet_shop_custom_css .='} ';
	}
    if($vw_pet_shop_resp_topbar == true){
    	$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.top_bar{';
			$vw_pet_shop_custom_css .='display:block;';
		$vw_pet_shop_custom_css .='} }';
	}else if($vw_pet_shop_resp_topbar == false){
		$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.top_bar{';
			$vw_pet_shop_custom_css .='display:none;';
		$vw_pet_shop_custom_css .='} }';
	}

	$vw_pet_shop_resp_stickyheader = get_theme_mod( 'vw_pet_shop_stickyheader_hide_show',false);
	if($vw_pet_shop_resp_stickyheader == true && get_theme_mod( 'vw_pet_shop_sticky_header',false) != true){
    	$vw_pet_shop_custom_css .='.header-fixed{';
			$vw_pet_shop_custom_css .='position:static;';
		$vw_pet_shop_custom_css .='} ';
	}
    if($vw_pet_shop_resp_stickyheader == true){
    	$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.header-fixed{';
			$vw_pet_shop_custom_css .='position:fixed;';
		$vw_pet_shop_custom_css .='} }';
	}else if($vw_pet_shop_resp_stickyheader == false){
		$vw_pet_shop_custom_css .='@media screen and (max-width:575px){';
		$vw_pet_shop_custom_css .='.header-fixed{';
			$vw_pet_shop_custom_css .='position:static;';
		$vw_pet_shop_custom_css .='} }';
	}

	$vw_pet_shop_resp_slider = get_theme_mod( 'vw_pet_shop_resp_slider_hide_show',false);
	if($vw_pet_shop_resp_slider == true && get_theme_mod( 'vw_pet_shop_slider_hide_show', false) == false){
    	$vw_pet_shop_custom_css .='.slider{';
			$vw_pet_shop_custom_css .='display:none;';
		$vw_pet_shop_custom_css .='} ';
	}
    if($vw_pet_shop_resp_slider == true){
    	$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.slider{';
			$vw_pet_shop_custom_css .='display:block;';
		$vw_pet_shop_custom_css .='} }';
	}else if($vw_pet_shop_resp_slider == false){
		$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.slider{';
			$vw_pet_shop_custom_css .='display:none;';
		$vw_pet_shop_custom_css .='} }';
	}

	$vw_pet_shop_resp_sidebar = get_theme_mod( 'vw_pet_shop_sidebar_hide_show',true);
    if($vw_pet_shop_resp_sidebar == true){
    	$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.sidebar{';
			$vw_pet_shop_custom_css .='display:block;';
		$vw_pet_shop_custom_css .='} }';
	}else if($vw_pet_shop_resp_sidebar == false){
		$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.sidebar{';
			$vw_pet_shop_custom_css .='display:none;';
		$vw_pet_shop_custom_css .='} }';
	}

	$vw_pet_shop_resp_scroll_top = get_theme_mod( 'vw_pet_shop_resp_scroll_top_hide_show',true);
	if($vw_pet_shop_resp_scroll_top == true && get_theme_mod( 'vw_pet_shop_hide_show_scroll',true) != true){
    	$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='visibility:hidden !important;';
		$vw_pet_shop_custom_css .='} ';
	}
    if($vw_pet_shop_resp_scroll_top == true){
    	$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='visibility:visible !important;';
		$vw_pet_shop_custom_css .='} }';
	}else if($vw_pet_shop_resp_scroll_top == false){
		$vw_pet_shop_custom_css .='@media screen and (max-width:575px){';
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='visibility:hidden !important;';
		$vw_pet_shop_custom_css .='} }';
	}

	$vw_pet_shop_resp_menu_toggle_btn_bg_color = get_theme_mod('vw_pet_shop_resp_menu_toggle_btn_bg_color');
	if($vw_pet_shop_resp_menu_toggle_btn_bg_color != false){
		$vw_pet_shop_custom_css .='.toggle-nav i{';
			$vw_pet_shop_custom_css .='background-color: '.esc_attr($vw_pet_shop_resp_menu_toggle_btn_bg_color).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_pet_shop_topbar_padding_top_bottom = get_theme_mod('vw_pet_shop_topbar_padding_top_bottom');
	if($vw_pet_shop_topbar_padding_top_bottom != false){
		$vw_pet_shop_custom_css .='.top_bar{';
			$vw_pet_shop_custom_css .='padding-top: '.esc_attr($vw_pet_shop_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_pet_shop_topbar_padding_top_bottom).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_navigation_menu_font_size = get_theme_mod('vw_pet_shop_navigation_menu_font_size');
	if($vw_pet_shop_navigation_menu_font_size != false){
		$vw_pet_shop_custom_css .='.main-navigation a{';
			$vw_pet_shop_custom_css .='font-size: '.esc_attr($vw_pet_shop_navigation_menu_font_size).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_nav_menus_font_weight = get_theme_mod( 'vw_pet_shop_navigation_menu_font_weight','Default');
    if($vw_pet_shop_nav_menus_font_weight == 'Default'){
		$vw_pet_shop_custom_css .='.main-navigation a{';
			$vw_pet_shop_custom_css .='';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_nav_menus_font_weight == 'Normal'){
		$vw_pet_shop_custom_css .='.main-navigation a{';
			$vw_pet_shop_custom_css .='font-weight: normal;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_header_menus_color = get_theme_mod('vw_pet_shop_header_menus_color');
	if($vw_pet_shop_header_menus_color != false){
		$vw_pet_shop_custom_css .='.main-navigation a{';
			$vw_pet_shop_custom_css .='color: '.esc_attr($vw_pet_shop_header_menus_color).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_header_menus_hover_color = get_theme_mod('vw_pet_shop_header_menus_hover_color');
	if($vw_pet_shop_header_menus_hover_color != false){
		$vw_pet_shop_custom_css .='.main-navigation a:hover{';
			$vw_pet_shop_custom_css .='color: '.esc_attr($vw_pet_shop_header_menus_hover_color).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_header_submenus_color = get_theme_mod('vw_pet_shop_header_submenus_color');
	if($vw_pet_shop_header_submenus_color != false){
		$vw_pet_shop_custom_css .='.main-navigation ul ul a{';
			$vw_pet_shop_custom_css .='color: '.esc_attr($vw_pet_shop_header_submenus_color).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_header_submenus_hover_color = get_theme_mod('vw_pet_shop_header_submenus_hover_color');
	if($vw_pet_shop_header_submenus_hover_color != false){
		$vw_pet_shop_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vw_pet_shop_custom_css .='color: '.esc_attr($vw_pet_shop_header_submenus_hover_color).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_pet_shop_sticky_header_padding = get_theme_mod('vw_pet_shop_sticky_header_padding');
	if($vw_pet_shop_sticky_header_padding != false){
		$vw_pet_shop_custom_css .='.header-fixed{';
			$vw_pet_shop_custom_css .='padding: '.esc_attr($vw_pet_shop_sticky_header_padding).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_pet_shop_search_padding_top_bottom = get_theme_mod('vw_pet_shop_search_padding_top_bottom');
	$vw_pet_shop_search_padding_left_right = get_theme_mod('vw_pet_shop_search_padding_left_right');
	$vw_pet_shop_search_font_size = get_theme_mod('vw_pet_shop_search_font_size');
	$vw_pet_shop_search_border_radius = get_theme_mod('vw_pet_shop_search_border_radius');
	if($vw_pet_shop_search_padding_top_bottom != false || $vw_pet_shop_search_padding_left_right != false || $vw_pet_shop_search_font_size != false || $vw_pet_shop_search_border_radius != false){
		$vw_pet_shop_custom_css .='.contact_details ul li.search-box span, .search-box span i{';
			$vw_pet_shop_custom_css .='padding-top: '.esc_attr($vw_pet_shop_search_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_pet_shop_search_padding_top_bottom).';padding-left: '.esc_attr($vw_pet_shop_search_padding_left_right).';padding-right: '.esc_attr($vw_pet_shop_search_padding_left_right).';font-size: '.esc_attr($vw_pet_shop_search_font_size).';border-radius: '.esc_attr($vw_pet_shop_search_border_radius).'px;';
		$vw_pet_shop_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_pet_shop_button_padding_top_bottom = get_theme_mod('vw_pet_shop_button_padding_top_bottom');
	$vw_pet_shop_button_padding_left_right = get_theme_mod('vw_pet_shop_button_padding_left_right');
	if($vw_pet_shop_button_padding_top_bottom != false || $vw_pet_shop_button_padding_left_right != false){
		$vw_pet_shop_custom_css .='.blogbutton-small{';
			$vw_pet_shop_custom_css .='padding-top: '.esc_attr($vw_pet_shop_button_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_pet_shop_button_padding_top_bottom).';padding-left: '.esc_attr($vw_pet_shop_button_padding_left_right).';padding-right: '.esc_attr($vw_pet_shop_button_padding_left_right).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_button_border_radius = get_theme_mod('vw_pet_shop_button_border_radius');
	if($vw_pet_shop_button_border_radius != false){
		$vw_pet_shop_custom_css .='.blogbutton-small,.hvr-sweep-to-right:before{';
			$vw_pet_shop_custom_css .='border-radius: '.esc_attr($vw_pet_shop_button_border_radius).'px;';
		$vw_pet_shop_custom_css .='}';
	}

	/*------------- Single Blog Page------------------*/

	$vw_pet_shop_featured_image_border_radius = get_theme_mod('vw_pet_shop_featured_image_border_radius', 0);
	if($vw_pet_shop_featured_image_border_radius != false){
		$vw_pet_shop_custom_css .='.box-image img, .feature-box img{';
			$vw_pet_shop_custom_css .='border-radius: '.esc_attr($vw_pet_shop_featured_image_border_radius).'px;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_featured_image_box_shadow = get_theme_mod('vw_pet_shop_featured_image_box_shadow',0);
	if($vw_pet_shop_featured_image_box_shadow != false){
		$vw_pet_shop_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$vw_pet_shop_custom_css .='box-shadow: '.esc_attr($vw_pet_shop_featured_image_box_shadow).'px '.esc_attr($vw_pet_shop_featured_image_box_shadow).'px '.esc_attr($vw_pet_shop_featured_image_box_shadow).'px #cccccc;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_single_blog_post_navigation_show_hide = get_theme_mod('vw_pet_shop_single_blog_post_navigation_show_hide',true);
	if($vw_pet_shop_single_blog_post_navigation_show_hide != true){
		$vw_pet_shop_custom_css .='.post-navigation{';
			$vw_pet_shop_custom_css .='display: none;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_single_blog_comment_title = get_theme_mod('vw_pet_shop_single_blog_comment_title', 'Leave a Reply');
	if($vw_pet_shop_single_blog_comment_title == ''){
		$vw_pet_shop_custom_css .='#comments h2#reply-title {';
			$vw_pet_shop_custom_css .='display: none;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_single_blog_comment_button_text = get_theme_mod('vw_pet_shop_single_blog_comment_button_text', 'Post Comment');
	if($vw_pet_shop_single_blog_comment_button_text == ''){
		$vw_pet_shop_custom_css .='#comments p.form-submit {';
			$vw_pet_shop_custom_css .='display: none;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_comment_width = get_theme_mod('vw_pet_shop_single_blog_comment_width');
	if($vw_pet_shop_comment_width != false){
		$vw_pet_shop_custom_css .='#comments textarea{';
			$vw_pet_shop_custom_css .='width: '.esc_attr($vw_pet_shop_comment_width).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_pet_shop_footer_background_color = get_theme_mod('vw_pet_shop_footer_background_color');
	if($vw_pet_shop_footer_background_color != false){
		$vw_pet_shop_custom_css .='.footer{';
			$vw_pet_shop_custom_css .='background-color: '.esc_attr($vw_pet_shop_footer_background_color).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_copyright_font_size = get_theme_mod('vw_pet_shop_copyright_font_size');
	if($vw_pet_shop_copyright_font_size != false){
		$vw_pet_shop_custom_css .='.copyright p{';
			$vw_pet_shop_custom_css .='font-size: '.esc_attr($vw_pet_shop_copyright_font_size).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_copyright_alingment = get_theme_mod('vw_pet_shop_copyright_alingment');
	if($vw_pet_shop_copyright_alingment != false){
		$vw_pet_shop_custom_css .='.copyright p{';
			$vw_pet_shop_custom_css .='text-align: '.esc_attr($vw_pet_shop_copyright_alingment).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_copyright_padding_top_bottom = get_theme_mod('vw_pet_shop_copyright_padding_top_bottom');
	if($vw_pet_shop_copyright_padding_top_bottom != false){
		$vw_pet_shop_custom_css .='.footer-2{';
			$vw_pet_shop_custom_css .='padding-top: '.esc_attr($vw_pet_shop_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_pet_shop_copyright_padding_top_bottom).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_pet_shop_scroll_to_top_font_size = get_theme_mod('vw_pet_shop_scroll_to_top_font_size');
	if($vw_pet_shop_scroll_to_top_font_size != false){
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='font-size: '.esc_attr($vw_pet_shop_scroll_to_top_font_size).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_scroll_to_top_padding = get_theme_mod('vw_pet_shop_scroll_to_top_padding');
	$vw_pet_shop_scroll_to_top_padding = get_theme_mod('vw_pet_shop_scroll_to_top_padding');
	if($vw_pet_shop_scroll_to_top_padding != false){
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='padding-top: '.esc_attr($vw_pet_shop_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_pet_shop_scroll_to_top_padding).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_scroll_to_top_width = get_theme_mod('vw_pet_shop_scroll_to_top_width');
	if($vw_pet_shop_scroll_to_top_width != false){
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='width: '.esc_attr($vw_pet_shop_scroll_to_top_width).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_scroll_to_top_height = get_theme_mod('vw_pet_shop_scroll_to_top_height');
	if($vw_pet_shop_scroll_to_top_height != false){
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='height: '.esc_attr($vw_pet_shop_scroll_to_top_height).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_scroll_to_top_border_radius = get_theme_mod('vw_pet_shop_scroll_to_top_border_radius');
	if($vw_pet_shop_scroll_to_top_border_radius != false){
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='border-radius: '.esc_attr($vw_pet_shop_scroll_to_top_border_radius).'px;';
		$vw_pet_shop_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_pet_shop_social_icon_font_size = get_theme_mod('vw_pet_shop_social_icon_font_size');
	if($vw_pet_shop_social_icon_font_size != false){
		$vw_pet_shop_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_pet_shop_custom_css .='font-size: '.esc_attr($vw_pet_shop_social_icon_font_size).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_social_icon_padding = get_theme_mod('vw_pet_shop_social_icon_padding');
	if($vw_pet_shop_social_icon_padding != false){
		$vw_pet_shop_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_pet_shop_custom_css .='padding: '.esc_attr($vw_pet_shop_social_icon_padding).'!important;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_social_icon_width = get_theme_mod('vw_pet_shop_social_icon_width');
	if($vw_pet_shop_social_icon_width != false){
		$vw_pet_shop_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_pet_shop_custom_css .='width: '.esc_attr($vw_pet_shop_social_icon_width).'!important;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_social_icon_height = get_theme_mod('vw_pet_shop_social_icon_height');
	if($vw_pet_shop_social_icon_height != false){
		$vw_pet_shop_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_pet_shop_custom_css .='height: '.esc_attr($vw_pet_shop_social_icon_height).'!important;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_social_icon_border_radius = get_theme_mod('vw_pet_shop_social_icon_border_radius');
	if($vw_pet_shop_social_icon_border_radius != false){
		$vw_pet_shop_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_pet_shop_custom_css .='border-radius: '.esc_attr($vw_pet_shop_social_icon_border_radius).'px;';
		$vw_pet_shop_custom_css .='}';
	}

	/*---------------- Title Background Image ------------------*/

	$vw_pet_shop_title_background_image = get_theme_mod('vw_pet_shop_title_background_image');
	if($vw_pet_shop_title_background_image != false){
		$vw_pet_shop_custom_css .='.title-box{';
			$vw_pet_shop_custom_css .='background: url('.esc_attr($vw_pet_shop_title_background_image).');';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.title-box{';
			$vw_pet_shop_custom_css .='background-size: 100% 100%;';
		$vw_pet_shop_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_pet_shop_products_padding_top_bottom = get_theme_mod('vw_pet_shop_products_padding_top_bottom');
	if($vw_pet_shop_products_padding_top_bottom != false){
		$vw_pet_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_pet_shop_custom_css .='padding-top: '.esc_attr($vw_pet_shop_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_pet_shop_products_padding_top_bottom).'!important;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_products_padding_left_right = get_theme_mod('vw_pet_shop_products_padding_left_right');
	if($vw_pet_shop_products_padding_left_right != false){
		$vw_pet_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_pet_shop_custom_css .='padding-left: '.esc_attr($vw_pet_shop_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_pet_shop_products_padding_left_right).'!important;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_products_box_shadow = get_theme_mod('vw_pet_shop_products_box_shadow');
	if($vw_pet_shop_products_box_shadow != false){
		$vw_pet_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_pet_shop_custom_css .='box-shadow: '.esc_attr($vw_pet_shop_products_box_shadow).'px '.esc_attr($vw_pet_shop_products_box_shadow).'px '.esc_attr($vw_pet_shop_products_box_shadow).'px #ddd;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_products_border_radius = get_theme_mod('vw_pet_shop_products_border_radius', 0);
	if($vw_pet_shop_products_border_radius != false){
		$vw_pet_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_pet_shop_custom_css .='border-radius: '.esc_attr($vw_pet_shop_products_border_radius).'px;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_products_button_border_radius = get_theme_mod('vw_pet_shop_products_button_border_radius', 30);
	if($vw_pet_shop_products_button_border_radius != false){
		$vw_pet_shop_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$vw_pet_shop_custom_css .='border-radius: '.esc_attr($vw_pet_shop_products_button_border_radius).'px;';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_woocommerce_sale_position = get_theme_mod( 'vw_pet_shop_woocommerce_sale_position','left');
    if($vw_pet_shop_woocommerce_sale_position == 'left'){
		$vw_pet_shop_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_pet_shop_custom_css .='left: 0px; right: auto; border-radius: 0px 4px 25px 4px;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_woocommerce_sale_position == 'right'){
		$vw_pet_shop_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_pet_shop_custom_css .='left: auto; right: 0; border-radius: 4px 0px 4px 25px;';
		$vw_pet_shop_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	// Site title Font Size
	$vw_pet_shop_site_title_font_size = get_theme_mod('vw_pet_shop_site_title_font_size');
	if($vw_pet_shop_site_title_font_size != false){
		$vw_pet_shop_custom_css .='#header .logo h1 a, #header .logo p.site-title a{';
			$vw_pet_shop_custom_css .='font-size: '.esc_attr($vw_pet_shop_site_title_font_size).';';
		$vw_pet_shop_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_pet_shop_site_tagline_font_size = get_theme_mod('vw_pet_shop_site_tagline_font_size');
	if($vw_pet_shop_site_tagline_font_size != false){
		$vw_pet_shop_custom_css .='#header .logo p.site-description{';
			$vw_pet_shop_custom_css .='font-size: '.esc_attr($vw_pet_shop_site_tagline_font_size).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_logo_padding = get_theme_mod('vw_pet_shop_logo_padding');
	if($vw_pet_shop_logo_padding != false){
		$vw_pet_shop_custom_css .='.admin-bar #header .logo{';
			$vw_pet_shop_custom_css .='padding: '.esc_attr($vw_pet_shop_logo_padding).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_logo_margin = get_theme_mod('vw_pet_shop_logo_margin');
	if($vw_pet_shop_logo_margin != false){
		$vw_pet_shop_custom_css .='.admin-bar #header .logo{';
			$vw_pet_shop_custom_css .='margin: '.esc_attr($vw_pet_shop_logo_margin).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$vw_pet_shop_preloader_bg_color = get_theme_mod('vw_pet_shop_preloader_bg_color');
	if($vw_pet_shop_preloader_bg_color != false){
		$vw_pet_shop_custom_css .='#preloader{';
			$vw_pet_shop_custom_css .='background-color: '.esc_attr($vw_pet_shop_preloader_bg_color).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_preloader_border_color = get_theme_mod('vw_pet_shop_preloader_border_color');
	if($vw_pet_shop_preloader_border_color != false){
		$vw_pet_shop_custom_css .='.loader-line{';
			$vw_pet_shop_custom_css .='border-color: '.esc_attr($vw_pet_shop_preloader_border_color).'!important;';
		$vw_pet_shop_custom_css .='}';
	}