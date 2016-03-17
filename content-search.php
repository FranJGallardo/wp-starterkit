<?php
/**
 * Abstracting the results in search page
 * @package Theme
 */
?>

<article <?php post_class(); ?>>
	<header class="entry-header">
		<h1><?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?></h1>
		<!-- Fecha y autor -->
		<p><?php theme_posted_on(); ?></p>
		<!-- La categoría -->
		<span><?php the_category(); ?></span>
		<!-- Las etiquetas -->
		<span><?php the_tags( ); ?></span>
	</header><!-- .entry-header -->


	<section class="entry-content">
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'theme' ),
				'after'  => '</div>',
			) );
		?>
	</section><!-- .entry-content -->

	<footer>
		<?php theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->