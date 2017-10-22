<?php

	//	Got any functions or other server-side scripts unique to this theme?

	//  Put 'em here!!!


	// Yes! This theme supports menus!
	add_theme_support( 'menus' );

	// These are the possible menu positions:
	register_nav_menus(
		array(

			// in header.php - there's a menu location called "header-links"
			// in the admin, when you assign a menu here, the option will display as "Header Links"
			'header-links' 	=> "Header Links"
		)
	);



	// ENABLE FEATURED IMAGES
	add_theme_support( 'post-thumbnails' );



	function get_artist($post){
		$post -> additional_fields = get_fields($post -> ID);
		$post -> thumbnail = get_the_post_thumbnail($post -> ID, array(200));
		$post -> content_filtered = apply_filters('the_content', $post -> post_content);
		return $post;
	}