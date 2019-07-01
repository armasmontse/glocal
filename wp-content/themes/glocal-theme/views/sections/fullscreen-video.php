<?php if(get_field('url')): ?>

    <section class="home__video">
        <h3 class="home__video-ttl text-center">Design Films</h3>
        <div class="video-container">
            <div class="youtube-autoplay" data-video-id="<?php the_field('url') ?>" data-autoplay="1" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%;">
                <div class="iframe"></div>
            </div>
        </div>
    </section>

<?php endif; ?>
