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


	// GET ARTIST
	function get_artist($post, $getPosts = true){
		global $wpdb;

		$post -> additional_fields = get_fields($post -> ID);
		$post -> thumbnail = get_the_post_thumbnail($post -> ID, array(200));
		$post -> content_filtered = apply_filters('the_content', $post -> post_content);
		$post -> permalink = get_permalink($post -> ID);

		// this gets ALL the project data for each artist, could be stripped down if need be
		// if($getPosts){
		// 	$post -> projects = array();
		// 	$sql = 'SELECT post_id FROM ' . $wpdb -> postmeta . ' where meta_key="artist" and meta_value="' . $post -> ID . '"';
		// 	$projectIds = $wpdb->get_col($sql);
		// 	foreach ($projectIds as $id) {
		// 		$post -> projects[] = get_project(get_post($id), false);
		// 	}
		// }

		return $post;
	}

	// GET ARTIST LIST
	function get_artist_list(){
		global $wpdb;
		$artists = array();
		$sql = 'SELECT * FROM ' . $wpdb -> posts . ' where post_type="artist" and post_status="publish"';
		$posts = $wpdb->get_results($sql);
		foreach ($posts as $post) {
			$artists[] = get_artist($post, false);
		}

		// sort
		usort($artists, function($a, $b){
			return $a -> additional_fields['last_name'] > $b -> additional_fields['last_name'];
		});

		return $artists;
	}


	// GET PROJECT
	// function get_project($post, $getFull = true){
		
	// 	$post -> featured_image = get_image_paths($post -> ID);

	// 	$post -> content_filtered = apply_filters('the_content', $post -> post_content);

	// 	$post -> additional_fields = get_fields($post -> ID);

	// 	$post -> artist = get_artist($post -> additional_fields['artist'], $getFull);
	// 	unset($post -> additional_fields['artist']);
		

	// 	return $post;
	// }


	// // GET PROJECT LIST
	// function get_project_list(){
	// 	global $wpdb;
	// 	$projects = array();
	// 	$sql = 'SELECT * FROM  ' . $wpdb -> posts . '  where post_type="project" and post_status="publish" ORDER BY menu_order';
	// 	$posts = $wpdb->get_results($sql);
	// 	foreach ($posts as $post) {
	// 		$projects[] = get_project($post, false);
	// 	}

	// 	return $projects;
	// }


	// GET IMAGE SIZES
	function get_image_paths($postId){
		$photoId = get_post_thumbnail_id($postId);
		return array(
			"thumb" => wp_get_attachment_image_src($photoId, 'thumbnail')[0],
			"medium" => wp_get_attachment_image_src($photoId, 'medium')[0],
			"large" => wp_get_attachment_image_src($photoId, 'large')[0],
		);
	}       
        
        
        
        
        
        
        
        
        
        

