<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<div class="container">
    <h1>This is a products page</h1>
</div>

<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );


    display_header("Main products");

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );
            

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );


    // start WP_query




    display_header("This month products");

    // $args = array(
    //     'category__and' => array(
    //         '29',
    //         '30',
    //         '31'
    //     )
    // );
    $args = array(
        'post_type'=>'product',
        'date_query'=> array(
            'after'    => array(
                'year'  => date("Y"),
                'month' => date('n')-1,
                'day'   => date('d'),
            )
        )
    );
    $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            woocommerce_product_loop_start();
            while ( $loop->have_posts() ) : $loop->the_post();
                wc_get_template_part( 'content', 'product');
            endwhile;
            woocommerce_product_loop_end();
            do_action( 'woocommerce_after_shop_loop' );
    } else {
        echo __( 'No products found' );
    }


    // May be you like

    display_header(" May be you like");

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 2
        );
    $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            woocommerce_product_loop_start();
            while ( $loop->have_posts() ) : $loop->the_post();
            
                wc_get_template_part( 'content', 'product');
            endwhile;
            woocommerce_product_loop_end();
            do_action( 'woocommerce_after_shop_loop' );
    } else {
        echo __( 'No products found' );
    }

















    // 

} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
