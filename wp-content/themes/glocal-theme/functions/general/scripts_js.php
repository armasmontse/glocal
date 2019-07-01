<?php

/**
 * En este archivo se incluyen los scripts
 *
 */


/** ==============================================================================================================
 *                                                HOOKS
 *  ==============================================================================================================
 */


add_action( 'wp_enqueue_scripts', 'cltvo_js' ); // incluye el functions.js
// add_action( 'admin_enqueue_scripts', 'cltvo_admin_js' ); // incluye el admin-functions.js. Descomentar para tener JS en admin (no olvidar crear el file [admin-functions.js])


/** ==============================================================================================================
 *                                               SCRIPTS
 *  ==============================================================================================================
 */

// incluye el functions.js
function cltvo_js(){

	// wp_register_script( 'cltvo_scrollIt_js', JSPATH.'scrollIt.js' );
    // wp_register_script( 'cltvo_validate_js', JSPATH.'jquery.validate.js' );
	// wp_register_script( 'cltvo_validate_espanol_js', JSPATH.'/localization/messages_es.js' );
	wp_register_script('parallax', 'https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js');
	wp_register_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js');
	wp_register_script('scrollmagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js');
	wp_register_script('addindicators', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js');
	wp_register_script('youtube', '//www.youtube.com/iframe_api');

	wp_register_script( 'cltvo_functions_js', JSPATH . 'functions.js', array(
		'jquery',
		'parallax',
		'font-awesome',
		'scrollmagic',
		'addindicators',
		'youtube'
		// 'cltvo_scrollIt_js',
		// 'cltvo_validate_js',
		// 'cltvo_validate_espanol_js'
	));

	wp_localize_script( 'cltvo_functions_js', 'cltvo_js_vars', cltvo_js_vars() );

	wp_enqueue_script('jquery');
	wp_enqueue_script('cltvo_functions_js');

	wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css');
	wp_enqueue_style('mazorca', CSSPATH . 'mazorca.css');
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
}

// incluye el admin-functions.js

function cltvo_admin_js(){
	wp_register_script( 'cltvo_admin_functions_js', JSPATH.'admin-functions.js', array('jquery'), false, false );
	wp_localize_script( 'cltvo_admin_functions_js', 'cltvo_js_vars', cltvo_js_vars() );

	wp_enqueue_style('admin-styles', CSSPATH.'ultraligero_admin.css' );
	wp_enqueue_script('jquery');
	wp_enqueue_script('cltvo_admin_functions_js');
}

// genera el site_url y template_url para javascript

function cltvo_js_vars(){
	$php2js_vars = array(
		'site_url'     => home_url('/'),
		'template_url' => get_bloginfo('template_url'),
		'ajax_url' 		=> admin_url( 'admin-ajax.php' ),
	);
	return $php2js_vars;
}


?>
