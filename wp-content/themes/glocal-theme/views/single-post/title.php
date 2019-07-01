<section class="plantilla">
    <div class="grid__row">
        <div class="grid__container">
            <div class="grid__col-1-1">
                <div class="single__info">
                    <?php get_template_part('views/single-post/date'); ?>
                </div>
                <div class="single__ttl plantilla__content">
                    <h1><?php the_title() ?></h1>
                    <div><?php the_excerpt()?></div>
                </div>
                <div class="single__info">
                    <?php get_template_part('views/single-post/author'); ?>
                    <?php get_template_part('views/single-post/share'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
