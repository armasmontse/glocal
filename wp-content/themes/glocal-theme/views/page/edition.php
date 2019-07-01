<?php

if(get_field('show_featured_edition')):

    $post = get_field('featured_edition', 'editions-options');

    if($post): 
        
        setup_postdata($post);

        ?>

        <section class="two__columns-vertical">
            <div class="grid__row">
                <div class="grid__container">
                    <div class="grid__col-1-1 two__columns-vertical-container">
                        <?php if(get_field('author_cover_page')): ?>
                            <div class="two__columns-vertical-content">
                                <div class="two__columns-vertical-contImage">
                                    <img class="two__columns-vertical-contImage--image" src="<?php echo get_field('author_cover_page')['sizes']['large'] ?>" alt="">					
                                </div>
                                <div class="two__columns-vertical-contText">
                                    <h5 class="two__columns-vertical-contText--ttl"><?php echo get_field('author_cover_page')['title'] ?></h5>
                                    <h4 class="two__columns-vertical-contText--text"><?php echo get_field('author_cover_page')['description'] ?></h4>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if(get_field('macro_trends_cover_page')): ?>
                            <div class="two__columns-vertical-content">
                                <div class="two__columns-vertical-contImage">
                                    <img class="two__columns-vertical-contImage--image" src="<?php echo get_field('macro_trends_cover_page')['sizes']['large'] ?>" alt="">
                                </div>
                                <div class="two__columns-vertical-contText">
                                    <h5 class="two__columns-vertical-contText--ttl"><?php echo get_field('macro_trends_cover_page')['title'] ?></h5>
                                    <h4 class="two__columns-vertical-contText--text"><?php echo get_field('macro_trends_cover_page')['description'] ?></h4>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

    <?php endif; ?>

<?php endif; ?>