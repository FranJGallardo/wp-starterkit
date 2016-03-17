<?php
/**
 * Abstracting the general content
 * @package Theme
 */
?>
	<!-- post -->
		<article>
			<header>
				<!-- Título de cada Post -->
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<!-- Fechas y autor del Post -->
				<?php theme_posted_on(); ?>
			</header>
			<figure><?php if(has_post_thumbnail( )){ the_post_thumbnail('large');}?></figure>
				<!-- Descomentar para poner solo El Extracto -->
<!-- 			<div>
				<p><?php the_excerpt(); ?></p>
			</div> -->
			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sip' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'sip' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			<footer>
				<?php theme_entry_footer(); ?>
			</footer>
		</article>