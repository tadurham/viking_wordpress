<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Viking
 * @since Viking 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'viking' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Arvo:700,400italic,700italic,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/modernizr.js"></script>


</head>

<body <?php body_class(); ?>>
<div id="gradient">
<div class="container">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
        <a id="mainLogoRibbon" href="<?php bloginfo('url'); ?>/">Husqvarna Viking Sewing Gallery</a>
		<a class="shareBubble" href="#link">Share</a>
		<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
		<nav role="navigation" class="site-navigation utility-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'utility' ) ); ?>
		</nav>
		<div class="clearFix"></div>
	    <?php 
	    if((function_exists('bcn_display'))&&(!is_front_page())):
            echo '<div class="breadcrumbs">';
            bcn_display();
            echo '</div>';
	    else:
            echo '<div class="noBreadcrumbs">';
            echo '</div>';
	    endif;           
        ?>
	</header><!-- #masthead -->

	<div id="main">