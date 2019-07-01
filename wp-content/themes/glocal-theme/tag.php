<?php

get_header();

global $wp_query;
global $query_args;

$query_args = [
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'posts_per_page'=> !isMobile() ? 4 : 2,
    'offset'        => 0,
    'tag_id'        => $wp_query->get_queried_object()->term_id,
];

?>

<div class="arquitectura">

    <h3 class="section-category arquitectura__ttl text-center">#<?php single_cat_title(); ?></h3>

    <div class="add-ajax-posts">
        <?php

        get_template_part('views/category/posts');

        get_template_part('views/category/publicidad');

        $query_args['posts_per_page'] = !isMobile() ? 2 : 1;

        get_template_part('views/category/posts');

        get_template_part('views/general/newsletter');

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
    var section = 'category';
    var query_args = <?php echo json_encode($query_args); ?>;
</script>

<?php

get_footer();
