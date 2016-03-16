	<!-- post -->
		<article>
			<header>
				<!-- Título de cada Post -->
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<!-- Fechas y autor del Post -->
				<?php theme_posted_on(); ?>
			</header>
			<figure><?php if(has_post_thumbnail( )){ the_post_thumbnail('large');}?></figure>
			<div>
				<!-- El Extracto -->
				<p><?php the_excerpt(); ?></p>
			</div>
		</article>