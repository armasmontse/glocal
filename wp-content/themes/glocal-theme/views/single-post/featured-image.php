<?php

$size = 'full'; // (thumbnail, medium, large, full or custom size)

$gallery = get_field('gallery');
$show_featured_image_in_content = get_field('show_featured_image_in_content');
$thumbnail = get_thumbnail_src(0, $size);
$video = get_field('url');

$images = [];

if($show_featured_image_in_content && $thumbnail){

    array_push($images, [
        'sizes' => [
            $size => $thumbnail,
        ]
    ]);

}

if($gallery) {

    $images = array_merge($images, $gallery);
    
}

if($images): ?>

    <section class="section-one single__slider">
        <div class="swiper-container" <?php if(count($images) > 1): ?>id="single__slider" <?php endif; ?>>
            <div class="swiper-wrapper">
                <?php foreach($images as $image): ?>
                    <div class="swiper-slide single__slider-image" style="background-image:url('<?php echo $image['sizes'][$size]; ?>');" >
                        <?php get_template_part('views/single-post/slide', remove_extension(basename(get_page_template_slug()))); ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Add Pagination -->
		    <div class="swiper-pagination"></div>
        </div>
    </section>

<?php elseif($video): ?>

    <section class="home__video single__video">
        <div class="video-container">
            <div class="youtube-autoplay" data-video-id="<?php echo $video ?>" data-autoplay="1" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%;">
                <div class="iframe"></div>
            </div>
        </div>
    </section>

<?php else: ?>

    <div class="single__image-spacing"></div>

<?php endif; ?>