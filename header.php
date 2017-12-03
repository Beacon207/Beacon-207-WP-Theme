<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">


		<!-- LOAD CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/normalize.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		
		
		<!-- PAGE META TITLE / DESCRIPTION -->
		<title><?php echo get_bloginfo('name'); ?> | <?php echo get_the_title(); ?></title>
		<meta name="description" content="Welcome to Beacon Media..." />
		
		<?php wp_head(); ?>
		
		
		
		<!-- LIGHTBOX PLUGIN - http://lokeshdhakar.com/projects/lightbox2/ -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/lightbox/css/lightbox.css">
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lightbox/js/lightbox-plus-jquery.min.js"></script>
        
        
	</head>
	<body>

		<div id="wrapper">


				<!-- HEADER -->
		    <header>
		        <div class="header-logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/beacon207_2.png" alt="Beacon Media Lighthouse Logo"></a>
		        </div>

        	  	<nav role="navigation">
                    <?php

                        // LOTS OF OPTIONS HERE: https://developer.wordpress.org/reference/functions/wp_nav_menu/
                        wp_nav_menu(array(
                            'menu_id' => 'nav',
                            'container_class' => 'header-links cf',         // class of container (should you choose to use it)
                            'menu' => __( 'Header Links' ),   				// nav name
                            'theme_location' => 'header-links',             // where it's located in the theme

                        ));
                    ?>
                </nav>
		    </header>
