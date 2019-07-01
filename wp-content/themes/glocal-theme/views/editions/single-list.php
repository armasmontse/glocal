<div class="edicion__box">
    <?php if(get_field('author_cover_page')): ?>
        <div class="grid__col-1-4">
            <div class="lista-portadas__contenedor">
                <div class="lista-portadas__contenedor--aspect">
                    <img class="lista-portadas__img-vertical" src="<?php echo get_field('author_cover_page')['sizes']['large'] ?>" alt="">
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_field('macro_trends_cover_page')): ?>
        <div class="grid__col-1-4">
            <div class="lista-portadas__contenedor">
                <div class="lista-portadas__contenedor--aspect">
                    <img class="lista-portadas__img-vertical" src="<?php echo get_field('macro_trends_cover_page')['sizes']['large'] ?>" alt="">
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="grid__col-1-2">
        
        <div class="lista-portadas__box">
            <h5 class="lista-portadas__content-ttl">
                <?php the_title(); ?> <br> <?php the_field('edition'); ?>
            </h5>

            <div class="lista-portadas__content-text">
                <?php the_field('description'); ?>
            </div>

            <div>
            
                <?php if(get_field('online_url')): ?>
                    <a href="<?php the_field('online_url'); ?>" target="_blank" class="lista-portadas__content-link">
                        <?php echo __('Ver edición', TRANSDOMAIN); ?>
                    </a>
                <?php endif; ?>

                <?php if(get_field('paypal_url')): ?>
                    <a href="<?php the_field('paypal_url'); ?>" target="_blank" class="lista-portadas__content-link" style="margin-left: 30px;">
                        <?php echo __('Comprar', TRANSDOMAIN); ?>
                    </a>
                <?php endif; ?>

            </div>
            
        </div>

    </div>
</div>