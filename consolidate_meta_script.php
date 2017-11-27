<?php
	
	// Multiple ways to run this, but try copying and pasting this code into functions.php

	include('../../../wp-load.php');
	global $wpdb;

	$sql = 'SELECT * FROM ' . $wpdb -> postmeta . ' where meta_key="artist"';
	$hash = $wpdb -> get_results($sql);

	foreach($hash as $h){
		extract((array) $h);
		$wpdb -> update($wpdb -> postmeta, array("post_id" => $meta_value), array("post_id" => $post_id));
	}