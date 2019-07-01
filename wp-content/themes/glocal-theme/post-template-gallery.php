<?php

/*
Template Name: Gallery layout
Template Post Type: post
*/

get_header();

if (have_posts()) : while (have_posts()) : the_post();

    echo '<div class="single">';

    get_template_part('views/single-post/featured-image');

    get_template_part('views/single-post/metadata');

    get_template_part('views/single-post/flexible-content');

    get_template_part('views/single-post/footer');

    get_template_part('views/general/line-divisor');

    get_template_part('views/single-post/related-posts');

    get_template_part('views/general/line-divisor');

    get_template_part('views/general/films');

    // get_template_part('views/general/line-divisor');

    get_template_part('views/general/edicion');

    echo '</div>';

endwhile; endif;

get_footer();
