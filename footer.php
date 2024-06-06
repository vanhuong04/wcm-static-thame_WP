<d?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wcm-static
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer__top">
			<div class="footer_colunm1">
			    <?php dynamic_sidebar( 'footer-1' ); ?>
				<?php  echo do_shortcode('[contact-form-7 id="081291d" title="Chưa có tiêu đề"]') ?>
			</div>
			<div class="footer_colunm2">
			    <?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
			<div class="footer_colunm3">
			    <?php dynamic_sidebar( 'footer-3' ); ?>
		 	</div>
			<div class="footer_colunm4">
			    <?php dynamic_sidebar( 'footer-4' ); ?>
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wcm-static' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'wcm-static' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wcm-static' ), 'wcm-static', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<!-- #page -->
</div>
<?php wp_footer(); ?>

</body>
</html>
