	</div>
	<footer>
		<p><?php bloginfo('name'); ?> | <?php echo date('Y'); ?></p>
		<?php wp_nav_menu( array(
			'theme_location'  => 'footer',
			'container'       => 'ul',
			'container_class' => 'nav',
			'menu_class'      => 'nav',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
		) ); ?>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
