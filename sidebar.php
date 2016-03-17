<?php 
/**
 * The sidebar with the main widget area.
 *
 * @package Theme
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>