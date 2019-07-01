<?php 

$posts = getMyPosts(['count' => 12]);

if (array_key_exists('data', $posts) && $posts['data']):

?>

<section class="slider__vistos">
	<div class="grid__row">
		<div class="grid__container">
			<div class="grid__col-1-1">
				<h3 class="slider__vistos-ttl"><?php echo __('#glocalshare', TRANSDOMAIN); ?></h3>
				<div class="swiper-container swiper-three-columns">
					<div class="swiper-wrapper">
						<?php foreach($posts['data'] as $post): ?>
							<div class="swiper-slide">
								<?php include get_stylesheet_directory() . '/views/general/instagram-embed.php'; ?>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-button-prev slider__vistos-prev"></div>
	    			<div class="swiper-button-next slider__vistos-next"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif ?>