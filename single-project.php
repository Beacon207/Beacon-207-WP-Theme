<?php
/**
 * This is the template for displaying a single project.
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
