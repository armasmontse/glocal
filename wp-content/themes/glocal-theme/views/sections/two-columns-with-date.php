<div class="grid__col-1-2">
    <div class="two__columns-box">
        <div class="two__columns-contImage">
            <a href="<?php the_permalink(); ?>">
                <img class="two__columns-contImage--image" src="<?php echo get_thumbnail_src(); ?>" alt="">
            </a>					
        </div>
        <h5 class="two__columns-section"><?php echo get_the_date(__('d F Y')); ?></h5>
        <a href="<?php the_permalink(); ?>">
            <h4 class="two__columns-content"><?php the_title(); ?></h4>
        </a>
    </div>
</div>