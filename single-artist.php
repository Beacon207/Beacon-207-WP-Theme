<?php
/**
 * This is the template for displaying a single artist.
 */
 echo get_header();
 ?>


 <!-- MAIN -->
 <main>
	<?php
		
        the_post();
        $post_id = get_the_ID();
     
        echo '<h1>' . get_the_title() . '</h1>';
        the_content();
     
        $meta_info = get_fields($post_id);
        print_r($meta_info);
        

	?>
 </main>


 <?php echo get_footer(); ?>
