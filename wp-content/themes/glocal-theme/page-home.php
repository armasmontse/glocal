<?php

global $query_args;

$query_args = [
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'posts_per_page'=> !isMobile() ? 9 : 4,
    'offset' 	    => 0,
    'category__not_in' => [get_category_by_slug('design-films')->term_id],
];

get_header();

?>

<div class="home">

    <?php get_template_part('views/home/slider'); ?>

    <section class='add-ajax-posts'>

        <?php get_template_part('views/home/posts'); ?>

    </section>

    <?php 

    get_template_part('views/general/load-posts');

    get_template_part('views/general/line-divisor');

    get_template_part('views/general/vistos');

    get_template_part('views/home/publicidad');

    get_template_part('views/general/line-divisor');

    get_template_part('views/home/video-films');

    get_template_part('views/general/line-divisor');

    get_template_part('views/general/editors-pick');

    get_template_part('views/general/newsletter');

    get_template_part('views/general/lanzamientos');

    get_template_part('views/general/edicion');

    get_template_part('views/general/line-divisor');

    get_template_part('views/general/glocalshare');

    get_template_part('views/general/line-divisor');

    get_template_part('views/general/vistos-vertical');

    ?>

</div>

<script>
    var section = 'home';
    var query_args = <?php echo json_encode($query_args) ?>;
</script>

<?php 

get_footer();
