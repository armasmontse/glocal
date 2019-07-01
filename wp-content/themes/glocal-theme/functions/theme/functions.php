<?php

/**
 * En este archivo se incluyen las funciones del tema 
 *
 */


/** ==============================================================================================================
 *                                              FUNCIONES DEL TEMA
 *  ==============================================================================================================
 */



// funciones aqui ...

function getGlocalSharePosts() {

    if(!function_exists('getRecentByTagName')){
        return [];
    }

    return getRecentByTagName('glocalshare');
}

function getMyPosts($args = array()) {
    
    if(!function_exists('getSelfMediaRecent')){
        return [];
    }

    return getSelfMediaRecent($args);
}

function remove_extension($name) {
    return substr( $name, 0, strrpos( $name, '.' ) );
}

function get_thumbnail_src($thumbnail_id = 0, $size = 'full') {

	if($thumbnail_id == 0) {
		$thumbnail_id = get_post_thumbnail_id();
	}

	return wp_get_attachment_image_src($thumbnail_id, $size)[0];
}