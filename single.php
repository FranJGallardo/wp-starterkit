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
	<?php 
	while ( have_posts() ) : the_post();

	get_template_part( 'content', 'single' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

		if ( is_singular( 'attachment' ) ) {
						// Parent post navigation.
						the_post_navigation( array(
							'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'theme' ),
						) );
					} elseif ( is_singular( 'post' ) ) {
						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'theme' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'theme' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'theme' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'theme' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );
					}

					// End of the loop.
				endwhile;
	?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>