<?php 

/*
Plugin Name: Instagram Feed
Plugin URI: https://elcultivo.mx/wordpress-instafeed
Description: A client for easy display instagram posts in your theme.
Version: 0.1
Author: El Cultivo
Author URI: https://elcultivo.mx/
License: GPL2

Copyright 2018 El Cultivo (email : hola@elcultivo.mx)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// define('CLIENT_ID', '3619a162bded4564b39295036bf0e3e4');
// define('CLIENT_SECRET', '4a15bc3366554a35bc3ccc3bf723d1da');

function makeGet($url, $data = []) {
    $ch = curl_init();

    curl_setopt_array($ch, array(
        CURLOPT_URL => $url . '?' . http_build_query($data),
        CURLOPT_RETURNTRANSFER => true,
    ));

    $server_output = curl_exec($ch);

    if (curl_error($ch)) {
        trigger_error('Curl Error:' . curl_error($ch));
    }

    curl_close ($ch);

    return json_decode($server_output, true);
}

function dump($output) {
    echo "<pre><code>";
    print_r($output);
    echo "</code></pre>";
}

function getRecentByTagName($tag) {

    $url = 'https://api.instagram.com/v1/tags/'. $tag .'/media/recent/';

    return makeGet($url, ['access_token' => getAccessToken()]);
}

function getSelfMediaRecent($args = array()) {

    $url = 'https://api.instagram.com/v1/users/self/media/recent/';

    $args = array_merge($args, ['access_token' => getAccessToken()]);

    return makeGet($url, $args);
}

function getAccessToken() {
    
    if(!defined('INSTAGRAM_ACCESS_TOKEN')){
        throw new Exception('No instagram access token provided.');
    }
    
    return INSTAGRAM_ACCESS_TOKEN;
}