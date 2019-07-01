<section>
    <div class="grid__row">
        <div class="grid__container">
            <div class="grid__col-1-1">
                <div class="single__info--footer">
                    <?php get_template_part('views/single-post/share'); ?>
                </div>
                <?php if(get_the_tags()): ?>
                    <div class="single__nav">
                        <div class="single__tags">
                            <?php foreach ( get_the_tags() as $tag ): $permalink = get_tag_link( $tag->term_id ); ?>
                                <a href="<?php echo $permalink; ?>"><?php echo $tag->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
