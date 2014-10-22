<?php
/*
Template name: Blog
*/
?>
<?php get_header() ?>
			<div class="wrap">
				<div class="content">
<?php 				while (have_posts()) : the_post(); ?>
					<article class="entry h-entry" role="article">
						<header class="entry-head">
							<h1 class="entry-title p-name"><a class="u-url" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
							<time class="entry-date dt-published" datetime="<?php the_time('c') ?>"><?php the_time('M d, Y') ?></time>
						</header>
						<div class="entry-body e-content">
							<?php the_content() ?>

							<p class="entry-share">
								<a href="<?php my_pin_url() ?>" target="_blank"><img alt="Pinterest" class="social-icon" height="35" src="<?php bloginfo('template_url') ?>/img/social-pin.png" width="36"></a>&nbsp;
								<a href="<?php my_fb_url() ?>" target="_blank"><img alt="Facebook" class="social-icon" height="35" src="<?php bloginfo('template_url') ?>/img/social-fb.png" width="36"></a>&nbsp;
								<a href="<?php comments_link() ?>"><img alt="Comments" class="social-icon" height="35" src="<?php bloginfo('template_url') ?>/img/social-comm.png" width="36"></a>&nbsp;
								<a href=""><img alt="Love" class="social-icon" height="35" src="<?php bloginfo('template_url') ?>/img/social-love.png" width="36"></a>
							</p>
						</div>
					</article>
<?php 				endwhile; ?>
<?php 				if (!is_single()) : ?>
					<div class="pagination">
						<?php previous_posts_link('Novos') ?>
						<?php next_posts_link('Antigos') ?>
					</div>
<?php 				endif; ?>
				</div>
				<div class="widgets">
<?php 				dynamic_sidebar('sidebar-1') ?>
				</div>
			</div>
<?php 		if (is_single()) : ?>
			<section class="comments">
				<div class="wrap">
<?php 				comments_template() ?>
				</div>
			</section>
<?php 		endif; ?>
<?php get_footer() ?>