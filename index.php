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
	<?php the_post(); ?>
     
    <div id="inner-page">
        <div id="inner-head">
            <h1><?php echo $post -> post_title; ?></h1>
            
            <!-- If there's an excerpt, output it here -->
            <?php 
                $c = $post -> post_content;
                $m = substr($c, 0, strpos($c, "<!--more-->"));
                if($m) echo '<p id="inner-tagline">' . $m . '</p>';  
            ?>
        </div>
        
        <?php the_content(null, true); ?>
    </div>
	
 </main>


 <?php echo get_footer(); ?>
