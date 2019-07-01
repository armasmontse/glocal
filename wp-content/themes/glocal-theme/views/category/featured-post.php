<?php

global $featured_post;

if(!empty($featured_post)):

    // override $post
    $post = $featured_post;
    setup_postdata( $post );

    ?>

    <section class="arq__one-column">
        <div class="grid__row">
            <div class="grid__container">
                <div class="grid__col-1-9">
                    <div class="arq__one-column__box">
                        <div class="arq__one-column__cont-img">
                            <a href="<?php the_permalink(); ?>">
                                <img class="arq__one-column__box-img" src="<?php the_post_thumbnail_url() ?>" alt="">
                            </a>
                        </div>
                        <p class="arq__one-column__box-categorie"><?php echo get_the_date(); ?></p>
                        <a href="<?php the_permalink(); ?>">
                            <h4 class="arq__one-column__box-content"><?php the_title(); ?></h4>
                        </a>
                    </div>
                </div>
                <div class="col-1-3">
                    <?php get_template_part('views/ad/square'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

<?php endif; ?>
