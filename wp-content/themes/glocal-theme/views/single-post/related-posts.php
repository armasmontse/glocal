<?php 

global $post;

$tags = get_the_tags();

if ($tags):
    
    $tag_ids = array_map(function($tag) {
        return $tag->term_id;
    }, $tags);

    $args = array(
        'tag__in' => $tag_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page' => 15, // Number of related posts that will be shown.
    );

    $query = new WP_Query( $args );

    if (!empty($query->posts)):

    ?>

    <section class="slider__vistos">
        <div class="grid__row">
            <div class="grid__container">
                <div class="grid__col-1-1">
                    <h3 class="slider__vistos-ttl"><?php echo __('Notas relacionadas', TRANSDOMAIN); ?></h3>
                    <div class="swiper-container swiper-three-columns">
                        <div class="swiper-wrapper">
                            <?php while($query->have_posts()): $query->the_post(); ?>
                                <div class="swiper-slide">
                                    <?php get_template_part('views/sections/three-columns'); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="swiper-button-prev slider__vistos-prev"></div>
                        <div class="swiper-button-next slider__vistos-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php endif; 
    
    wp_reset_postdata();

endif;