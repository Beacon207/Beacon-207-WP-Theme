<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage min
 */

?><!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">


		<!-- LOAD CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/normalize.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

		<!-- PAGE META TITLE / DESCRIPTION -->
		<title>Beacon Media | Mock03</title>
		<meta name="description" content="Welcome to Beacon Media..." />
	</head>
	<body>

		<div id="wrapper">
		    <header>
		        <div id="header-main">
		            <div id="header-logo">
		                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/beacon_media_logo.png" alt="Beacon Media Lighthouse Logo">
		            </div>
		            <div id="header-text">
		                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/beacon_media_text.png" alt="Beacon Media">
		            </div>
		        </div>
		        <nav id="nav-primary">
		            <div class="nav-primary-item"><a href="#" class="selected">Home</a></div>
		            <div class="nav-primary-item"><a href="#">Our Mission</a></div>
		            <div class="nav-primary-item"><a href="#">Portfolios</a></div>
		            <div class="nav-primary-item"><a href="#">Our Team</a></div>
		            <div class="nav-primary-item"><a href="#">Contact</a></div>
		        </nav>
		    </header>

		    <main>
		       <div id="home-feature" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/example/sample_stock4.jpeg');">
		            <div id="home-feature-artist">
		                <p id="artist-name">John Doe</p>
		                <p id="artist-word">"Hipster Shit" photo series</p>
		            </div>
		        </div>

		        <div id="tagline-main">
		            <div class="tagline">
		                <h1>Innovate &amp; Collaborate</h1>
		            </div>
		        </div>

		        <div id="view-more-main">Click to View<br>Featured Portfolios</div>
		        <div id="arrow">
		            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/down_arrow.png" alt="down arrow">
		        </div>

		        <div id="featured-works">
		            <div class="home-featured-item">
		                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/example/sample_home_gallery1.JPG" alt="money and sex"></a>
		            </div>
		            <div class="home-featured-item">
		                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/example/sample_home_gallery2.png" alt="collage and birds"></a>
		            </div>
		            <div class="home-featured-item">
		                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/example/sample_home_gallery3.png" alt="a women illustration"></a>
		            </div>
		        </div>

		        <div id="portfolio">
		            <h2><a href="#">Browse All Portfolios</a></h2>
		        </div>
		    </main>

		    <div id="supporters">
		        <h3>Our Supporters</h3>
		        <div id="supporter-list">
		            <div class="supporter-icon"><a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/example/sponsor_logo1.jpeg" alt="A Logo Goes Here"></a></div>
		            <div class="supporter-icon"><a href="https://www.smccme.edu" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/example/smcc_logo_bw.jpeg" alt="Southern Maine Community College Logo"></a></div>
		            <div class="supporter-icon"><a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/example/sponsor_logo2.png" alt="A Logo Goes Here"></a></div>
		        </div>
		    </div>

		    <footer>
		        <div id="social-icons">
		            <div class="social"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram_logo_white.png" alt="Instagram Logo white"></a></div>
		            <div class="social"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook_logo_white.png" alt="Facebook Logo white"></a></div>
		            <div class="social"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/email_icon_white.png" alt="Email icon white"></a></div>
		        </div>
		    </footer>

		</div>
	</body>
</html>
