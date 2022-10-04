<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewsX Paper
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'newsx-paper'); ?></a>
		<header class="header" id="header">
			<?php do_action('newsx_paper_mobile_menu'); ?>
			<?php
			$newsx_paper_header_top = get_theme_mod('newsx_paper_header_top', 1);
			?>
			<?php
			if ($newsx_paper_header_top) {
				do_action('newsx_paper_header_top');
			}

			?>
			<?php do_action('newsx_paper_header_logo'); ?>
			<?php do_action('newsx_paper_main_menu'); ?>
		</header>