<?php

add_action('init', 'cltvo_special_tags');

if (!function_exists('cltvo_special_tags')) {
	
	function cltvo_special_tags() {

		$special_tags = [];

	    foreach ($special_tags as $name) {
			if( ! term_exists($name, 'post_tag') ){
				wp_insert_term($name, 'post_tag');
			}
		}

	}
}