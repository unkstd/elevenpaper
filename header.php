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
	<title><?php bloginfo('name'); wp_title("|"); ?></title>
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
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="searchForm deactive-s">
		<?php get_search_form(); ?>
	</div>

	<div id="progress"></div>
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
		<a href="<?php echo home_url(); ?>" class="logo" style="background: url('<?php bloginfo('template_directory') ?>/public/img/logo_black.svg') no-repeat center"></a>
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