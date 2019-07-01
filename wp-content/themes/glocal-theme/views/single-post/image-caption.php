<?php if(get_sub_field('show_caption')): ?>
    <div class="grid__row">
        <div class="grid__container single__container">
            <div class="single__image-caption">
                <?php the_sub_field('caption'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>