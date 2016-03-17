<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Theme
 */

get_header(); ?>

	<div class="content">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'theme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'theme' ); ?></p>

					<?php get_search_form(); ?>
					<p><?php _e( 'Maybe the recent posts?', 'theme' ); ?></p>
					<p><?php the_widget( 'WP_Widget_Recent_Posts' ); ?></p>
					<p><?php _e( 'You can search by Categories too', 'theme' ); ?></p>
					<p><?php echo get_the_category_list(__(', ','theme') ); ?></p>
				</div><!-- .page-content -->
					
			</section><!-- .error-404 -->

	</div><!-- #primary -->

<?php get_footer(); ?>
