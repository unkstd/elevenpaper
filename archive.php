<?php get_header(); ?>
<div class="content">
	<?php 
		if (have_posts()): ?>

			<h2><?php 

				if(is_category()) {
					single_cat_title();
				} elseif(is_tag()) {
					single_tag_title();
				} elseif (is_author()) {
					the_post();
					echo 'Статьи от пользователя "' . get_the_author() . '"';
					rewind_posts();
				} elseif (is_day()) {
					echo "Статьи за: " . get_the_date();
				} elseif (is_month()) {
					echo "Статьи за: " . get_the_date('F Y');
				} elseif (is_year()) {
					echo "Статьи за: " . get_the_date('Y');
				} else {
					echo "Архив";
				}

			?></h2>

			<?php while (have_posts()) : the_post(); ?>
				<article class="post">
					<div class="card" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);background-size: cover;background-repeat: no-repeat;background-position: center;">
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
			echo '<p>No content found</p>';
		endif;
	?>
</div>
<?php get_footer(); ?>