<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-box">
 *
 * @package Pilcrow
 * @since Pilcrow 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if (gt IE 7) | (!IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>

<META NAME="author" CONTENT="Shintaro Higashi">
<META NAME="Geography" CONTENT="331 Riverside Dr, New York, NY 10025">
<META NAME="Language" CONTENT="English">
<META HTTP-EQUIV="Expires" CONTENT="never">
<META NAME="Copyright" CONTENT="www.kokushibudo.com/">
<META NAME="Publisher" CONTENT="Shintaro Higashi">
<META NAME="distribution" CONTENT="Global">
<META NAME="Robots" CONTENT="INDEX,FOLLOW">
<META NAME="city" CONTENT="New York">
<META NAME="country" CONTENT="USA">

<link rel="publisher" href="https://plus.google.com/+KokushiBudoInstituteNewYork" /><link rel="author" href="https://plus.google.com/+KokushiBudoInstituteNewYork" />

<meta name="msvalidate.01" content="20DD2DA7154F89E2115401C9AACFA8B5" />

</head>

<body <?php body_class(); ?>>
<?php do_action( 'pilcrow_before' ); ?>
<div id="container" class="hfeed">
<?php do_action( 'before' ); ?>
	<div id="page" class="blog">
		<div id="header">
			<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
			<<?php echo $heading_tag; ?> id="site-title">
				<span>
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</<?php echo $heading_tag; ?>>

			<div id="nav" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'pilcrow' ); ?>"><?php _e( 'Skip to content', 'pilcrow' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #nav -->

			<div id="pic">
				<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
			</div><!-- #pic -->
		</div><!-- #header -->

		<div id="content-box">