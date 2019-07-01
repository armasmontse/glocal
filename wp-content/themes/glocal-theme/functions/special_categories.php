<?php

add_action('init', 'cltvo_special_categories');

if (!function_exists('cltvo_special_categories')) {
	
	function cltvo_special_categories() {

		$special_categories = [
			'Arquitectura',
			'Diseño',
			'Interiorismo',
			'Moda',
			'Destino',
			'Design Films',
			'Opinion'
		];

	    foreach ($special_categories as $name) {
			if( ! term_exists($name, 'category') ){
				wp_insert_term($name, 'category');
			}
		}

	}
}