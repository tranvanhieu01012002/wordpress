<?php
/**
 * VW Pet Shop: Block Patterns
 *
 * @package VW Pet Shop
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'vw-pet-shop',
		array( 'label' => __( 'VW Pet Shop', 'vw-pet-shop' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'vw-pet-shop/banner-section',
		array(
			'title'      => __( 'Banner Section', 'vw-pet-shop' ),
			'categories' => array( 'vw-pet-shop' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/slider.png\",\"id\":3591,\"dimRatio\":30,\"align\":\"full\",\"className\":\"sliderbox\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim-30 has-background-dim sliderbox\" style=\"background-image:url(" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/slider.png)\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\",\"className\":\"mx-md-5 px-md-5 mx-0\"} -->\n<div class=\"wp-block-columns alignwide mx-md-5 px-md-5 mx-0\"><!-- wp:column {\"verticalAlignment\":\"center\",\"className\":\"mx-5\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center mx-5\"><!-- wp:heading {\"level\":1,\"className\":\"mb-0\",\"style\":{\"typography\":{\"fontSize\":38}}} -->\n<h1 class=\"mb-0\" style=\"font-size:38px\"><strong>LOREM IPSIM IS SIMPLY DUMMY TEXT</strong></h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"className\":\"mb-0\",\"style\":{\"typography\":{\"fontSize\":15}}} -->\n<p class=\"mb-0\" style=\"font-size:15px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever &nbsp;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"borderRadius\":30,\"style\":{\"color\":{\"background\":\"#932b82\"}},\"textColor\":\"white\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-text-color has-background\" style=\"border-radius:30px;background-color:#932b82\"><strong>SHOP NOW</strong></a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'vw-pet-shop/product-section',
		array(
			'title'      => __( 'Product Section', 'vw-pet-shop' ),
			'categories' => array( 'vw-pet-shop' ),
			'content'    => "<!-- wp:group {\"align\":\"wide\",\"className\":\"product-box my-5 mx-md-5 mx-0\"} -->\n<div class=\"wp-block-group alignwide product-box my-5 mx-md-5 mx-0\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"left\",\"className\":\"text-left mb-4\",\"style\":{\"typography\":{\"fontSize\":25}}} -->\n<h2 class=\"has-text-align-left text-left mb-4\" style=\"font-size:25px\"><strong>PETS COLLECTION</strong></h2>\n<!-- /wp:heading -->\n\n<!-- wp:woocommerce/product-category {\"columns\":4,\"rows\":1,\"alignButtons\":true,\"categories\":[15],\"contentVisibility\":{\"title\":true,\"price\":true,\"rating\":true,\"button\":true},\"align\":\"wide\",\"className\":\"mx-md-0\"} /--></div></div>\n<!-- /wp:group -->",
		)
	);
}