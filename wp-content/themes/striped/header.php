<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Striped
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	    <title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->

		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/skel.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/skel-layers.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/skel.css" />
			<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" />
			<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style-desktop.css" />
			<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
</head>
	<!--
		Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
		Set it to "right-sidebar" to, you guessed it, position it on the right.
	-->
	<body class="left-sidebar">
	<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div class="inner">


	


		