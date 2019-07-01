<?php

$image = get_sub_field('image');

?>
<div class="grid__row">
	<div class="grid__container single__container">
        <div class="single__image">
            <img src="<?php echo get_thumbnail_src($image['ID']); ?>" alt="">
        </div>
    </div>
</div>

<?php

get_template_part('views/single-post/image-caption');
