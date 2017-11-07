<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>UPA Escuela</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="Webflow" name="generator">
	<link href="<?php bloginfo('template_url'); ?>/css/normalize.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/webflow.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/upa-escuela.webflow.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.min.css" id="toggleCSS"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/alertify.core.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/alertify.default.css" id="toggleCSS"/>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
	<script type="text/javascript">WebFont.load({
		google: {
			families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
		}
	});
	const templateurl = '<?php bloginfo('template_url'); ?>';
	const home = '<?php bloginfo('home'); ?>';
</script>
<!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
</script>
<link href="<?php bloginfo('template_url'); ?>/images/icon.jpg" rel="shortcut icon" type="image/x-icon">
<link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header_content">
		<div class="div1180 w-clearfix">
			<div class="menucontent w-nav" data-animation="default" data-collapse="medium" data-duration="400">
				<div class="containermen w-container">
					<a class="logoescuela w-clearfix w-nav-brand" href="<?php bloginfo('home'); ?>">
						<img class="imglogo" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Escuela UPA logo">
					</a>
					<div class="menbot w-nav-button">
						<div class="iconbot w-icon-nav-menu"></div>
					</div>
					<div class="buscar w-clearfix">
						<form class="formcontent w-clearfix" name="search-form" method="GET" action="<?php echo esc_url(get_site_url('/')); ?>">
							<input class="textbuscar w-input" data-name="buscar" id="buscar" maxlength="256" value="<?php the_search_query(); ?>" name="s" placeholder="Buscar" required="required" type="text">
							<input class="lupita w-button" type="submit" value="Submit">
						</form>
					</div>
					<nav class="nav-menu w-nav-menu" role="navigation">
						<?php wp_nav_menu(array('menu' => 'Menu Principal', 'container_class' => 'wpmenu')); ?>
					</nav>
				</div>
			</div>
		</div>
	</header>