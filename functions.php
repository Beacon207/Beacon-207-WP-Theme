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
		$post -> image_paths = get_image_paths($post -> ID);

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
        
        
        
        
        
   // UPDATE CUSTOM FIELDS
	if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_artist-fields',
		'title' => 'Artist Fields',
		'fields' => array (
			array (
				'key' => 'field_59e3ab0b2b63e',
				'label' => 'First Name',
				'name' => 'first_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59e3ab162b63f',
				'label' => 'Last Name',
				'name' => 'last_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59e3ab1f2b640',
				'label' => 'Website',
				'name' => 'website',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59e3ab2f2b641',
				'label' => 'Location',
				'name' => 'location',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59e3ab3a2b642',
				'label' => 'Preferred Medium',
				'name' => 'preferred_medium',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59e3ab542b643',
				'label' => 'Interview',
				'name' => 'interview',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_59e3ab642b644',
				'label' => 'Additional Picture',
				'name' => 'additional_picture',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'artist',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_home-page-configuration',
		'title' => 'Home Page - Configuration',
		'fields' => array (
			array (
				'key' => 'field_5a1b84abe2c73',
				'label' => 'Featured Artist',
				'name' => 'featured_artist',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'artist',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a1b8c5940ab6',
				'label' => 'Featured Image',
				'name' => 'featured_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'large',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-front.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_project-fields',
		'title' => 'Project Fields',
		'fields' => array (
			array (
				'key' => 'field_59e3abd2453e8',
				'label' => 'YouTube URL',
				'name' => 'youtube_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59e3ac1f233e4',
				'label' => 'Images',
				'name' => 'images',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_59f77c671bd13',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_59f77c771bd14',
						'label' => 'Caption',
						'name' => 'caption',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'project',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'artist',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}




// UPDATE CUSTOM POST TYPES
function cptui_register_my_cpts_artist() {

	/**
	 * Post Type: Arists.
	 */

	$labels = array(
		"name" => __( "Arists", "min" ),
		"singular_name" => __( "Artist", "min" ),
	);

	$args = array(
		"label" => __( "Arists", "min" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "artist", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "artist", $args );
}

add_action( 'init', 'cptui_register_my_cpts_artist' );

        
        
        
        

