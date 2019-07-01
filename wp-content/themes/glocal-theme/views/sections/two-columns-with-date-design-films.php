<div class="grid__col-1-2">
    <div class="two__columns-box">
        <div class="two__columns-contImage">
            <div class="youtube-autoplay" data-video-id="<?php the_field('url') ?>" data-autoplay="0" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%;">
                <div class="iframe"></div>
            </div>
        </div>
        <h5 class="two__columns-section"><?php echo get_the_date(__('d F Y')); ?></h5>
        <a href="<?php the_permalink(); ?>">
            <h4 class="two__columns-content"><?php the_title(); ?></h4>
        </a>
    </div>
</div>
