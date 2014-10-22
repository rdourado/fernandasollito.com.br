<?php get_header() ?>
			<div class="wrap">
<?php 			while (have_posts()) : the_post(); ?>
				<article class="entry h-entry" role="article">
					<header class="entry-head">
						<h1 class="entry-title p-name"><a class="u-url" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
					</header>
					<div class="entry-body e-content">
						<?php the_content() ?>
			
					</div>
				</article>
<?php 			endwhile; ?>
				<!-- </div> -->
			</div>
<?php get_footer() ?>