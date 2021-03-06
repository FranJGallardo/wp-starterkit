<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Theme
 */
?>

		<footer>
			<small>Fran Gallardo · Product Designer. © <?php echo date("Y") ?></small>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'theme_update_available( $theme );' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'theme' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'theme' ), 'Theme', '<a href="http://gallardoramos.com/" rel="designer">Fran Gallardo - Product Designer</a>' ); ?>
		</div><!-- .site-info -->
		</footer>
	<?php wp_footer(); ?>
	</body>
</html>