<?php 

$posts = get_field('releases_posts', 'posts-options');

if (!empty($posts)):

?>
<section class="two__columns">
	<div class="grid__row">
		<div class="grid__container">
            <div class="grid__col-1-1">
                <h3 class="two__columns-ttl">Lanzamientos</h3>
            </div>
            <?php foreach($posts as $post): setup_postdata( $post ); ?>
                <?php get_template_part('views/sections/two-columns'); ?>
			<?php endforeach; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif ?>