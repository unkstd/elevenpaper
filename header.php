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
		<a href="<?php echo home_url(); ?>" class="logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 692.2 100.31" fill="rgb(24,24,27)"><title>logo</title><g id="Слой_2" data-name="Слой 2"><g id="logo" data-name="Слой 1"><path d="M47.48,62.69,54.55,71a23.36,23.36,0,0,1-9.65,7,35.31,35.31,0,0,1-13.28,2.36A35.41,35.41,0,0,1,15,76.52,27,27,0,0,1,3.91,66.07,29.47,29.47,0,0,1,0,50.91,30,30,0,0,1,3.8,35.85,27.07,27.07,0,0,1,14.31,25.4a30.48,30.48,0,0,1,15.16-3.75A30.83,30.83,0,0,1,44.1,25.13a26.23,26.23,0,0,1,10.45,10,29.11,29.11,0,0,1,3.86,15.16L14.58,58.84a15,15,0,0,0,6.53,7.5,21.53,21.53,0,0,0,10.83,2.57A21.08,21.08,0,0,0,47.48,62.69Zm-30-25.5Q13,42,13,50.16v.1l32.36-6.21a15.24,15.24,0,0,0-5.62-8.47,16.48,16.48,0,0,0-10.24-3.21A15.66,15.66,0,0,0,17.52,37.19Z"/><path d="M76.25,75.39q-5-4.87-5-13.77V0H84.66V60.66q0,8.58,8,8.57a10.54,10.54,0,0,0,4.82-1.07l.65,10.72a22.87,22.87,0,0,1-8,1.39Q81.24,80.27,76.25,75.39Z"/><path d="M149,62.69,156,71a23.36,23.36,0,0,1-9.65,7,38.63,38.63,0,0,1-29.9-1.39A27,27,0,0,1,105.4,66.07a29.47,29.47,0,0,1-3.91-15.16,30,30,0,0,1,3.8-15.06A27.07,27.07,0,0,1,115.8,25.4,30.48,30.48,0,0,1,131,21.65a30.83,30.83,0,0,1,14.63,3.48A26.23,26.23,0,0,1,156,35.1a29.11,29.11,0,0,1,3.86,15.16l-43.84,8.58a15,15,0,0,0,6.54,7.5,21.53,21.53,0,0,0,10.83,2.57A21.08,21.08,0,0,0,149,62.69Zm-30-25.5q-4.56,4.81-4.55,13v.1l32.36-6.21a15.24,15.24,0,0,0-5.62-8.47A16.48,16.48,0,0,0,131,32.37,15.66,15.66,0,0,0,119,37.19Z"/><path d="M225.27,22.29,200.73,79.52H186.9L162.36,22.29h13.93l17.79,42.44,18.33-42.44Z"/><path d="M274.78,62.69,281.85,71a23.33,23.33,0,0,1-9.64,7,38.63,38.63,0,0,1-29.9-1.39,26.91,26.91,0,0,1-11.09-10.45,29.47,29.47,0,0,1-3.92-15.16,29.89,29.89,0,0,1,3.81-15.06,27,27,0,0,1,10.5-10.45,30.52,30.52,0,0,1,15.17-3.75,30.89,30.89,0,0,1,14.63,3.48,26.2,26.2,0,0,1,10.44,10,29,29,0,0,1,3.86,15.16l-43.83,8.58a15,15,0,0,0,6.54,7.5,21.52,21.52,0,0,0,10.82,2.57A21.05,21.05,0,0,0,274.78,62.69Zm-29.95-25.5q-4.56,4.81-4.56,13v.1l32.37-6.21A15.25,15.25,0,0,0,267,35.58a16.43,16.43,0,0,0-10.23-3.21A15.65,15.65,0,0,0,244.83,37.19Z"/><path d="M348.41,28q6.52,6.33,6.53,18.76V79.52H341.55V48.44q0-7.5-3.54-11.31t-10.07-3.8q-7.4,0-11.69,4.45T312,50.58V79.52h-13.4V22.29h12.76v7.4a20.8,20.8,0,0,1,8.35-6,30.06,30.06,0,0,1,11.36-2Q341.87,21.65,348.41,28Z"/><path d="M418.66,25.29A26.3,26.3,0,0,1,429,35.58a30.65,30.65,0,0,1,3.75,15.33A31,31,0,0,1,429,66.29a26.23,26.23,0,0,1-10.34,10.34,30.39,30.39,0,0,1-15,3.64q-11.58,0-18.33-7.72v27.76H372v-78h12.76v7.5a20.63,20.63,0,0,1,8.19-6.1,27.72,27.72,0,0,1,10.78-2A30.39,30.39,0,0,1,418.66,25.29Zm-4.29,38.58c3.18-3.28,4.77-7.61,4.77-13s-1.59-9.68-4.77-13A16.19,16.19,0,0,0,402.21,33a17.22,17.22,0,0,0-8.69,2.2,15.81,15.81,0,0,0-6.1,6.27,19.15,19.15,0,0,0-2.25,9.43,19.2,19.2,0,0,0,2.25,9.43,15.94,15.94,0,0,0,6.1,6.27,17.32,17.32,0,0,0,8.69,2.19A16.19,16.19,0,0,0,414.37,63.87Z"/><path d="M501.44,22.29V79.52H488.69V72.13a20.73,20.73,0,0,1-8.2,6.1,27.63,27.63,0,0,1-10.77,2,30.39,30.39,0,0,1-15-3.64,26,26,0,0,1-10.29-10.29,31.28,31.28,0,0,1-3.69-15.43,31,31,0,0,1,3.69-15.38,26.05,26.05,0,0,1,10.29-10.24,30.39,30.39,0,0,1,15-3.64A26.46,26.46,0,0,1,480,23.58a22.52,22.52,0,0,1,8.09,5.68v-7Zm-18,41.58c3.21-3.28,4.82-7.61,4.82-13s-1.61-9.68-4.82-13A16.37,16.37,0,0,0,471.22,33a16.17,16.17,0,0,0-12.16,4.93q-4.77,4.94-4.77,13c0,5.35,1.59,9.68,4.77,13a16.17,16.17,0,0,0,12.16,4.93A16.37,16.37,0,0,0,483.44,63.87Z"/><path d="M565.69,25.29A26.3,26.3,0,0,1,576,35.58a30.65,30.65,0,0,1,3.75,15.33A31,31,0,0,1,576,66.29a26.23,26.23,0,0,1-10.34,10.34,30.36,30.36,0,0,1-15,3.64q-11.58,0-18.32-7.72v27.76H519v-78h12.75v7.5a20.73,20.73,0,0,1,8.2-6.1,27.63,27.63,0,0,1,10.77-2A30.36,30.36,0,0,1,565.69,25.29ZM561.4,63.87c3.18-3.28,4.77-7.61,4.77-13s-1.59-9.68-4.77-13A16.17,16.17,0,0,0,549.24,33a17.18,17.18,0,0,0-8.68,2.2,15.83,15.83,0,0,0-6.11,6.27,19.15,19.15,0,0,0-2.25,9.43,19.2,19.2,0,0,0,2.25,9.43,16,16,0,0,0,6.11,6.27,17.28,17.28,0,0,0,8.68,2.19A16.17,16.17,0,0,0,561.4,63.87Z"/><path d="M635.3,62.69,642.37,71a23.36,23.36,0,0,1-9.65,7,38.63,38.63,0,0,1-29.9-1.39,27,27,0,0,1-11.09-10.45,29.47,29.47,0,0,1-3.91-15.16,30,30,0,0,1,3.8-15.06A27.07,27.07,0,0,1,602.13,25.4a30.48,30.48,0,0,1,15.16-3.75,30.83,30.83,0,0,1,14.63,3.48,26.16,26.16,0,0,1,10.45,10,29.11,29.11,0,0,1,3.86,15.16L602.4,58.84a15,15,0,0,0,6.53,7.5,21.53,21.53,0,0,0,10.83,2.57A21.08,21.08,0,0,0,635.3,62.69Zm-30-25.5q-4.55,4.81-4.55,13v.1l32.36-6.21a15.24,15.24,0,0,0-5.62-8.47,16.48,16.48,0,0,0-10.24-3.21A15.66,15.66,0,0,0,605.34,37.19Z"/><path d="M692.2,21.65V34.4a17.35,17.35,0,0,0-3.1-.32q-7.83,0-12.22,4.56t-4.4,13.12V79.52H659.09V22.29h12.75v8.36Q677.63,21.65,692.2,21.65Z"/></g></g></svg></a>
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
