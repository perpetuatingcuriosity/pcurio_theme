<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo get_stylesheet_uri(); ?>/images/pcurio.ico" />


<!-- Noto Sans -->
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!-- Raleway -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,200,500' rel='stylesheet' type='text/css'>

<!-- Icon Fonts -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<!-- Body -->
<body <?php body_class(); ?>>

<header class="fullBleed headerSection">
	<div class="container">

			<div class="site-branding">
				<h1 class="site-title"><a href="#" class="scroll-link" data-id="top-link" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>

			<div class="site-logo">
				<span class="svg-pcurio"</span>
			</div>
			
			<!-- Main Nav -->
			<nav class="main-navigation" role="navigation">
				<div class="menu-container">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</div>
			</nav><!-- /.main-navigation -->

	</div> <!-- /.container -->
</header>	


<!-- 	<div id="content" class="site-content"> -->





