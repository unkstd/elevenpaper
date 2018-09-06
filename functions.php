<?php

// Stylesheet
function elevenpaper_res()
{
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'elevenpaper_res');

// Theme support
add_theme_support('html5', array('search-form'));
add_theme_support('post-thumbnails');
add_action( 'after_setup_theme', function() {
    add_theme_support( 'pageviews' );
});

// Navigation

register_nav_menus(array(
	'header' => __('Header Menu')
));

// Excerpt

function custom_short_excerpt($excerpt){
	$limit = 50;

	if (strlen($excerpt) > $limit) {
		return substr($excerpt, 0, strpos($excerpt, ' ', $limit));
	}

	return $excerpt;
}

add_filter('the_excerpt', 'custom_short_excerpt');

add_filter('excerpt_more', function($more) {
	return ' ...';
});