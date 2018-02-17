<?php
/*
Theme Name: BIT Trade Theme
Theme URI: http://whenalive.com/
Author: Dhananjaya Maha Malage
Author URI: http://whenalive.com/
Description: BIT Trade theme for wordpress.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
Text Domain: bittrade

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="cleartype" content="on">
	<meta name="MobileOptimized" content="320">
	<meta name="HandheldFriendly" content="True">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<meta name="resource-type" content="document" />
	<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
	<meta http-equiv="content-language" content="en-us" />
	<meta name="author" content="Dhananjaya Maha Malage" />
	<meta name="contact" content="dmmdust@gmail.com" />
	<meta name="copyright" content="Copyright (c)2014-<?php echo date('Y'); ?> Dhananjaya Maha Malage. All Rights Reserved." />

	<?php wp_head(); ?>

</head>
<body>

<?php if(is_home() || is_front_page()): ?>
<div class="pre-loader" id="preLoader" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/main-background.jpg');">
	<figure id="preLoaderButton">
		<p><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white-32.png"> BIT Trade</p>
	</figure>
</div>
<?php endif; ?>

<nav id="menu">
	<header>
		<div class="sidenav">

			<span class="menu-title">MENU</span>

			<div class="sidenav-primary">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</div>

			<hr />

			<div class="sidenav-secondary">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
			</div>

			<div class="sidenav-main-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</div>

			<div class="sidenav-login">
				<a href="#">Login</a>
			</div>

			<div class="sidenav-copyright">
				<p>&copy; 2018 bittrade</p>
				<a href="#">terms and conditions</a>
			</div>

			<div class="sidenav-social">
				<a href="#" class="social-fb"><i class="fa fa-facebook-f"></i></a>
				<a href="#" class="social-in"><i class="fa fa-instagram"></i></a>
				<a href="#" class="social-tw"><i class="fa fa-twitter"></i></a>
			</div>

		</div>
	</header>
</nav>

<main id="panel">

<div class="row-fluid">
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<span class="toggle-button menu-icon">&#9776; MENU</span>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<p class="logo-main">
			<a href="#">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-dark.png" alt="logo">
			</a>
		</p>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<span class="login-top-right">Login</span>
	</div>
</div>

<div class="clear"></div>