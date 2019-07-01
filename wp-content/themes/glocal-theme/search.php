<?php 

get_header();

// Variable wp_query global.
global $wp_query;

?>

<div class="arquitectura">

    <h3 class="section-one arquitectura__ttl text-center">
        <?php printf( esc_html__( 'Resultados de: %s', TRANSDOMAIN ), '<span>' . get_search_query() . '</span>' ); ?>
    </h3>

    <section class="two__columns">
        <div class="grid__row">
            <div class="grid__container">
                <?php if(!empty($wp_query->posts)): ?>
                    <?php $i = 0; foreach($wp_query->posts as $post): setup_postdata( $post ); ?>
                        <?php get_template_part('views/sections/two-columns'); ?>
                    <?php $i++; endforeach; wp_reset_postdata(); ?>
                <?php else: ?>
                    <?php echo __('No hay resultados que coincidan con tu búsqueda.', TRANSDOMAIN); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer();