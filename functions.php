<?php

// Stylesheet
function elevenpaper_res()
{
	wp_enqueue_style('style', get_stylesheet_uri());

	global $wp_scripts;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/public/app.js', array('jquery'), '', true );
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