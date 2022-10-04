<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewsX Paper
 */

?>

<footer id="colophon" class="site-footer pt-3 pb-3">
	<div class="container">
		<div class="info-news site-info text-center">
			&copy;
			<?php
			echo date_i18n(
				/* translators: Copyright date format, see https://www.php.net/date */
				_x('Y', 'copyright date format', 'newsx-paper')
			);
			?>
			<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
			<span class="sep"> | </span>
			<?php

			printf(esc_html__('Theme NewsX Paper by %s', 'newsx-paper'), '<a target="_blank" rel="developer" href="' . esc_url('https://wpthemespace.com') . '">' . esc_html__('wpthemespace.com', 'newsx-paper') . '</a>');
			?>
		</div>
	</div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>