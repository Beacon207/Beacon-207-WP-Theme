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



	// GET IMAGE SIZES
	function get_image_paths($postId){
		$photoId = get_post_thumbnail_id($postId);
		return array(
			"thumb" => wp_get_attachment_image_src($photoId, 'thumbnail')[0],
			"medium" => wp_get_attachment_image_src($photoId, 'medium')[0],
			"large" => wp_get_attachment_image_src($photoId, 'large')[0],
		);
	}       
        
        
        
        
        
   	// IF YOU HAVE ALL THE CUSTOM FIELDS STUFF
	if(function_exists("register_field_group")) {


		// REGISTER A GROUP OF FIELDS
		register_field_group(array (
			'id' => 'acf_artist-fields',
			'title' => 'Artist Fields',

			// TO ADD FIELDS, JUST ADD THEM TO THE "FIELDS" ARRAY...
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
					'label' => 'Head Shot for Artists Page',
					'name' => 'additional_picture',
					'type' => 'image',
					'save_format' => 'object',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),

				// HERE'S WHERE I PUT THE NEW FIELDS...
				array (
					'key' => 'field_5a2478888b811',
					'label' => 'Videos',
					'name' => 'videos',
					'type' => 'repeater',
					'sub_fields' => array (
						array (
							'key' => 'field_5a2478928b812',
							'label' => 'Youtube URL',
							'name' => 'youtube_url',
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
				)
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
			'id' => 'acf_home-page',
			'title' => 'Home Page',
			'fields' => array (
				array (
					'key' => 'field_5a36cc26c61f3',
					'label' => 'Slideshow',
					'name' => 'slideshow',
					'type' => 'repeater',
					'sub_fields' => array (
						array (
							'key' => 'field_5a36cc3dc61f4',
							'label' => 'image',
							'name' => 'image',
							'type' => 'image',
							'column_width' => '',
							'save_format' => 'object',
							'preview_size' => 'thumbnail',
							'library' => 'all',
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

        
        
        
        

