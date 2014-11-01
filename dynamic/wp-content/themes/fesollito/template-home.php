<?php
/*
Template name: Home
*/
?>
<?php get_header() ?>
			<div class="home-slider">
<?php 			if (function_exists('have_rows'))
				while (have_rows('sliders', 'option')) : the_row(); ?>
				<div class="slider"><?php my_acf_image('slide') ?></div>
<?php 			endwhile; ?>
			</div>
			<section class="home-shop">
				<h2 class="heading">Shop</h2>
				<div class="wrap">
					<?php echo apply_filters('the_content', '[featured_products per_page="12" columns="3"]') ?>
				</div>
			</section>
			<section class="home-blog">
				<h2 class="heading">Blog</h2>
				<ul class="wrap">
<?php 			$blog = new WP_Query('posts_per_page=4');
				while ($blog->have_posts()) : $blog->the_post(); ?>
					<li class="blog-item">
						<a href="<?php the_permalink() ?>">
							<div class="blog-image" style="background-image:url('<?php my_thumb_src() ?>')"></div>
							<h2 class="blog-title"><?php the_title() ?></h2>
							<time class="blog-date"><?php the_time('M, Y') ?></time>
						</a>
					</li>
<?php 			endwhile; ?>
				</ul>
			</section>
			<!--
			<div class="home-widgets" id="sobre">
				<div class="wrap">
					<div class="three-cols">
						<?php /*dynamic_sidebar('footer-1')*/ ?>
					</div>
					<div class="three-cols">
						<?php /*dynamic_sidebar('footer-2')*/ ?>
					</div>
					<div class="three-cols">
						<?php /*dynamic_sidebar('footer-3')*/ ?>
					</div>
				</div>
			</div>
			<div class="home-contact" id="contato">
				<div class="wrap">
					<section class="contact-form two-cols">
						<?php /*echo apply_filters('the_content', '[contact-form-7 id="21" title="Formulário de contato"]');*/ ?>
					</section>
					<section class="contact-info two-cols">
						<h3>Endereço</h3>
						<p>Rua Marino Félix, 33<br>Casa Verde – São Paulo – SP</p>
						<h3>Horários</h3>
						<p>Segunda à Sexta-Feira<br>10h ás 18hs</p>
						<p>Sábados<br>10h ás 16hs.</p>
					</section>
				</div>
			</div>
			-->
<?php get_footer() ?>