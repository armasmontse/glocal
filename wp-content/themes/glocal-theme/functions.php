<?php
/** ==============================================================================================================
 *                                       Constantes y variables Globales
 *  ==============================================================================================================
 */
define( 'JSPATH', get_template_directory_uri() . '/js/' );
define( 'CSSPATH', get_template_directory_uri() . '/css/' ); // css para el adimin
define( 'BLOGURL', get_home_url('/') );
define( 'THEMEURL', get_bloginfo('template_url').'/' );

// inicializacion de la traduccion
define( 'TRANSDOMAIN', wp_get_theme()->template );


 // ---------------- paginas especiales
 // Hook que crea las paginas especificas o especiales de manera automatica

 include_once('functions/special_pages.php');
 include_once('functions/special_tags.php');
 include_once('functions/special_categories.php');

/** ==============================================================================================================
 *                                       Inluye los archivos generarles
 *  ==============================================================================================================
 */
// ---------------- scripts
// Contiene la llamada de los archivos functions.js y admin/functions.js asi como inclucion de valiables java

include_once('functions/general/scripts_js.php');

// ---------------- funciones cltvo
// Contiene las funciones generales del cultivo que son independeites de cada proyecto

include_once('functions/general/functions_cltvo.php');

// ---------------- flitros cltvo
// Contiene los filtros generales del cultivo que son independeites de cada proyecto

include_once('functions/general/filters_cltvo.php');




/** ==============================================================================================================
 *                                       Inluye los archivos de admin
 *  ==============================================================================================================
 */

// ---------------- personaizacion del menu
// Contiene las funciones para personalizar el menu del admin

include_once('functions/admin/menu.php');

// ---------------- imagenes de tamaños y opcciones personalizadas
// Contiene la funciones para personalizar los tamaños de la imagenes

include_once('functions/admin/images.php');

// ---------------- post type y taxonimias
// Contiene el registro de tipos de post persializados y configuracion del editor de los mismos

include_once('functions/admin/post_type.php');

// Contiene el registro de taxonomias personalizadas

include_once('functions/admin/taxonomies.php');

// ---------------- meta boxes y save post
// Contiene la inclucion de las metaboxes asi como las funciones del save post

include_once('functions/admin/metabox.php');

// ---------------- ajax del admin
// Contiene los funciones ajax  del admin

include_once('functions/admin/ajax.php');

/** ==============================================================================================================
 *                                         Inluye los archivos del tema
 *  ==============================================================================================================
 */

// ---------------- funciones del menu
// Contiene el menú del sitio y sus funciones

include_once('functions/theme/menu.php');

// ---------------- filtros del tema
// Contiene los filtros específicos del tema

include_once('functions/theme/filters.php');

// ---------------- funciones del tema
// Contiene los funciones específicas del tema

include_once('functions/theme/functions.php');

// ---------------- ajax del tema
// Contiene los funciones ajax especificas del tema

include_once('functions/theme/ajax.php');

// add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

// define( 'ACF_LITE', true );

// include_once('advanced-custom-fields/acf.php');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
	
		/* (string) The title displayed on the options page. Required. */
		'page_title' => 'Opciones de ediciones',

		/* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
		'menu_title' => 'Opciones',
		
		/* (string) The slug of another WP admin page. if set, this will become a child page. */
		'parent_slug' => 'edit.php?post_type=cltvo_edition',

		/* (string) The slug name to refer to this menu by (should be unique for this menu). 
		Defaults to a url friendly version of menu_slug */
		'menu_slug' => 'editions-options',
		
		/* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2'). 
		Defaults to 'options'. Added in v5.2.7 */
		'post_id' => 'editions-options',
		
	));

	acf_add_options_page(array(
	
		/* (string) The title displayed on the options page. Required. */
		'page_title' => 'Opciones de entradas',

		/* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
		'menu_title' => 'Opciones',

		/* (string) The slug name to refer to this menu by (should be unique for this menu). 
		Defaults to a url friendly version of menu_slug */
		'menu_slug' => 'posts-options',
		
		/* (string) The slug of another WP admin page. if set, this will become a child page. */
		'parent_slug' => 'edit.php',
		
		/* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2'). 
		Defaults to 'options'. Added in v5.2.7 */
		'post_id' => 'posts-options',
		
	));

	acf_add_options_page(array(
	
		/* (string) The title displayed on the options page. Required. */
		'page_title' => 'Opciones generales',
		
		/* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2'). 
		Defaults to 'options'. Added in v5.2.7 */
		'post_id' => 'general-options',
		
	));
	
}

register_nav_menus(array(
	'header_menu' 	=> 'Header Menu',
	'sidebar_menu' 	=> 'Sidebar Menu',
	'footer_menu' 	=> 'Footer Menu',
) );

add_theme_support( 'html5', array(
	'comment-list',
	'comment-form',
	'search-form',
	'gallery',
	'caption' 
));

add_action('init', 'init_remove_support', 100);

function init_remove_support(){
    $post_type = 'post';
    remove_post_type_support( $post_type, 'editor');
}