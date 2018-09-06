<?php get_header(); ?>
<div class="content">
	<?php 
		if (have_posts()):
			while (have_posts()) : the_post(); ?>
				<div class="postpage">
					<h1 class="postpage-name"><?php the_title(); ?></h1>
					<div class="postpage-info">
						<span class="postpage-info-author">
							<?php if ( function_exists( 'wpsabox_author_box' ) ) echo wpsabox_author_box(); ?>
						</span>
						<span class="postpage-info-time">
							<span>
								<img src="<?php bloginfo('template_directory') ?>/img/icons/clock.svg" alt="Иконка часов">
							</span>
							<p><?php the_time('j F') ?></p>
						</span>
					</div>
					<section class="postpage-img" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);background-size: 100%;background-repeat: no-repeat;background-position: center;"></section>
					<div class="postpage-content">
						<?php the_content() ?>
					</div>
					<div class="postpage-moreinfo">
						Просмотров: 123000 <?php // do_action( 'pageviews' ); ?> ‧ <?php the_category( ', ', $post->ID ); ?>
					</div>
				</div>
			<?php endwhile;
		else:
			echo '<h1>404<br>Ничего не найдено 🤷</h1>';
		endif;
	?>
</div>
<?php get_footer(); ?>