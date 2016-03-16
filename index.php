<?php get_header(); ?>

<div class="content">
	<!-- The Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Post -->
		<?php
			/* Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );
		?>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
		<?php the_posts_navigation(); ?>
	<!-- no posts found -->
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>