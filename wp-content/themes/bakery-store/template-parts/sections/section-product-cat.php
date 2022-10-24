<section id="catproduct-section" class="ht-section">
    <div class="container">
        <div class="peccular-section-head">   
            <?php
                $productcat_heading = get_theme_mod('productcat_heading', 'Product Category');
            ?>   
            <?php if($productcat_heading){ ?>
                <h2 class="ht-section-title catproduct-heading"><?php echo($productcat_heading); ?>
                </h2>
                <i class="fa fa-window-minimize" aria-hidden="true"></i><span><i class="fa fa-window-minimize" aria-hidden="true"></i></span>           
            
             <?php } ?>     
        </div>
               
        <div class="row catproduct-grid">

            <?php
            $args = array(
                'number'     => 0,
                'orderby'    => 'title',
                'order'      => 'ASC',
                'hide_empty' => false
            );
            $product_categories = get_terms( 'product_cat', $args );
                $count = count($product_categories);
                if ( $count > 0 ){
                    foreach ( $product_categories as $product_category ) {

                        if(function_exists('get_term_meta')){
                        //show parent categories
                            $thumbnail_id = get_term_meta($product_category->term_id, 'thumbnail_id', true);
                            if (empty($thumbnail_id)) {
                                // get the image URL for parent category
                                $image = esc_html(get_template_directory_uri()).'/assets/images/default.png';

                            } else {
                                $image = wp_get_attachment_url($thumbnail_id);

                            }
                        }

                        echo '<div class="item col-lg-3 col-md-3 col-sm-12 cat-product hvr-float-shadow "> ';

                          echo'<div class="pro-cat-img">                                            
                                    <a href="' . get_term_link( $product_category ) . '" target="_blank"><img src="'.$image.'" alt="" /></a>
                                    </div>  ';

                         echo ' <div class="pro-cat-content">                                   
                            <svg width="308px" height="198px">
                            <path fill-rule="evenodd"  fill="rgb(21, 237, 204)"
                             d="M1.003,0.251 C28.269,-1.151 51.659,3.765 71.228,15.308 C89.457,26.061 94.391,39.762 114.365,48.433 C154.683,65.936 209.370,44.866 232.744,24.342 C234.815,22.523 240.987,17.423 246.788,14.304 C258.578,7.965 271.129,5.375 282.904,6.274 C292.823,7.031 302.401,10.140 310.994,15.308 C311.662,76.205 312.331,137.103 313.000,198.000 C208.667,196.996 104.333,195.992 0.000,194.989 C0.334,130.076 0.669,65.163 1.003,0.251 Z"/>
                            </svg>
                          ';

                        echo '<span class="rolln"><a class="pulse" href="' . get_term_link( $product_category ) . '" target="_blank" >' . $product_category->name . '</a></span>';

                         echo' 
                        </div>
                    </div>'; 
                    }
                }?>
            <div class="clearfix"></div>
        </div>
    </div>
</section>


