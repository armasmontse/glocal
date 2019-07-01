<?php

$posts = get_field('most_viewed_posts', 'posts-options');

if (!empty($posts)):

?>

<section class="slider__vistos">
	<div class="grid__row">
		<div class="grid__container">
			<div class="grid__col-1-1">
				<h3 class="slider__vistos-ttl"><?php echo __('Lo más visto', TRANSDOMAIN); ?></h3>
				<div class="swiper-container swiper-three-columns">
					<div class="swiper-wrapper">
						<?php foreach($posts as $post): setup_postdata( $post ); ?>
							<div class="swiper-slide">
								<?php get_template_part('views/sections/three-columns'); ?>
							</div>
						<?php endforeach; wp_reset_postdata(); ?>
					</div>
					<div class="swiper-button-prev slider__vistos-prev"></div>
	    			<div class="swiper-button-next slider__vistos-next"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
