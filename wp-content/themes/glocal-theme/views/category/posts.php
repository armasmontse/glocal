<?php 

global $query_args;
$query = new WP_Query($query_args);
$query_args['offset'] += $query_args['posts_per_page'];

if(!empty($query->posts)):
    
?>

<div class="two__columns">
    <div class="grid__row">
        <div class="grid__container">
            <?php while($query->have_posts()): $query->the_post(); ?>
                <?php get_template_part('views/sections/two-columns-with-date', array_key_exists('cat', $query_args) ? get_term($query_args['cat'])->slug : ''); ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php 

endif;

wp_reset_postdata();