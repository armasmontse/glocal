<?php 

// check if the flexible content field has rows of data
if( have_rows('content') ):

    $masonry_id = 1;

    // loop through the rows of data
    while ( have_rows('content') ) : the_row();

        if( get_row_layout() == 'wysiwyg' ):

            get_template_part('views/single-post/content');

        elseif( get_row_layout() == 'parallax' ): 

            get_template_part('views/single-post/parallax');

        elseif( get_row_layout() == 'fullwidth' ): 

            get_template_part('views/single-post/fullwidth');

        elseif( get_row_layout() == 'image' ): 

            get_template_part('views/single-post/image');

        elseif( get_row_layout() == 'masonry' ):

            include get_stylesheet_directory() . '/views/single-post/masonry.php';

            $masonry_id++;

        elseif( get_row_layout() == 'ad' ): 

            get_template_part('views/single-post/leaderboard');

        endif;

    endwhile;

endif;