<?php get_header(); ?>
<div class="content">
	<?php 
		if (have_posts()):
			while (have_posts()) : the_post(); ?>
				<article class="post">
					<div class="card" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);background-size: 100%;background-repeat: no-repeat;background-position: center;">
						<a href="<?php the_permalink(); ?>">
							<div class="cardWrapper">
								<div class="cardImgOverlay"></div>
								<div class="cardTitle">
									<div class="postInfo">
										<h2><?php the_title(); ?></h2>
										<span class="timeOfUpdate"><i class="fas fa-clock"></i> Дата изменения: <?php the_modified_time('Y-m-d'); ?></span>
										<span class="postExcerpt"><?php the_excerpt(); ?></span>
									</div>
								</div>
							</div>
						</a>
					</div>
				</article>
			<?php endwhile;
		else:
			echo '<h1>404<br>Ничего не найдено 🤷</h1>';
		endif;
	?>
</div>
<?php get_footer(); ?>