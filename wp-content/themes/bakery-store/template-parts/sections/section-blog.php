<?php  
	$bakerystore_hs_blog 			= esc_attr(get_theme_mod('hs_blog','1'));
	$bakerystore_blog_title 		= esc_attr(get_theme_mod('blog_title'));
	$bakerystore_blog_subtitle		= esc_attr(get_theme_mod('blog_subtitle')); 
	$bakerystore_blog_description	= esc_attr(get_theme_mod('blog_description'));
	$bakerystore_blog_num			= esc_attr(get_theme_mod('blog_display_num','3'));
	if($bakerystore_hs_blog=='1'):
?>

<section id="blog-section" class="blog-area home-blog">
	<div class="<?php if(esc_attr(get_theme_mod('bakerystore_blog_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('bakerystore_blog_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">

	<!-- <div class="container"> -->

	 	<?php 

			$blog_section_spanheading = esc_attr(get_theme_mod('blog_section_spanheading','O'));
			$blog_section_heading = esc_attr(get_theme_mod('blog_section_heading','ur Blog'));

		?>

		<div class="row justify-content-center text-center">
			<div class="col-md-10 col-lg-8">
				<div class="header-section">
					<h3 class="section-title"><span><?php echo apply_filters('bakerystore_blog', $blog_section_spanheading); ?></span><?php echo apply_filters('bakerystore_blog', $blog_section_heading); ?></h3>
				</div>
			</div>
		</div>


		<?php if(!empty($bakerystore_blog_title) || !empty($bakerystore_blog_subtitle) || !empty($bakerystore_blog_description)): ?>
			<div class="title">
				<?php if(!empty($bakerystore_blog_title)): ?>
					<h6><?php echo wp_kses_post($bakerystore_blog_title); ?></h6>
				<?php endif; ?>
				
				<?php if(!empty($bakerystore_blog_subtitle)): ?>
					<h2><?php echo wp_kses_post($bakerystore_blog_subtitle); ?></h2>
					<span class="shap"></span>
				<?php endif; ?>
				
				<?php if(!empty($bakerystore_blog_description)): ?>
					<p><?php echo wp_kses_post($bakerystore_blog_description); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?> 


		<div class="row">
			<?php 	
				$bakerystore_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $bakerystore_blog_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				$bakerystore_blog_wp_query = new WP_Query($bakerystore_blogs_args);
				if($bakerystore_blog_wp_query)
				{	
				while($bakerystore_blog_wp_query->have_posts()):$bakerystore_blog_wp_query->the_post(); ?>
				<div class="col-lg-4 col-md-4 col-sm-12">
					


					<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item'); ?>>	
						<!-- <h6 class="theme-button"><?php echo esc_html(get_the_date('j')); ?>, <?php echo esc_html(get_the_date('M')); ?></h6> -->
						
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<a href="<?php echo esc_url( get_permalink() ); ?>">
							<div class="blog-image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
						</a>
						<?php else: 
							$img = get_template_directory_uri().'/assets/images/default.png';
							?>
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<div class="blog-image" style="background-image: url('<?php echo $img; ?>')"></div>
							</a>
						<?php endif; ?>
						<div class="blog-content">
						<h6 class="theme-button"><i class="fa fa-calendar-o"></i> <?php echo esc_html(get_the_date('M ')); echo esc_html(get_the_date('j'));?>,<?php echo esc_html(get_the_date(' Y')); ?></h6>
							

							<?php 
								if ( is_single() ) :
									
								the_title('<h6 class="post-title">', '</h6>' );
								
								else:
								
								the_title( sprintf( '<h6 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h6>' );
								
								endif; 
								?> 
								<p>
							 		<?php echo wp_trim_words(get_the_content(), 15);	?>
							 	</p>
								
							
							<a class="btn_blog" href="<?php echo esc_url( get_permalink() ); ?>"><span><?php esc_html_e( 'More Details', 'bakery-store' ); ?></span><i class="fa-solid fa-right-long"></i></a>
						</div>
						
					</div>




				</div>

			<?php endwhile; 
				}
				wp_reset_postdata();
			?>
		</div>

	<!-- </div> -->
	</div>

</section>
<?php endif; ?>