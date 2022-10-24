<section class="row banner-area" id="banner">
		<div class="banner-bg"></div>	
		<?php 

		// header
		$banner_text1 = esc_attr(get_theme_mod('banner_text1','Any Design For Your Feast Day'));
		$banner_btntext = esc_attr(get_theme_mod('banner_btntext','Make Order Now'));
		$banner_btntextlink = esc_attr(get_theme_mod('banner_btntextlink','#'));
		$banner_text2 = esc_attr(get_theme_mod('banner_text2','Any Candy In Our Store'));
		$banner_btntext2 = esc_attr(get_theme_mod('banner_btntext2','Make Order Now'));
		$banner_btntextlink2 = esc_attr(get_theme_mod('banner_btntextlink2','#'));


		?>


		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pd-0 peccular-banner-b">
			<div banner-match-height="groupName" class="peccular-banner-single <?php echo esc_attr(get_theme_mod('peccular_banner_box_onload_effects','wow zoomIn')); ?>" data-wow-duration="2s" style="text-align : <?php if(get_theme_mod('peccular_banner_box_align','Center') == 'Center'){ ?> Center <?php } elseif(get_theme_mod('peccular_banner_box_align','Left') == 'Left'){ ?> Left <?php } elseif(get_theme_mod('peccular_banner_box_align','Right') == 'Right'){ ?> right <?php } ?> ">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pd-0"> 
					<div class="peccular-banner-imgbox">
					<?php 
					echo '<img alt="banner us" src="'.get_template_directory_uri().'/assets/images/banner1.jpg" />';					

					?>
					
					<div class="clearfix"></div>

					<div class="boxshape"></div>
					</div>
				</div>

				
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd-0"> 
					
					<div class="peccular-banner-content">
						<div class="boxshape2"></div>
						<h4 class="peccular-banner-title inner-area-title" style="text-transform : <?php if(get_theme_mod('peccular_banner_title_case','Capitalize') == 'Capitalize'){ ?> capitalize <?php } elseif(get_theme_mod('peccular_banner_title_case','Lowercase') == 'Lowercase'){ ?> lowercase <?php } elseif(get_theme_mod('peccular_banner_title_case','Uppercase') == 'Uppercase'){ ?> uppercase <?php } ?>">
							<?php echo apply_filters('bakerystore_banner', $banner_text1); ?>
						</h4>					
    
           				<a href="<?php echo apply_filters('bakerystore_banner', $banner_btntextlink); ?>" class="morder-btn">							<?php echo apply_filters('bakerystore_banner', $banner_btntext); ?> </a>
     
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pd-0 peccular-banner-b">
				<div banner-match-height="groupName" class="peccular-banner-single <?php echo esc_attr(get_theme_mod('peccular_banner_box_onload_effects','wow zoomIn')); ?>" data-wow-duration="2s" style="text-align : <?php if(get_theme_mod('peccular_banner_box_align','Center') == 'Center'){ ?> Center <?php } elseif(get_theme_mod('peccular_banner_box_align','Left') == 'Left'){ ?> Left <?php } elseif(get_theme_mod('peccular_banner_box_align','Right') == 'Right'){ ?> right <?php } ?> ">
					<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pd-0"> 
						<div class="peccular-banner-imgbox">
						<?php 
						echo '<img alt="banner us" src="'.get_template_directory_uri().'/assets/images/banner2.jpg" />';					

						?>
						
						<div class="clearfix"></div>

						<div class="boxshape"></div>
						</div>
					</div>

					
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd-0"> 
						
						<div class="peccular-banner-content">
							<div class="boxshape2"></div>
							<h4 class="peccular-banner-title inner-area-title" style="text-transform : <?php if(get_theme_mod('peccular_banner_title_case','Capitalize') == 'Capitalize'){ ?> capitalize <?php } elseif(get_theme_mod('peccular_banner_title_case','Lowercase') == 'Lowercase'){ ?> lowercase <?php } elseif(get_theme_mod('peccular_banner_title_case','Uppercase') == 'Uppercase'){ ?> uppercase <?php } ?>">
								<?php echo apply_filters('bakerystore_banner', $banner_text2); ?>

							</h4>					
	    
           				<a href="<?php echo apply_filters('bakerystore_banner', $banner_btntextlink2); ?>" class="morder-btn">							<?php echo apply_filters('bakerystore_banner', $banner_btntext2); ?> </a>
	     
							
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				</div>
		</div>
		
	</section>

