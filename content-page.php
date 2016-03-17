<?php
/**
 * Template used for content page template
 * @package Theme
 */
?>

<article <?php post_class(); ?>>
	<header class="entry-header">
		<h1><?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?></h1>
	</header><!-- .entry-header -->


	<section class="entry-content">
		<?php the_content(); ?>
	</section><!-- .entry-content -->

</article><!-- #post-## -->