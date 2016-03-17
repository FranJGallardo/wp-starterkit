<?php 
/**
 * The single post template.
 *
 * @package Theme
 */
?>


<?php get_header(); ?>
<!-- Contenido del post -->

<section>
	<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'single' ); ?>

	<?php the_post_navigation(); ?>

	<?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	?>

<?php endwhile; // end of the loop. ?>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>