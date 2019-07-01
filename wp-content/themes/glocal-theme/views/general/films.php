<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'orderby' => 'rand',
    'category_name' => 'design-films'
);

$query = new WP_Query($args);

$posts = $query->posts;

if (!empty($posts)):

?>
<section class="two__columns">
	<div class="grid__row">
		<div class="grid__container">
            <div class="grid__col-1-1">
                <h3 class="two__columns-ttl">Design Films</h3>
            </div>
            <?php foreach($posts as $post): setup_postdata( $post ); ?>
                <?php get_template_part('views/sections/two-columns-with-date', 'design-films'); ?>
			<?php endforeach; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif ?>
