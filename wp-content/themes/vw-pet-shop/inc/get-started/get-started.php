<?php
//about theme info
add_action( 'admin_menu', 'vw_pet_shop_gettingstarted' );
function vw_pet_shop_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Petshop Theme', 'vw-pet-shop'), esc_html__('About VW Petshop Lite', 'vw-pet-shop'), 'edit_theme_options', 'vw_pet_shop_guide', 'vw_pet_shop_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_pet_shop_admin_theme_style() {
   wp_enqueue_style('vw-pet-shop-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
   wp_enqueue_script('vw-pet-shop-tabs', esc_url(get_template_directory_uri()) . '/inc/get-started/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_pet_shop_admin_theme_style');

//guidline for about theme
function vw_pet_shop_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-pet-shop' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Petshop Theme', 'vw-pet-shop' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-pet-shop'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Petshop at 20% Discount','vw-pet-shop'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-pet-shop'); ?> ( <span><?php esc_html_e('vwpro20','vw-pet-shop'); ?></span> ) </h4>
			<div class="info-link">
				<a href="<?php echo esc_url( VW_PET_SHOP_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-pet-shop' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="vw_pet_shop_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-pet-shop' ); ?></button>
			<button class="tablinks" onclick="vw_pet_shop_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-pet-shop' ); ?></button>
			<button class="tablinks" onclick="vw_pet_shop_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'vw-pet-shop' ); ?></button>
			<button class="tablinks" onclick="vw_pet_shop_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'vw-pet-shop' ); ?></button>
		  	<button class="tablinks" onclick="vw_pet_shop_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'vw-pet-shop' ); ?></button>
		  	<button class="tablinks" onclick="vw_pet_shop_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'vw-pet-shop' ); ?></button>
		</div>

		<!-- Tab content -->
		<?php
			$vw_pet_shop_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_pet_shop_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Pet_Shop_Plugin_Activation_Settings::get_instance();
				$vw_pet_shop_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-pet-shop-recommended-plugins">
				    <div class="vw-pet-shop-action-list">
				        <?php if ($vw_pet_shop_actions): foreach ($vw_pet_shop_actions as $key => $vw_pet_shop_actionValue): ?>
				                <div class="vw-pet-shop-action" id="<?php echo esc_attr($vw_pet_shop_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_pet_shop_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_pet_shop_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_pet_shop_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-pet-shop'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_pet_shop_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-pet-shop' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('VW Pet Shop is a WordPress theme presented by VowelWeb for designing a website or a blog related to Pets. This theme can be used for almost all the businesses related to animal care or shops. The theme can be used by pet shops, animal care, veterinary doctors, pet groomers, pet and animal bloggers, pet consultant, pet spa, animal accessories shop etc. It has a simple and interactive design which enables the user to seek the right solution to their problem without any hassle. It has personalised option to use it according to your need. Clean and secure codes are implemented using shortcodes. It is loaded with awesome features still it is a light-weight theme which loads fast. These all things contribute to making it a search engine optimized theme to get your site a higher place in search engines. This animal WordPress theme is responsive, cross-browser compatible, translation ready and has call to action button (CTA). Its social media icons will widen the reach of your site and its content and will help increase the influx of visitors to your site. It has a beautiful design to make your site stand apart from your competitors. These features combined make it an ideal pet WordPress theme.','vw-pet-shop'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-pet-shop' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-pet-shop' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_PET_SHOP_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-pet-shop' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-pet-shop'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-pet-shop'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-pet-shop'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-pet-shop'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-pet-shop'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_PET_SHOP_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-pet-shop'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-pet-shop'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-pet-shop'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_PET_SHOP_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-pet-shop'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-pet-shop' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-pet-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=vw_pet_shop_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','vw-pet-shop'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-pet-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_products') ); ?>" target="_blank"><?php esc_html_e('Pets Collection','vw-pet-shop'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Section','vw-pet-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-pet-shop'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-pet-shop'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-pet-shop'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-pet-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-pet-shop'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-pet-shop'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-pet-shop'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-pet-shop'); ?></span><?php esc_html_e(' Go to ','vw-pet-shop'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-pet-shop'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-pet-shop'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-pet-shop'); ?></span><?php esc_html_e(' Go to ','vw-pet-shop'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-pet-shop'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-pet-shop'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-pet-shop'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-vw-pet-shop/" target="_blank"><?php esc_html_e('Documentation','vw-pet-shop'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Pet_Shop_Plugin_Activation_Settings::get_instance();
				$vw_pet_shop_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-pet-shop-recommended-plugins">
				    <div class="vw-pet-shop-action-list">
				        <?php if ($vw_pet_shop_actions): foreach ($vw_pet_shop_actions as $key => $vw_pet_shop_actionValue): ?>
				                <div class="vw-pet-shop-action" id="<?php echo esc_attr($vw_pet_shop_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_pet_shop_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_pet_shop_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_pet_shop_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','vw-pet-shop'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($vw_pet_shop_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'vw-pet-shop' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-pet-shop'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','vw-pet-shop'); ?></span></b></p>
	              	<div class="vw-pet-shop-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-pet-shop'); ?></a>
				    </div>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/block-pattern.png" alt="" />
	            </div>

	            <div class="block-pattern-link-customizer">
	              	<div class="link-customizer-with-block-pattern">
							<h3><?php esc_html_e( 'Link to customizer', 'vw-pet-shop' ); ?></h3>
							<hr class="h3hr">
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-pet-shop'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-pet-shop'); ?></a>
									</div>
								</div>
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-pet-shop'); ?></a>
									</div>
									
									<div class="row-box2">
										<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-pet-shop'); ?></a>
									</div>
								</div>

								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-pet-shop'); ?></a>
									</div>
									 <div class="row-box2">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-pet-shop'); ?></a>
									</div> 
								</div>
								
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-pet-shop'); ?></a>
									</div>
									 <div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-pet-shop'); ?></a>
									</div> 
								</div>
							</div>
					</div>	
				</div>				
	        </div>
		</div>

		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Pet_Shop_Plugin_Activation_Settings::get_instance();
			$vw_pet_shop_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-pet-shop-recommended-plugins">
				    <div class="vw-pet-shop-action-list">
				        <?php if ($vw_pet_shop_actions): foreach ($vw_pet_shop_actions as $key => $vw_pet_shop_actionValue): ?>
				                <div class="vw-pet-shop-action" id="<?php echo esc_attr($vw_pet_shop_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_pet_shop_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_pet_shop_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_pet_shop_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-pet-shop' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-pet-shop-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-pet-shop'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
					<h3><?php esc_html_e( 'Link to customizer', 'vw-pet-shop' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-pet-shop'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-pet-shop'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-pet-shop'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-pet-shop'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-pet-shop'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-pet-shop'); ?></a>
							</div> 
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_pet_shop_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-pet-shop'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-pet-shop'); ?></a>
							</div> 
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = VW_Pet_Shop_Plugin_Activation_Woo_Products::get_instance();
				$vw_pet_shop_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-pet-shop-recommended-plugins">
					    <div class="vw-pet-shop-action-list">
					        <?php if ($vw_pet_shop_actions): foreach ($vw_pet_shop_actions as $key => $vw_pet_shop_actionValue): ?>
					                <div class="vw-pet-shop-action" id="<?php echo esc_attr($vw_pet_shop_actionValue['id']);?>">
				                        <div class="action-inner plugin-activation-redirect">
				                            <h3 class="action-title"><?php echo esc_html($vw_pet_shop_actionValue['title']); ?></h3>
				                            <div class="action-desc"><?php echo esc_html($vw_pet_shop_actionValue['desc']); ?></div>
				                            <?php echo wp_kses_post($vw_pet_shop_actionValue['link']); ?>
				                        </div>
					                </div>
					            <?php endforeach;
					        endif; ?>
					    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'vw-pet-shop' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-pet-shop-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','vw-pet-shop'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','vw-pet-shop'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','vw-pet-shop'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','vw-pet-shop'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','vw-pet-shop'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','vw-pet-shop'); ?></span></b></p>
	              	<div class="vw-pet-shop-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','vw-pet-shop'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','vw-pet-shop'); ?></span></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-pet-shop' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The premium pet WordPress theme is the best solution for all those dealing with animals in any form. It can be used for a blog, a website or for a portfolio. It can be used for businesses like pet shop, animal accessories shop, pet spa and pet food shop etc. You may also find it useful if you are a veterinary doctor, pet consultant, animal blogger, pet food consultant or an animal protection and welfare worker. It is a minimal theme with a beautiful and stunning design to attract users attention and compel them to use it and spend some good time on your site. Its easy navigation and clean design will give them a good user experience. It does not only show your products and services but also show your professionalism, expertise and sincerity in doing business effectively. Its testimonial section will be the proof of your credibility. Our experts have dedicatedly designed it to give maximum exposure to your work. It is so easy to tweak that you can kick start your business within minutes after purchasing it. No need to spend hours of your valuable time in making it look like you wished it to.','vw-pet-shop'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_PET_SHOP_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-pet-shop'); ?></a>
					<a href="<?php echo esc_url( VW_PET_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-pet-shop'); ?></a>
					<a href="<?php echo esc_url( VW_PET_SHOP_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-pet-shop'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/vw-petshop.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-pet-shop' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-pet-shop'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-pet-shop'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-pet-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-pet-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-pet-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-pet-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-pet-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-pet-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-pet-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-pet-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-pet-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-pet-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-pet-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('12', 'vw-pet-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-pet-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-pet-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-pet-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-pet-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-pet-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-pet-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-pet-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_PET_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-pet-shop'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-pet-shop'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-pet-shop'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_PET_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-pet-shop'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-pet-shop'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-pet-shop'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_PET_SHOP_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-pet-shop'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-pet-shop'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-pet-shop'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_PET_SHOP_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-pet-shop'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-pet-shop'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-pet-shop'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_PET_SHOP_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-pet-shop'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'vw-pet-shop'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-pet-shop'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_PET_SHOP_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-pet-shop'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>