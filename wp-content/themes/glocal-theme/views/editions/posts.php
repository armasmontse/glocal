<?php 

global $query_args;
$query = new WP_Query($query_args);
$query_args['offset'] += $query_args['posts_per_page'];

if(!empty($query->posts)):
    
?>

<!-- L i s t a   d e   p o r t a d a s -->
<div class="lista-portadas">
	<div class="grid__row">
		<div class="grid__container">
			<?php while($query->have_posts()): $query->the_post(); ?>
                <?php get_template_part('views/editions/single-list'); ?>
            <?php endwhile; ?>
		</div>
	</div>
</div>

<?php 

endif;

wp_reset_postdata();
