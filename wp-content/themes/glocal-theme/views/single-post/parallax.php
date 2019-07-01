<?php

$image = get_sub_field('image');


?>
<div class="single__parallax">
    <div class="single__parallax--image" data-parallax="scroll" data-image-src="<?php echo get_thumbnail_src($image['ID']); ?>"></div>
</div>