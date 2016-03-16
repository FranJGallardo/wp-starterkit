<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<!-- Esta linea se elimina cuando se enlaza wp_queue_style -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<header>
		<h1><?php bloginfo('name'); ?></h1>
	</header>