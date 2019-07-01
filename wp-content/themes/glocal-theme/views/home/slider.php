<?php

$posts = get_field('posts_on_slider');

?>

<?php if ($posts): ?>
	<div class="section-one home__slider">
		<div class="swiper-container" id="swiper-home">
			<div class="swiper-wrapper">
				<?php foreach( $posts as $post): setup_postdata($post); ?>
					<div class="swiper-slide" style="background-image: url('<?php echo get_thumbnail_src(); ?>');" >
						<a class="home__slider-enlace" href="<?php the_permalink(); ?>">
							<h5 class="home__slider-categoria"><?php the_category(); ?></h5>
							<h2 class="home__slider-ttl"><?php the_title(); ?></h2>
							<div class="home__slider-excerpt">
								<?php the_excerpt(); ?>
							</div>
						</a>
					</div>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
<?php endif ?>
