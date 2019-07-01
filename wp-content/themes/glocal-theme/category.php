<?php

get_header();

global $wp_query;
global $query_args;

$query_args = [
    'post_type'         => 'post',
    'post_status'       => 'publish',
    'cat'               => $wp_query->get_queried_object()->term_id,
    'offset'            => 0,
    'posts_per_page'    => !isMobile() ? 4 : 2,
];


// Post destacado de la categoria.
global $featured_post;
$featured_post = get_field('featured_post', 'category_' . $query_args['cat'] );

// Excluimos el post destacado de los resultados.
if($featured_post) {
    $query_args = array_merge($query_args, array('post__not_in' => array($featured_post->ID)));
}

?>

<div class="arquitectura">

    <h3 class="section-category arquitectura__ttl text-center"><?php single_cat_title(); ?></h3>

    <div class="add-ajax-posts">
        <?php

        get_template_part('views/category/posts');

        get_template_part('views/category/publicidad');

        $query_args['posts_per_page'] = !isMobile() ? 2 : 1;

        get_template_part('views/category/posts');

        get_template_part('views/general/newsletter');

        get_template_part('views/category/featured-post', $wp_query->get_queried_object()->slug);

        $query_args['posts_per_page'] = !isMobile() ? 4 : 2;

        get_template_part('views/category/posts');

        ?>
    </div>

    <?php

    get_template_part('views/general/load-posts');

    get_template_part('views/general/envianos');

    get_template_part('views/general/glocalshare');

    ?>

</div>

<script>
    var section = <?php echo json_encode('category'); ?>;
    var query_args = <?php echo json_encode($query_args) ?>;
</script>

<?php

get_footer();
