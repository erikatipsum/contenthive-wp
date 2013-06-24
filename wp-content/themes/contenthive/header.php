<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'ggswp' ), max( $paged, $page ) );

	?></title>

<?php wp_head(); ?>

<?php // Please don't add "maximum-scale=1" here. It's bad for accessibility. ?>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.png"/>
<!-- <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/img/icon.png"/> -->

<!--[if lt IE 9]>
<?php // This script enables structural HTML5 elements in old IE: http://code.google.com/p/html5shim/ ?>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="//use.typekit.net/lcd4nua.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
	<header id="branding" role="banner">
		<nav id="access" role="navigation">
			<hgroup>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'ggswp' ); ?>"><?php _e( 'Skip to content', 'ggswp' ); ?></a></div>

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_id' => 'nav' ) ); ?>



			</hgroup>
		</nav><!-- #access -->

		<section class="header_bar">

			<h1 class="hide-text logo">

				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>

			</h1>

			<a href="#" id="nav-toggle">&#9776;</a>

		</section>

	</header><!-- #branding -->


	<div id="main">