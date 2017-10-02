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

?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta charset="utf-8">
	    <meta name="description" content="Welcome to Beacon Media..." />

	</head>
	<body>
		<?php
			if ( have_posts() ) {
			    while ( have_posts() ) {
			 
			        the_post(); ?>
			 
			        <h2><?php the_title(); ?></h2>
			 		<?php the_content(); ?>
								 
			    <?php }
			}
		?>

	</body>
</html>