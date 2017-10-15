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
 echo get_header();
 ?>


 <!-- MAIN -->
 <main>
	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {

				the_post();

				echo '<h1>' . get_the_title() . '</h1>';
				the_content();

			}
		}
	?>
 </main>


 <?php echo get_footer(); ?>
