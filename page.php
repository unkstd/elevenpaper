<?php get_header(); ?>
<div class="content">
    <?php
		if (have_posts()):
			while (have_posts()) : the_post(); ?>
                <div class="postpage">
                    <h1><?php the_title(); ?></h1>
                    <div class="postpage-content">
						<?php the_content() ?>
					</div>
                </div>
            <?php endwhile;
    	else:
			echo '<h1>Ничего не найдено 🤷</h1>';
		endif;
	?>
</div>
<?php get_footer(); ?>