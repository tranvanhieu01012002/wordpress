<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		// header
		$topheader_phoneicon = esc_attr(get_theme_mod('topheader_phoneicon','fa fa-phone'));
		$topheader_phonetext = esc_attr(get_theme_mod('topheader_phonetext','+91 802 9329 222'));
		$topheader_btntext = esc_attr(get_theme_mod('topheader_btntext','My Account'));
		$topheader_btntextlink = esc_attr(get_theme_mod('topheader_btntextlink','#'));


		$stickyheader = esc_attr(bakerystore_sticky_menu());
	?>

	<div class="main">
 
	
    <header class="main-header site-header <?php echo esc_attr(bakerystore_sticky_menu()); ?>">
		<div class="container">
			<div class="header-section">
				<div class="headfer-content">
					
					<div class="site-menu">


						<div style="width: 100%;">
							<div class="row site-info">
								<div class="col-md-6 col-lg-6 box-info">
									<?php
										$bakerystore_site_desc = get_bloginfo( 'description');
										if ($bakerystore_site_desc) : ?>
											<p class="site-description"><?php echo esc_html($bakerystore_site_desc); ?></p>
									<?php endif; ?>
								</div>
								<div class="col-md-6 col-lg-6 box-info row trgt-h">

									<div class="col-md-7 col-lg-7 email pd-0">
										<a class="h-email" href="mailto:<?php echo apply_filters('bakerystore_topheader', $topheader_phonetext); ?>">
											<i class="<?php echo apply_filters('bakerystore_topheader', $topheader_phoneicon); ?>"></i> <span><?php echo apply_filters('bakerystore_topheader', $topheader_phonetext); ?></span>
										</a>
									</div>

									<div class="col-md-2 col-lg-2  cart pd-0">
										<a class="h-cart" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" >
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>

											<?php 
												if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
													$count = WC()->cart->cart_contents_count;
													$cart_url = wc_get_cart_url();
													
													if ( $count > 0 ) {
													?>
														 <span><?php echo esc_html( $count ); ?></span>
													<?php 
													}
													else {
														?>
														<span><?php echo esc_html_e('0','bakery-store'); ?></span>
														<?php 
													}
												}
											?>
										</a>
										
									</div>
									<div class="col-md-3 col-lg-3  myacc">
										<a class="myaccount" href="<?php echo apply_filters('bakerystore_topheader', $topheader_btntextlink); ?>">
											<?php echo apply_filters('bakerystore_topheader', $topheader_btntext); ?>
										</a>
									</div>
								</div> 


							</div>

							<div class="row header-bottom">
								<div class="col-md-3 col-lg-3 site-logo">
									<?php
									if(has_custom_logo())
										{	
											the_custom_logo();
										}
										else { 
										?>
										<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
											
											<!-- <span class="site-title"> -->
												<?php 
													echo esc_html(bloginfo('name'));
												?>
											<!-- </span> -->
										</a>	
									<?php 						
										}
									?>
								</div>
					            
								<div class="col-md-9 col-lg-9 menus">
									<nav class="navbar navbar-expand-lg navbaroffcanvase">
									<div class="navbar-menubar">
					                    <!-- Small Divice Menu-->
					                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','bakery-store'); ?>"> 
					                        <i class="fa fa-bars"></i>
					                    </button>
					                    <div class="collapse navbar-collapse navbar-menu">
						                    <button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','bakery-store'); ?>"> 
						                        <i class="fa fa-times"></i>
						                    </button> 
											<?php 
												wp_nav_menu( 
													array(  
														'theme_location' => 'primary_menu',
														'container'  => '',
														'container_id'    => '',
														'menu_class' => 'navbar-nav main-nav',
														'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
														'walker' => new WP_Bootstrap_Navwalker()
														 ) 
													);
											?>
					                    </div>
					                </div>
									</nav>
		                        </div>

	                        </div>
						</div>
					</div>
				</div>
			</div>
		</div>


    </header>
							<div class="clearfix"></div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2394 337.6"><path d="M1387,341c-51.2,57.4-69.7-10.6-117.6,7.3-58.2,27.3-52.3,25-109.6-.4-20.2-11.5-53.2,10.4-71.8,17.2-20.3,11.5-53.4-10.5-72.1-17.2C995.5,336.2,961,359,942,365.5c-34.3,15.6-73.4-33.9-107.7-17.6-19.4,7.2-50,28.6-71.1,16.7-56-26.9-51.2-24.8-106.9.5-20.8,11.9-56.6-11.5-76.1-17.6-20.6-10.7-50.5,10.3-69,17.4-21.2,12.2-56.6-11.2-76.3-17.4-20.7-10.6-50,10.1-68.6,17.1-21.1,12-52.3-9.6-71.7-16.5-21.1-11.4-50.4,9.5-69.4,16.8-21.5,12.1-55.9-11-75.9-17.2a40.7,40.7,0,0,0-32.6.9C54.7,381.6,59.9,366,0,341V31H1387Z" transform="translate(0 -31)" style="fill:#bb8fe8"/><path d="M2394,341c-51.2,57.4-69.7-10.6-117.6,7.3-58.2,27.3-52.3,25-109.6-.4-20.2-11.5-53.2,10.4-71.8,17.2-20.3,11.5-53.4-10.5-72.1-17.2-20.4-11.7-54.9,11.1-73.9,17.6-34.3,15.6-73.4-33.9-107.7-17.6-19.4,7.2-50,28.6-71.1,16.7-56-26.9-51.2-24.8-106.9.5-20.8,11.9-56.6-11.5-76.1-17.6-20.6-10.7-50.5,10.3-69,17.4-21.2,12.2-56.6-11.2-76.3-17.4-20.7-10.6-50,10.1-68.6,17.1-21.1,12-52.3-9.6-71.7-16.5-21.1-11.4-50.4,9.5-69.4,16.8-21.5,12.1-55.9-11-75.9-17.2a40.7,40.7,0,0,0-32.6.9c-62,33-56.8,17.4-116.7-7.6V31H2394Z" transform="translate(0 -31)" style="fill:#bb8fe8"/></svg>


    </div>

