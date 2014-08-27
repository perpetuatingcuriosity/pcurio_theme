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
<title><?php bloginfo('name'); ?> | Alex Bain’s portfolio</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo bloginfo( 'template_directory' ); ?>/images/pcurio.ico" />


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


	<?php if ( is_front_page() ) : ?>

<header class="fullBleed headerSection">
	<div class="container">
			<!-- HOME PAGE NAVIGATION -->
			<div class="site-branding main-menu">
				<h1 class="site-title"><a href="#" class="scroll-link" data-id="top-link" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>

			<div class="site-logo main-menu">
				<!-- <span class="svg-pcurio"></span> -->
				<div class="mobileNav">
					<svg viewBox="0 0 11 10" enable-background="new 0 0 11 10" xml:space="preserve">
			    	<rect width="11" height="2"/>
			    	<rect y="4" width="11" height="2"/>
			    	<rect y="8" width="11" height="2"/>
			    	</svg>
				</div>	
			</div>
			
			<!-- Main Nav -->
			<nav class="main-navigation main-menu" role="navigation">
			
			 	<!-- NAVIGATION -->
				<ul id="menu">
					<li><a href="#" class="scroll-link" data-id="about-link">About</a></li>
					<li><a href="#" class="scroll-link" data-id="work-link">Work</a></li>
					<li><a href="#" class="scroll-link" data-id="bloglink">Blog</a></li>
				</ul> <!-- /.NAVIGATION -->

			</nav><!-- /.main-navigation -->
	</div> <!-- /.container -->
</header>	

<!-- ---------------------------------------------------------------- -->

<?php else: ?>

<!-- PAGES NAVIGATION (OTHER THAN HOME)  -->
<header class="fullBleed headerSection pagesNav">
	<div class="container">

		<div class="site-branding">
			<a href="<?php echo home_url(); ?>#blog-link" rel="home">
			<span class="svg-arrowleft"></span><!-- <h1 class="site-title">Main</h1> -->
			</a>
		</div>

		<div class="site-logo">
			<!-- <span class="svg-pcurio"></span> -->
		</div>

		<!-- Main Nav -->
		<nav class="main-navigation" role="navigation">
		 	<!-- NAVIGATION -->
			<ul>
				<li><a href="#" class="scroll-link" data-id="blog-link">More Posts</a></li>
			</ul> <!-- /.NAVIGATION -->
		</nav><!-- /.main-navigation -->
	</div> <!-- /.container -->
</header>	
<?php endif; ?>


<!-- ---------------------------------------------------------------- -->

	</div> <!-- /.container -->
</header>	


<!-- 	<div id="content" class="site-content"> -->





