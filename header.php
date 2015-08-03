<?php
/**
 * Header template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2015-08-03 Arne Kamola <a.kamola@psilab.de>
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title($sep = '›', $display = true, $seplocation = 'right'); bloginfo('name'); ?><?php if ( is_home() ) { echo ' &#8226; '; bloginfo('description'); } ?></title>

	<meta name="viewport" content="width=device-width, user-scalable=yes">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all">

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo home_url('/'); ?>favicon.ico">

	<link href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">

	<meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/msapplication-square-150.png">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/msapplication-square-150.png">
	<meta name="msapplication-TileColor" content="#FFF">
	<meta name="application-name" content="<?php bloginfo('name'); ?>">

	<link rel="pavatar" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/pavatar.png">

	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<p id="jumper"><a href="#content">[ <?php _e('Jump to content', 'blanktheme'); ?> ]</a></p>

	<header>

		<h1><?php if ( !is_home() || is_paged() ): ?><a href="<?php echo home_url(); ?>"><?php endif; ?><?php bloginfo('name'); ?><?php if ( !is_home() || is_paged() ): ?></a><?php endif; ?></h1>

		<p class="tagline"><?php bloginfo('description'); ?></p>

		<?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('blanktheme-widgetarea-header') ): ?>

			<?php dynamic_sidebar('blanktheme-widgetarea-header') ?>

		<?php endif; ?>

	</header>

	<hr>