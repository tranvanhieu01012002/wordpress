<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package own-shop
 */

get_header();
own_shop_get_breadcrumbs_content();
own_shop_before_title();
if(true===get_theme_mod( 'own_shop_enable_page_title',true)) :
own_shop_get_title();
endif;
own_shop_after_title();

?>
<div class="<?php echo esc_attr(OWN_SHOP_CONTAINER_CLASS) ?>">
	<div id="primary" class="<?php echo esc_attr(get_theme_mod('own_shop_header_menu_style','style1')); ?> content-area">
		<main id="main" class="site-main" role="main">
			<div class="content-inner">
				<div class="row">
					<?php
						custom_registration_function();
					?>
				</div>
			</div>
		</main>
	</div>
</div>
<?php

get_footer();