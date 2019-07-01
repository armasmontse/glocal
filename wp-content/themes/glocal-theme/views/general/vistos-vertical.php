<?php

$posts = get_field('most_viewed_posts_vertical', 'posts-options');

if (!empty($posts)):

?>

<section class="mas-vistos">
	<div class="grid__row">

		<h3 class="mas-vistos-ttl text-center">Lo más visto</h3>

		<div class="grid__container">

			<?php foreach($posts as $post): setup_postdata( $post ); ?>
                <?php get_template_part('views/sections/three-columns-vertical'); ?>
			<?php endforeach; wp_reset_postdata(); ?>

        </div>

    </div>
</section>
<?php endif ?>
