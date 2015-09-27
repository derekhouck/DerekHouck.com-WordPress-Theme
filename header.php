<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
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
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Coda:800' rel='stylesheet' type='text/css' />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
	<div id="container">
		<div id="pageheader">
			<?php if ( is_front_page() ) { ?>
				<h1>Derek Houck</h1>
			<? } else { ?>
				<h1 id="hcard-Derek-Houck" class="vcard"><a id="derekhouck" class="url fn" href="http://derekhouck.com">Derek Houck</a></h1>
			<? } ?>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			<ul id="connect">
				<li id="twitter"><a href="https://twitter.com/derekhouck" rel="me">Twitter</a></li>
				<li id="facebook"><a href="https://www.facebook.com/derekhouck" rel="me">Facebook</a></li>
				<li id="youtube"><a href="http://www.youtube.com/user/derekhouck" rel="me">YouTube</a></li>
				<li id="rss"><a href="/feed/">RSS</a></li>
			</ul><!-- #connect -->
		</div>
