<section id="featured-product-section" class="ht-section">
	<div class="container">
		<div class="featured-posts-box">
		<?php
			$popularproducts_heading = get_theme_mod('popularproducts_heading', 'Popular Products');
		?> 
			<div class="row justify-content-center">
				<div class="col-md-offset5 col-md-7  ">
				<?php if($popularproducts_heading){ ?>	
					<div class="section-title">
					
					<?php if($popularproducts_heading){ ?>	
						<div class="section-subtitle inner-area-title">
							<h2><?php echo ($popularproducts_heading);  ?></h2>	
		                    <i class="fa fa-window-minimize" aria-hidden="true"></i><span><i class="fa fa-window-minimize" aria-hidden="true"></i></span>           

						</div>
					<?php }?>
					</div>
				</div>
				
			<?php }?>
			</div> 

			<div class="row wow zoomIn">
				<div class="row">  
					<?php
					if(function_exists('woocommerce_template_loop_add_to_cart') && function_exists('WC')){
						$meta_query   = WC()->query->get_meta_query();
						$tax_query   = WC()->query->get_tax_query();
						$tax_query[] = array(
							'taxonomy' => 'product_visibility',
							'field'    => 'name',
							'terms'    => 'featured',
							'operator' => 'IN',
						);
						$args = array(
							'post_type'   =>  'product',
							'stock'       =>  1,
							'posts_per_page' => 3, 
							'orderby'     =>  'date',
							'order'       =>  'DESC',
							'meta_query'  =>  $meta_query,
							'tax_query'   => $tax_query,
						);
						$loop = new WP_Query( $args );
						if($loop->post_count > 0){
							while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<div class="item col-lg-4 col-md-4 col-sm-12">  
						<div class="product-grid ">
							<!-- <div class="probg"></div> -->
							<div class="product-image">
								<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php if (has_post_thumbnail( $loop->post->ID )) 
									echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
									else
										echo '<img class="pic-1" src="'.get_template_directory_uri().'/assets/images/default.png" alt="Placeholder" />'; ?>
									
								</a>
							</div>
							<div class="productcontent-wrap">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
									<path fill="#fb3c5e" fill-opacity="1" d="M0,224L40,229.3C80,235,160,245,240,224C320,203,400,149,480,138.7C560,128,640,160,720,154.7C800,149,880,107,960,106.7C1040,107,1120,149,1200,149.3C1280,149,1360,107,1400,85.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
								</svg>
								<?php
									$productbutton = get_theme_mod('product_txt', 'Add to cart'); 
								?>

								<div class="pcontent">
									
									<a class="add-to-cart" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">	
										<h3><?php the_title(); ?></h3>
									</a>
									<span class="price"><?php echo $product->get_price_html(); ?></span>
									<?php if( get_theme_mod('product_button_display','show' ) == 'show') :
										?>	
										<div class="add-to-cart">
											<a href="<?php echo esc_url(get_permalink()); ?>" class="more-button"><span></span><?php echo ($productbutton );  ?></a>
										</div>
									<?php endif ?>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div> 
					<?php
						endwhile; 
							}else{ ?>
						<div class="alert alert-warning text-center">
							<strong>Sorry, no featured products to show.</strong>
						</div>
						<?php
								}
								?>
						<?php
							wp_reset_query(); 
						}else{ ?>
						<div class="alert alert-warning text-center">
							Kindly Install or Activate the WooCommerce plugin.
						</div>
					<?php
					}?>
				</div> 
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</section>
