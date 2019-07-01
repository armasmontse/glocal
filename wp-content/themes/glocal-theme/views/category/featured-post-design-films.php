<?php 

global $featured_post;

if($featured_post):

    // override $post
    $post = $featured_post;
    setup_postdata( $post );

    get_template_part('views/sections/fullscreen-video');

    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly

endif;