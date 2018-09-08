<?php get_header(); ?>
<div class="content">
	<?php 
		if (have_posts()):
			while (have_posts()) : the_post(); ?>
				<article class="post">
					<div class="card" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);background-size: cover;background-repeat: no-repeat;background-position: center;">
						<a href="<?php the_permalink(); ?>">
							<div class="cardWrapper">
								<div class="cardImgOverlay"></div>
								<div class="cardTitle">
									<div class="postInfo">
										<span class="timeOfUpdate"><i class="fas fa-clock"></i> <?php the_modified_time('Y/m/d'); ?></span>
										<h2><?php the_title(); ?></h2>
									</div>
								</div>
							</div>
						</a>
					</div>
				</article>
			<?php endwhile;
		else:
			echo '<h1>Ничего не найдено 🤷</h1>';
		endif;
	?>
</div>
<?php get_footer(); ?>