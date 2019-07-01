<div class="masonry-slide">
    <div class="masonry-slide__description">
        <p class="date"><?php echo toDateTime($image['date'])->format('d F Y'); ?></p>
        <h4 class="ttl"><?php echo $image['title']; ?></h4>
        <p class="content"><?php echo nl2br($image['description']); ?></p>
    </div>
    <div class="masonry-slide__image">
        <img src="<?php echo get_thumbnail_src($image['ID']); ?>" alt="">
    </div>
</div>