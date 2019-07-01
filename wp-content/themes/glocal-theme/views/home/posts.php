<?php 

global $query_args;
$query = new WP_Query( $query_args );
$query_args['offset'] += $query_args['posts_per_page'];

if ($query->have_posts()): 

?>

<div class="three__categorie">
	<div class="grid__row">
		<div class="grid__container">			
			<?php while($query->have_posts()): $query->the_post(); ?>
				<?php get_template_part('views/sections/three-columns-with-category'); ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>

<?php

endif;

wp_reset_postdata();