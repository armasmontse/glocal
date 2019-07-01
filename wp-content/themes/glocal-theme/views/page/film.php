<?php 

if(get_field('show_film')):

    $post_object = get_field('film');

    if( $post_object ): 

        // override $post
        $post = $post_object;
        setup_postdata( $post );

        get_template_part('views/sections/fullscreen-video');
        
        wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly

    endif;

endif;