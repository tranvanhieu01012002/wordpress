<?php
class showProduct{
    public function index()
    {
        echo "<h1>Show tất cả sản phẩm</h1>";
        do_action( 'woocommerce_before_shop_loop' );
        woocommerce_product_loop_start();
        if ( wc_get_loop_prop( 'total' ) ) : 
            while ( have_posts() ) : 
            the_post(); 
            wc_get_template_part( 'content', 'product' ); 
            endwhile; 
        endif; 
        woocommerce_product_loop_end(); 
        // do_action( 'woocommerce_after_shop_loop' ); 	
    }

    public function show_category()
    {
        echo "<h1>Show các sản phẩm vip còn lại</h1>";
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 1
            );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            woocommerce_product_loop_start();
            while ( $loop->have_posts() ) : 
                $loop->the_post();
                wc_get_template_part( 'content', 'product');
            endwhile;
            woocommerce_product_loop_end();
            do_action( 'woocommerce_after_shop_loop' );
        } else {
            echo __( 'No products found' );
        }
    }
}

?>