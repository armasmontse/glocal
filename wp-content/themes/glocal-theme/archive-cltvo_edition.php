<?php

get_header();

global $wp_query;
global $query_args;
global $featured_edition;

$query_args = [
    'post_type'         => 'cltvo_edition',
    'post_status'       => 'publish',
    'offset'            => 0,
    'posts_per_page'    => !isMobile() ? 4 : 2,
];

// Buscamos los posts que no sean el featured.
if($featured_edition) {
    $query_args = array_merge($query_args, array('post__not_in' => array($featured_edition->ID)));
}

?>

<!-- E d i c i o n e s -->
<div class="ediciones">

	<h3 class="section-category ediciones__ttl text-center">Edición Impresa</h3>

	<?php get_template_part('views/general/edicion'); ?>

	<div class="add-ajax-posts">
		<?php get_template_part('views/editions/posts'); ?>
	</div>

	<?php get_template_part('views/general/load-posts'); ?>

</div>

<script>
    var section = <?php echo json_encode('editions'); ?>;
    var query_args = <?php echo json_encode($query_args) ?>;
</script>

<?php get_footer(); ?>
