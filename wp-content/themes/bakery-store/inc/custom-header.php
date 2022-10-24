<?php
function bakerystore_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'bakerystore_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'bakerystore_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'bakerystore_custom_header_setup' );

if ( ! function_exists( 'bakerystore_header_style' ) ) :

function bakerystore_header_style() {
	$header_text_color = get_header_textcolor();


	$topheader_logowidth = esc_attr(get_theme_mod('topheader_logowidth','100'));
	$topheader_sitetitlecol = esc_attr(get_theme_mod('topheader_sitetitlecol','#fff'));
	$topheader_taglinecol = esc_attr(get_theme_mod('topheader_taglinecol','#fff'));




	$header_bgcolor = esc_attr(get_theme_mod('header_bgcolor','#BB8FE8'));
	$header_phniconcolor = esc_attr(get_theme_mod('header_phniconcolor','#FBFA02'));
	$header_phntxtcolor = esc_attr(get_theme_mod('header_phntxtcolor','#fff'));
	$header_carticoncolor = esc_attr(get_theme_mod('header_carticoncolor','#fff'));
	$header_carttextcolor = esc_attr(get_theme_mod('header_carttextcolor','#fff'));
	$header_carttxtbgcolor = esc_attr(get_theme_mod('header_carttxtbgcolor','#FD67BE'));
	$header_btnbgcolor = esc_attr(get_theme_mod('header_btnbgcolor','#fff'));
	$header_btntxtcolor = esc_attr(get_theme_mod('header_btntxtcolor','#000'));
	$header_bordercolor = esc_attr(get_theme_mod('header_bordercolor','#fff'));





  	$slider_section_show_content = esc_attr(get_theme_mod('slider_section_show_content','YES'));
  	$slider_service_show_content = esc_attr(get_theme_mod('slider_service_show_content','YES'));
  	$blog_disable_section = esc_attr(get_theme_mod('blog_disable_section','YES'));

  	$slider_bgcolor = esc_attr(get_theme_mod('slider_bgcolor','#fff'));
  	$slider_titlecolor = esc_attr(get_theme_mod('slider_titlecolor','#000'));
  	$slider_titlebordercolor = esc_attr(get_theme_mod('slider_titlebordercolor','#FD67BE'));
  	$slider_descriptioncolor = esc_attr(get_theme_mod('slider_descriptioncolor','#000'));
  	$slider_btntxt1color = esc_attr(get_theme_mod('slider_btntxt1color','#fff'));
  	$slider_btnbg1color = esc_attr(get_theme_mod('slider_btnbg1color','#FD67BE'));
  	$slider_btntxt2color = esc_attr(get_theme_mod('slider_btntxt2color','#fff'));
  	$slider_btnbg2color = esc_attr(get_theme_mod('slider_btnbg2color','#FDDD18'));



  	$productcat_headingcolor = esc_attr(get_theme_mod('productcat_headingcolor','#000'));
  	$productcat_bordercolor1 = esc_attr(get_theme_mod('productcat_bordercolor1','#bb8fe7'));
  	$productcat_bordercolor2 = esc_attr(get_theme_mod('productcat_bordercolor2','#fcf900'));
  	$productcat_boxbg1 = esc_attr(get_theme_mod('productcat_boxbg1','#96bb7b'));
  	$productcat_boxbg2 = esc_attr(get_theme_mod('productcat_boxbg2','#fbdd17'));
  	$productcat_boxbg3 = esc_attr(get_theme_mod('productcat_boxbg3','#ffdddb'));
  	$productcat_boxbg4 = esc_attr(get_theme_mod('productcat_boxbg4','#e5edef'));
  	$productcat_titlecolor = esc_attr(get_theme_mod('productcat_titlecolor','#000'));
  	$productcat_boxtitle1 = esc_attr(get_theme_mod('productcat_boxtitle1','#d6eca2'));
  	$productcat_boxtitle2 = esc_attr(get_theme_mod('productcat_boxtitle2','#fae97d'));
  	$productcat_boxtitle3 = esc_attr(get_theme_mod('productcat_boxtitle3','#f97189'));
  	$productcat_boxtitle4 = esc_attr(get_theme_mod('productcat_boxtitle4','#c9e3e9'));



  	$banner_titlecolor = esc_attr(get_theme_mod('banner_titlecolor','#fff'));
  	$banner_box1bgcolor = esc_attr(get_theme_mod('banner_box1bgcolor','#fbdd17'));
  	$banner_box1btnbgcolor = esc_attr(get_theme_mod('banner_box1btnbgcolor','#faee9c'));
  	$banner_box2bgcolor = esc_attr(get_theme_mod('banner_box2bgcolor','#fa3759'));
  	$banner_box2btnbgcolor = esc_attr(get_theme_mod('banner_box2btnbgcolor','#fa6a83'));
  	$banner_btntxtcolor = esc_attr(get_theme_mod('banner_btntxtcolor','#000'));





  	$popularproducts_headingcolor = esc_attr(get_theme_mod('popularproducts_headingcolor','#000'));
  	$popularproducts_border1color = esc_attr(get_theme_mod('popularproducts_border1color','#bb8fe7'));
  	$popularproducts_border2color = esc_attr(get_theme_mod('popularproducts_border2color','#fcf900'));
  	$popularproducts_box1bgcolor = esc_attr(get_theme_mod('popularproducts_box1bgcolor','#fb3c5e'));
  	$popularproducts_box2bgcolor = esc_attr(get_theme_mod('popularproducts_box2bgcolor','#71a006'));
  	$popularproducts_box3bgcolor = esc_attr(get_theme_mod('popularproducts_box3bgcolor','#fddd19'));
  	$popularproducts_titlecolor = esc_attr(get_theme_mod('popularproducts_titlecolor','#fff'));
  	$popularproducts_pricecolor = esc_attr(get_theme_mod('popularproducts_pricecolor','#fff'));
  	$popularproducts_btnbgcolor = esc_attr(get_theme_mod('popularproducts_btnbgcolor','#fff'));
  	$popularproducts_btn1txticoncolor = esc_attr(get_theme_mod('popularproducts_btn1txticoncolor','#fb3c5e'));
  	$popularproducts_btn2txticoncolor = esc_attr(get_theme_mod('popularproducts_btn2txticoncolor','#71a006'));
  	$popularproducts_btn3txticoncolor = esc_attr(get_theme_mod('popularproducts_btn3txticoncolor','#fddd19'));



  	


	?>
	<style type="text/css">


		<?php 
		
		?>

	
		.site-logo img {
			width: <?php echo apply_filters('bakerystore_topheader', $topheader_logowidth); ?>%;
			height: 100%;
		}

		header.site-header .site-title {
			color: <?php echo apply_filters('bakerystore_topheader', $topheader_sitetitlecol); ?>;

		}

		p.site-description {
			color: <?php echo apply_filters('bakerystore_topheader', $topheader_taglinecol); ?>;

		}
		


		
		header.site-header {
			background: <?php echo apply_filters('bakerystore_header', $header_bgcolor); ?>;
		}

		header.site-header .site-info i {
			background: <?php echo apply_filters('bakerystore_header', $header_phniconcolor); ?>;
		}

		header.site-header .site-info span {
			color: <?php echo apply_filters('bakerystore_header', $header_phntxtcolor); ?>;
		}

		header.site-header .site-info .h-cart i {
			background: <?php echo apply_filters('bakerystore_header', $header_carticoncolor); ?>;
		}

		header.site-header .site-info .h-cart span {
			color: <?php echo apply_filters('bakerystore_header', $header_carttextcolor); ?>;
		}

		header.site-header .site-info .h-cart span {
			background: <?php echo apply_filters('bakerystore_header', $header_carttxtbgcolor); ?>;
		}

		header.site-header .site-info .myacc {
			background: <?php echo apply_filters('bakerystore_header', $header_btnbgcolor); ?>;
		}

		header.site-header .site-info .myacc a {
			color: <?php echo apply_filters('bakerystore_header', $header_btntxtcolor); ?>;
		}

		header.site-header .site-info {
			border-color: <?php echo apply_filters('bakerystore_header', $header_bordercolor); ?>;
		}







		.hero-style .slide-title h2 {
			color: <?php echo apply_filters('bakerystore_slider', $slider_titlecolor); ?> !important;
		}

		.hero-style .slide-title hr {
			background: <?php echo apply_filters('bakerystore_slider', $slider_titlebordercolor); ?>;
		}

		.hero-style .slide-text p {
			color: <?php echo apply_filters('bakerystore_slider', $slider_descriptioncolor); ?>;
		}

		.hero-style a.ReadMore {
			color: <?php echo apply_filters('bakerystore_slider', $slider_btntxt1color); ?> !important;
		}

		.hero-style a.ReadMore {
			background: <?php echo apply_filters('bakerystore_slider', $slider_btnbg1color); ?>;
		}

		.hero-style a.contactus {
			color: <?php echo apply_filters('bakerystore_slider', $slider_btntxt2color); ?>;
		}

		.hero-style a.contactus {
			background: <?php echo apply_filters('bakerystore_slider', $slider_btnbg2color); ?>;
		}





		#catproduct-section h2.ht-section-title {
			color: <?php echo apply_filters('bakerystore_productcat', $productcat_headingcolor); ?>;
		}

		#catproduct-section .peccular-section-head i {
			color: <?php echo apply_filters('bakerystore_productcat', $productcat_bordercolor1); ?>;
			background: <?php echo apply_filters('bakerystore_productcat', $productcat_bordercolor1); ?>;
		}

		#catproduct-section .peccular-section-head span i {
			color: <?php echo apply_filters('bakerystore_productcat', $productcat_bordercolor2); ?>;
			background: <?php echo apply_filters('bakerystore_productcat', $productcat_bordercolor2); ?>;
		}

		#catproduct-section .catproduct-grid .item:nth-child(1) .pro-cat-content svg path, #catproduct-section .catproduct-grid .item:nth-child(5) .pro-cat-content svg path,#catproduct-section .catproduct-grid .item:nth-child(9) .pro-cat-content svg path {
			fill: <?php echo apply_filters('bakerystore_productcat', $productcat_boxbg1); ?>!important;

		}

		#catproduct-section .catproduct-grid .item:nth-child(2) .pro-cat-content svg path,#catproduct-section .catproduct-grid .item:nth-child(6) .pro-cat-content svg path,#catproduct-section .catproduct-grid .item:nth-child(10) .pro-cat-content svg path {
			fill: <?php echo apply_filters('bakerystore_productcat', $productcat_boxbg2); ?>!important;
		}
		
		#catproduct-section .catproduct-grid .item:nth-child(3) .pro-cat-content svg path, #catproduct-section .catproduct-grid .item:nth-child(7) .pro-cat-content svg path, #catproduct-section .catproduct-grid .item:nth-child(11) .pro-cat-content svg path {
			fill: <?php echo apply_filters('bakerystore_productcat', $productcat_boxbg3); ?>!important;
		}

		#catproduct-section .catproduct-grid .item:nth-child(4) .pro-cat-content svg path, #catproduct-section .catproduct-grid .item:nth-child(8) .pro-cat-content svg path,#catproduct-section .catproduct-grid .item:nth-child(12) .pro-cat-content svg path{
			fill: <?php echo apply_filters('bakerystore_productcat', $productcat_boxbg4); ?>!important;
		}

		#catproduct-section .pro-cat-content span a {
			color: <?php echo apply_filters('bakerystore_productcat', $productcat_titlecolor); ?>;
		}

		#catproduct-section .catproduct-grid .item:nth-child(1) .pro-cat-content span a, #catproduct-section .catproduct-grid .item:nth-child(5) .pro-cat-content span a, #catproduct-section .catproduct-grid .item:nth-child(9) .pro-cat-content span a {
			background: <?php echo apply_filters('bakerystore_productcat', $productcat_boxtitle1); ?>!important;
		}

		#catproduct-section .catproduct-grid .item:nth-child(2) .pro-cat-content span a, #catproduct-section .catproduct-grid .item:nth-child(6) .pro-cat-content span a, #catproduct-section .catproduct-grid .item:nth-child(10) .pro-cat-content span a  {
			background: <?php echo apply_filters('bakerystore_productcat', $productcat_boxtitle2); ?>!important;

		}

		#catproduct-section .catproduct-grid .item:nth-child(3) .pro-cat-content span a, #catproduct-section .catproduct-grid .item:nth-child(7) .pro-cat-content span a, #catproduct-section .catproduct-grid .item:nth-child(11) .pro-cat-content span a  {
			background: <?php echo apply_filters('bakerystore_productcat', $productcat_boxtitle3); ?>!important;

		}

		#catproduct-section .catproduct-grid .item:nth-child(4) .pro-cat-content span a , #catproduct-section .catproduct-grid .item:nth-child(8) .pro-cat-content span a, #catproduct-section .catproduct-grid .item:nth-child(12) .pro-cat-content span a {
			background: <?php echo apply_filters('bakerystore_productcat', $productcat_boxtitle4); ?> !important;

		}





		#banner .peccular-banner-content h4.peccular-banner-title {
			color: <?php echo apply_filters('bakerystore_banner', $banner_titlecolor); ?>;
		}

		#banner .peccular-banner-single {
			background: <?php echo apply_filters('bakerystore_banner', $banner_box1bgcolor); ?>;
		}

		#banner .boxshape, #banner .peccular-banner-content .morder-btn {
			background: <?php echo apply_filters('bakerystore_banner', $banner_box1btnbgcolor); ?>;
			border-color: <?php echo apply_filters('bakerystore_banner', $banner_box1btnbgcolor); ?>;

		}

		#banner .peccular-banner-b:nth-child(3) .peccular-banner-single {
			background: <?php echo apply_filters('bakerystore_banner', $banner_box2bgcolor); ?>!important;
		}

		#banner .peccular-banner-b:nth-child(3) .boxshape2,#banner .peccular-banner-b:nth-child(3) .peccular-banner-content .morder-btn {
			background: <?php echo apply_filters('bakerystore_banner', $banner_box2btnbgcolor); ?> !important;
			border-color: <?php echo apply_filters('bakerystore_banner', $banner_box2btnbgcolor); ?>!important;

		}

		#banner .peccular-banner-content .morder-btn {
			color: <?php echo apply_filters('bakerystore_banner', $banner_btntxtcolor); ?>;
		}





		#featured-product-section .section-subtitle h2 {
			color: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_headingcolor); ?>;
		}

		#featured-product-section .section-subtitle i {
			color: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_border1color); ?>;
		}

		#featured-product-section .section-subtitle span i {
			color: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_border2color); ?>;
		}


		#featured-product-section .item:nth-child(1) .product-grid svg path, #featured-product-section .item:nth-child(4) .product-grid svg path, #featured-product-section .item:nth-child(7) .product-grid svg path, #featured-product-section .item:nth-child(10) .product-grid svg path, #featured-product-section .item:nth-child(1) .productcontent-wrap, #featured-product-section .item:nth-child(4) .productcontent-wrap,#featured-product-section .item:nth-child(7) .productcontent-wrap,#featured-product-section .item:nth-child(10) .productcontent-wrap{
			fill: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_box1bgcolor); ?>!important;
			background: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_box1bgcolor); ?>!important;

		}


		#featured-product-section .item:nth-child(2) .product-grid svg path, #featured-product-section .item:nth-child(5) .product-grid svg path, #featured-product-section .item:nth-child(8) .product-grid svg path, #featured-product-section .item:nth-child(11) .product-grid svg path, #featured-product-section .item:nth-child(2) .productcontent-wrap, #featured-product-section .item:nth-child(5) .productcontent-wrap,#featured-product-section .item:nth-child(8) .productcontent-wrap,#featured-product-section .item:nth-child(11) .productcontent-wrap {
			fill: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_box2bgcolor); ?>!important;
			background: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_box2bgcolor); ?>!important;

		}

		#featured-product-section .item:nth-child(3) .product-grid svg path, #featured-product-section .item:nth-child(6) .product-grid svg path, #featured-product-section .item:nth-child(9) .product-grid svg path, #featured-product-section .item:nth-child(12) .product-grid svg path, #featured-product-section .item:nth-child(3) .productcontent-wrap, #featured-product-section .item:nth-child(6) .productcontent-wrap,#featured-product-section .item:nth-child(9) .productcontent-wrap,#featured-product-section .item:nth-child(12) .productcontent-wrap {
			fill: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_box3bgcolor); ?>!important;
			background: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_box3bgcolor); ?>!important;

		}

		#featured-product-section .product-grid h3 {
			color: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_titlecolor); ?>;
		}

		#featured-product-section .product-grid, #featured-product-section .price del span.woocommerce-Price-amount, #featured-product-section .price ins span.woocommerce-Price-amount {
			color: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_pricecolor); ?>;
		}

		#featured-product-section .add-to-cart a {
			background: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_btnbgcolor); ?>;
		}


		#featured-product-section .item:nth-child(1) .add-to-cart a, #featured-product-section .item:nth-child(4) .add-to-cart a,
		#featured-product-section .item:nth-child(7) .add-to-cart a,
		#featured-product-section .item:nth-child(10) .add-to-cart a, #featured-product-section .item:nth-child(1) .add-to-cart a:after, #featured-product-section .item:nth-child(4) .add-to-cart a:after,#featured-product-section .item:nth-child(7) .add-to-cart a:after,#featured-product-section .item:nth-child(10) .add-to-cart a:after {
			color: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_btn1txticoncolor); ?>!important;
		}

		#featured-product-section .item:nth-child(2) .add-to-cart a, #featured-product-section .item:nth-child(5) .add-to-cart a,
		#featured-product-section .item:nth-child(8) .add-to-cart a,
		#featured-product-section .item:nth-child(11) .add-to-cart a, #featured-product-section .item:nth-child(2) .add-to-cart a:after, #featured-product-section .item:nth-child(5) .add-to-cart a:after,#featured-product-section .item:nth-child(8) .add-to-cart a:after,#featured-product-section .item:nth-child(11) .add-to-cart a:after {
			color: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_btn2txticoncolor); ?>!important;
		}

		#featured-product-section .item:nth-child(3) .add-to-cart a, #featured-product-section .item:nth-child(6) .add-to-cart a,
		#featured-product-section .item:nth-child(9) .add-to-cart a,
		#featured-product-section .item:nth-child(12) .add-to-cart a, #featured-product-section .item:nth-child(3) .add-to-cart a:after, #featured-product-section .item:nth-child(6) .add-to-cart a:after,#featured-product-section .item:nth-child(9) .add-to-cart a:after,#featured-product-section .item:nth-child(12) .add-to-cart a:after {
			color: <?php echo apply_filters('bakerystore_popularproducts', $popularproducts_btn3txticoncolor); ?>!important;
		}



		<?php  ?>


	<?php
        if ($slider_section_show_content == 1):
	?>
		.slider-outer-box {
			display: none;
		}
	<?php
		else :
	?>
		.slider-outer-box {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($slider_service_show_content == 1):
	?>
		#service-section {
			display: none;
		}
	<?php
		else :
	?>
		#service-section {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($blog_disable_section == 1):
	?>
		.blog-area {
			display: none;
		}
	<?php
		else :
	?>
		.blog-area {
			display: block;
		}
	<?php endif; ?>



	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>

	</style>
	<?php
}
endif;
