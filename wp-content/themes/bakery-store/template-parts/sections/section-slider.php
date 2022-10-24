<section id="slider-section" class="slider-area home-slider">
  <!-- start of hero --> 
  <section class="hero-slider hero-style">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php for($p=1; $p<6; $p++) { ?>
        <?php if( get_theme_mod('slider'.$p,false)) { ?>
        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
        <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
          $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
        <?php 
          if(has_post_thumbnail()){
            $img = esc_url($image[0]);
          }
          if(empty($image)){
            $img = get_template_directory_uri().'/assets/images/default.png';
          }

        ?>

        <?php 

          $slider_heading_color = esc_attr(get_theme_mod('slider_heading_color','#000'));
          $slider_btntxt_color = esc_attr(get_theme_mod('slider_btntxt_color','#fff'));
          $slider_btn_color = esc_attr(get_theme_mod('slider_btn_color','#fdfdfd'));


        ?>


        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image">
            <div class="row md-0">                      
              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pd-0">  <div class="slidersvg2">              
                  <div class="container slidercontent">
                    <div data-swiper-parallax="300" class="slide-title">
                      <h2 style="color: <?php echo apply_filters('bakerystore_slider', $slider_heading_color); ?>"><?php the_title_attribute(); ?></h2>   
                      <hr>
                    </div>    
                    <div data-swiper-parallax="400" class="slide-text" style="margin-bottom: 1em;">
                      <p><?php the_excerpt(); ?></p>
                    </div>
                    <div data-swiper-parallax="500" class="slide-btns">
                      <a class="ReadMore" style="color: <?php echo apply_filters('bakerystore_slider', $slider_btntxt_color); ?>" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('Order Now','bakery-store'); ?></a>

                      <a class="contactus" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('Contact Us','bakery-store'); ?></a>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 pd-0">
                <div class="sliderimg">
                  
                  <img class="slide-mainimg slidershape1" src="<?php echo $img; ?>" alt="<?php the_title_attribute(); ?>">

                </div>
                
              </div>
            </div>                
          </div>
        </div>
        <?php endwhile;
           wp_reset_postdata(); ?>
        <?php } } ?>
        <div class="clear"></div> 

      </div>
       <!-- swipper controls -->
        <div class="swiper-pagination"></div>
<!--         <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
        <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
 -->    </div>
  </section>
  <!-- end of hero slider -->
</section>


