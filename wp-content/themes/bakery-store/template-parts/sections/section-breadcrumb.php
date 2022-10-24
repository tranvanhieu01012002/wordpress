<?php 
	$bakerystore_hs_breadcrumb					= get_theme_mod('hs_breadcrumb','1');
	$bakerystore_breadcrumb_bg_img				= get_theme_mod('breadcrumb_bg_img');
	$bakerystore_breadcrumb_back_attach		= get_theme_mod('breadcrumb_back_attach','scroll');
	
if($bakerystore_hs_breadcrumb == '1') {	
?>	

	<!-- Slider Area -->   
	<?php if(!empty($bakerystore_breadcrumb_bg_img)): ?>
    <section class="slider-area breadcrumb-section" style="background: url(<?php echo esc_url($bakerystore_breadcrumb_bg_img); ?>) center center <?php echo esc_attr($bakerystore_breadcrumb_back_attach); ?>; background-repeat: no-repeat; background-size: cover;">
	<?php else: ?>
	 <section class="slider-area breadcrumb-section">
	 <?php endif; ?>
        <div class="container">
            <div class="about-banner-text">   
            	
				<h1><?php bakerystore_breadcrumb_title(); ?></h1>
				
				<ol class="breadcrumb-list">
					<?php bakerystore_breadcrumbs(); ?>
				</ol>



            </div>
        </div> 
        <svg viewBox="0 0 2535.69 337.66"><path d="M1387,101.66l-12.5-12A40.64,40.64,0,0,0,1329.66,82l-27.21,12.27a40.63,40.63,0,0,1-33.09.14l-37.52-16.55a40.66,40.66,0,0,0-32.49-.13l-39.51,17a40.62,40.62,0,0,1-32.18,0L1088,77.61a40.65,40.65,0,0,0-32.19,0L1015.92,94.8a40.64,40.64,0,0,1-31.89.12L942,77.2A40.59,40.59,0,0,0,911,77L865.92,95.22a40.64,40.64,0,0,1-31.64-.49L796.27,78a40.65,40.65,0,0,0-33.1.14L727.45,94.22a40.63,40.63,0,0,1-33.09.14l-38-16.76a40.59,40.59,0,0,0-31.64-.49l-44.53,18a40.62,40.62,0,0,1-31.95-.62L511.16,77.81a40.65,40.65,0,0,0-32-.62l-44.34,18a40.62,40.62,0,0,1-31.95-.62L366.34,78a40.67,40.67,0,0,0-32.8-.27l-39,16.81a40.64,40.64,0,0,1-32.79-.27L225.22,77.81a40.62,40.62,0,0,0-31.95-.62L149.32,95a40.63,40.63,0,0,1-32.61-.92L84.34,78.77A40.61,40.61,0,0,0,50,78.61l-50,23v310H1387Z" transform="translate(0 -74)"/><path d="M2535.69,101.66l-12.5-12A40.64,40.64,0,0,0,2478.35,82l-27.21,12.27a40.63,40.63,0,0,1-33.09.14l-37.52-16.55a40.66,40.66,0,0,0-32.49-.13l-39.51,17a40.62,40.62,0,0,1-32.18,0l-39.69-17.11a40.65,40.65,0,0,0-32.19,0L2164.61,94.8a40.64,40.64,0,0,1-31.89.12l-42-17.72a40.59,40.59,0,0,0-31.05-.23l-45.07,18.25a40.64,40.64,0,0,1-31.64-.49L1945,78a40.65,40.65,0,0,0-33.1.14l-35.72,16.11a40.63,40.63,0,0,1-33.09.14L1805,77.6a40.59,40.59,0,0,0-31.64-.49l-44.53,18a40.62,40.62,0,0,1-31.95-.62l-37.06-16.71a40.65,40.65,0,0,0-32-.62l-44.34,18a40.62,40.62,0,0,1-32-.62L1515,78a40.67,40.67,0,0,0-32.8-.27l-39,16.81a40.64,40.64,0,0,1-32.79-.27l-36.57-16.49a40.65,40.65,0,0,0-32-.62L1298,95a40.63,40.63,0,0,1-32.61-.92L1233,78.77a40.61,40.61,0,0,0-34.38-.16l-50,23v310h1387Z" transform="translate(0 -74)"/></svg>

    </section>
    <!-- End Slider Area -->
<?php }else{  ?>
	<section style="padding: 30px 0 30px;"></section>
<?php } ?>	