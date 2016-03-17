<?php
/**
 * Abstracting the single article content
 * @package Theme
 */
?>

<article <?php post_class(); ?>>
	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
		<!-- Fecha y autor -->
		<p><?php theme_posted_on(); ?></p>
		<!-- La categoría -->
		<span><?php the_category(); ?></span>
		<!-- Las etiquetas -->
		<span><?php the_tags( ); ?></span>
	</header><!-- .entry-header -->

		<figure><?php if(has_post_thumbnail( )){ the_post_thumbnail('large');}?></figure>
		<!-- Descomentar para usar la imagen destacada como background -->
	<!-- <?php
			if (has_post_thumbnail()) {
					$thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );
					$thumbnail_url = $thumbnail_data[0];
			}
		?>
  		<article id="post-<?php the_ID(); ?>" class="post-imagen" style="background-image:url('<?php echo $thumbnail_url ?>'); background-size: cover; background-position: center; width: 100%; background-repeat: no-repeat;" <?php post_class('container-fluid'); ?> > -->
	<section class="entry-content">
		<?php the_content(); ?>
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
