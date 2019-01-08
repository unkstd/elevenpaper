<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function debug($str) {
	echo '<pre class="php_error">';
	var_dump($str);
	echo '<i class="error_close far fa-times"></i></pre>';
	exit;
}

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<!-- Meta Info -->
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="twitter:widgets:theme" content="light">
	<meta name="twitter:widgets:link-color" content="#55acee">
	<meta name="twitter:widgets:border-color" content="#55acee">
	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory') ?>/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory') ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory') ?>/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory') ?>/favicons/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo('template_directory') ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="apple-mobile-web-app-title" content="elevenpaper">
	<meta name="application-name" content="elevenpaper">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="theme-color" content="#ffffff">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700|Montserrat:300,400,400i,600,700|Roboto+Mono&amp;subset=cyrillic" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="searchForm deactive-s">
		<?php get_search_form(); ?>
	</div>
	<header>
		<div class="menuButton">
			<button id="btn-menubar">
				<span>
					<i class="fas fa-bars"></i>
				</span>
			</button>
			<button id="btn-menu-close" class="disable">
				<span>
					<i class="far fa-times"></i>
				</span>
			</button>
		</div>
		<div class="searchButton">
			<button id="btn-search-min">
				<span>
					<i class="fa fa-search"></i>
				</span>
			</button>
			<button id="btn-search-close-min" class="disable">
				<span>
					<i class="far fa-times"></i>
				</span>
			</button>
		 </div>
		<a href="<?php echo home_url(); ?>" class="logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 493.01 47.71"><title>Ресурс 1</title><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><path class="cls-1" d="M53.13,16.6q3.76,3.72,3.76,11.18V47.27h-8V28.79q0-4.45-2-6.72a7.16,7.16,0,0,0-5.67-2.26,8.28,8.28,0,0,0-6.43,2.65c-1.62,1.76-2.42,4.28-2.42,7.54V47.27h-8V28.79q0-4.45-2-6.72a7.16,7.16,0,0,0-5.67-2.26,8.34,8.34,0,0,0-6.47,2.61C8.76,24.17,8,26.69,8,30V47.27H0v-34H7.58v4.33a12.38,12.38,0,0,1,4.78-3.5,16.15,16.15,0,0,1,6.37-1.21,15.43,15.43,0,0,1,6.78,1.43,11,11,0,0,1,4.69,4.24,14,14,0,0,1,5.41-4.17,17.57,17.57,0,0,1,7.33-1.5Q49.38,12.87,53.13,16.6Z"/><path class="cls-1" d="M91.58,16.47q4,3.6,4,10.86V47.27H88V43.13a9.31,9.31,0,0,1-4.17,3.41,16.43,16.43,0,0,1-6.53,1.17,16,16,0,0,1-6.69-1.3,10.34,10.34,0,0,1-4.43-3.63,9.22,9.22,0,0,1-1.56-5.26,9,9,0,0,1,3.41-7.36q3.41-2.76,10.73-2.77h8.79v-.51a7,7,0,0,0-2.13-5.48c-1.42-1.27-3.54-1.91-6.34-1.91a18.18,18.18,0,0,0-5.64.9,13.81,13.81,0,0,0-4.68,2.48l-3.12-5.8A19.27,19.27,0,0,1,72.11,14a28.74,28.74,0,0,1,8-1.08Q87.6,12.87,91.58,16.47ZM84.31,40.55a7.41,7.41,0,0,0,3.28-3.92v-4H79.38q-6.88,0-6.88,4.52a4,4,0,0,0,1.72,3.44A7.86,7.86,0,0,0,79,41.92,10.3,10.3,0,0,0,84.31,40.55Z"/><path class="cls-1" d="M139.38,0V47.27h-7.64v-4.4a12.22,12.22,0,0,1-4.87,3.63,16.45,16.45,0,0,1-6.41,1.21,18,18,0,0,1-8.82-2.16,15.55,15.55,0,0,1-6.15-6.15,18.44,18.44,0,0,1-2.23-9.14,18.27,18.27,0,0,1,2.23-9.11A15.73,15.73,0,0,1,111.64,15a18,18,0,0,1,8.82-2.16A16.08,16.08,0,0,1,126.64,14a12.39,12.39,0,0,1,4.78,3.44V0Zm-12.8,39.59a9.42,9.42,0,0,0,3.63-3.72,11.46,11.46,0,0,0,1.34-5.61,11.46,11.46,0,0,0-1.34-5.61,9.42,9.42,0,0,0-3.63-3.72,10.82,10.82,0,0,0-10.32,0,9.42,9.42,0,0,0-3.63,3.72,11.46,11.46,0,0,0-1.34,5.61,11.46,11.46,0,0,0,1.34,5.61,9.42,9.42,0,0,0,3.63,3.72,10.82,10.82,0,0,0,10.32,0Z"/><path class="cls-1" d="M181.68,32.81H155a9.24,9.24,0,0,0,3.67,5.95A11.94,11.94,0,0,0,166,41a12.41,12.41,0,0,0,9.24-3.69l4.27,4.9a14.29,14.29,0,0,1-5.8,4.14A23,23,0,0,1,156,45.49a16.05,16.05,0,0,1-6.6-6.22,17.5,17.5,0,0,1-2.32-9,17.77,17.77,0,0,1,2.26-9,16.09,16.09,0,0,1,6.28-6.21,18.25,18.25,0,0,1,9-2.23,17.81,17.81,0,0,1,8.89,2.2,15.46,15.46,0,0,1,6.11,6.18,18.66,18.66,0,0,1,2.2,9.2C181.81,31,181.77,31.79,181.68,32.81ZM158.15,21.5a9.49,9.49,0,0,0-3.22,6h19.3a9.29,9.29,0,0,0-9.62-8.28A9.57,9.57,0,0,0,158.15,21.5Z"/><path class="cls-1" d="M190.22,2.68h8.28V47.27h-8.28Z"/><path class="cls-1" d="M239.4,16.63q3.89,3.75,3.89,11.15V47.27h-8V28.79q0-4.45-2.1-6.72a7.8,7.8,0,0,0-6-2.26,9.16,9.16,0,0,0-6.94,2.65q-2.55,2.64-2.55,7.61v17.2h-8v-34h7.58v4.4a12.43,12.43,0,0,1,5-3.57,17.77,17.77,0,0,1,6.75-1.21Q235.52,12.87,239.4,16.63Z"/><path class="cls-1" d="M295,2.68,275.52,47.27h-8.15L247.87,2.68h9l14.84,34.4,15-34.4Z"/><path class="cls-1" d="M329.67,0V47.27H322v-4.4a12.16,12.16,0,0,1-4.87,3.63,16.4,16.4,0,0,1-6.4,1.21,18,18,0,0,1-8.82-2.16,15.49,15.49,0,0,1-6.15-6.15,18.34,18.34,0,0,1-2.23-9.14,18.17,18.17,0,0,1,2.23-9.11A15.67,15.67,0,0,1,301.93,15a18,18,0,0,1,8.82-2.16A16.08,16.08,0,0,1,316.93,14a12.39,12.39,0,0,1,4.78,3.44V0ZM316.86,39.59a9.51,9.51,0,0,0,3.64-3.72,11.46,11.46,0,0,0,1.33-5.61,11.46,11.46,0,0,0-1.33-5.61,9.51,9.51,0,0,0-3.64-3.72,10.8,10.8,0,0,0-10.31,0,9.51,9.51,0,0,0-3.64,3.72,11.46,11.46,0,0,0-1.33,5.61,11.46,11.46,0,0,0,1.33,5.61,9.51,9.51,0,0,0,3.64,3.72,10.8,10.8,0,0,0,10.31,0Z"/><path class="cls-1" d="M346.1,45.49a16.25,16.25,0,0,1-6.46-6.22,17.51,17.51,0,0,1-2.33-9,17.37,17.37,0,0,1,2.33-9,16.29,16.29,0,0,1,6.46-6.18,20.65,20.65,0,0,1,18.67,0,16.32,16.32,0,0,1,6.47,6.18,17.36,17.36,0,0,1,2.32,9,17.5,17.5,0,0,1-2.32,9,16.28,16.28,0,0,1-6.47,6.22,20.74,20.74,0,0,1-18.67,0ZM362.67,38a10.54,10.54,0,0,0,2.86-7.71,10.56,10.56,0,0,0-2.86-7.71,9.74,9.74,0,0,0-7.26-2.93,9.62,9.62,0,0,0-7.23,2.93,10.63,10.63,0,0,0-2.84,7.71A10.61,10.61,0,0,0,348.18,38a9.62,9.62,0,0,0,7.23,2.93A9.74,9.74,0,0,0,362.67,38Z"/><path class="cls-1" d="M410.83,16.63q3.89,3.75,3.88,11.15V47.27h-8V28.79q0-4.45-2.1-6.72a7.8,7.8,0,0,0-6-2.26,9.16,9.16,0,0,0-6.94,2.65q-2.55,2.64-2.55,7.61v17.2h-8v-34h7.58v4.4a12.43,12.43,0,0,1,5-3.57,17.77,17.77,0,0,1,6.75-1.21Q406.95,12.87,410.83,16.63Z"/><path class="cls-1" d="M427.26,46.63a20.15,20.15,0,0,1-6.3-2.74l3.06-6a19.29,19.29,0,0,0,5.51,2.45,22.67,22.67,0,0,0,6.33.93c4.76,0,7.14-1.26,7.14-3.76A2.52,2.52,0,0,0,441.18,35a31.6,31.6,0,0,0-5.83-1.33,48.1,48.1,0,0,1-6.84-1.47,10.44,10.44,0,0,1-4.59-2.9A8.06,8.06,0,0,1,422,23.51a9,9,0,0,1,4-7.74q4.05-2.91,10.93-2.9a31.51,31.51,0,0,1,7,.79,20,20,0,0,1,5.74,2.14l-3.06,6.05a18.87,18.87,0,0,0-9.75-2.55,10.83,10.83,0,0,0-5.32,1.05,3.14,3.14,0,0,0-1.81,2.77,2.77,2.77,0,0,0,1.94,2.71,31.16,31.16,0,0,0,6,1.5,46.1,46.1,0,0,1,6.69,1.46,10.51,10.51,0,0,1,4.49,2.81,7.8,7.8,0,0,1,1.88,5.6,8.87,8.87,0,0,1-4.14,7.65q-4.14,2.86-11.28,2.86A30.57,30.57,0,0,1,427.26,46.63Z"/><path class="cls-1" d="M471.54,32.68l-5.93,5.61v9h-8V0h8V28.54l16.5-15.29h9.56L477.46,27.52,493,47.27h-9.69Z"/></g></g></svg></a>
		<ul class="nav">
			<li class="searchButton">
				<button id="btn-search-max">
					<span>
						Поиск
						<i class="fa fa-search"></i>
					</span>
				</button>
				<button id="btn-search-close-max" class="disable">
					<span>
						Закрыть
						<i class="far fa-times"></i>
					</span>
				</button>
			</li>
			<?php wp_nav_menu( array(
				'theme_location'  => 'header',
				'container'       => 'ul',
				'container_class' => 'nav',
				'menu_class'      => 'nav',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
			) ); ?>
		</ul>
	</header>
	<div class="disable" id="progress"></div>
	<div class="content-disable deactive"></div>
	<?php wp_nav_menu( array(
		'theme_location'  => 'header',
		'container'       => 'ul',
		'container_class' => 'm-nav disable',
		'menu_class'      => 'm-nav disable',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
		'depth'           => 0,
	) ); ?>

	<div class="bodyContent">
