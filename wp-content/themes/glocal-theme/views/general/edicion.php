<?php

// Variable set on header.php
global $featured_edition;
global $paypal_url;

if (!empty($featured_edition)): 
	
	$post = $featured_edition;
	setup_postdata($post);

	$images = get_field('gallery');
	$size = 'large'; // (thumbnail, medium, large, full or custom size)

	?>
	<section class="home-edicion">
		<div class="grid__row">
			<div class="grid__container">
			
				<?php if(get_field('author_cover_page')): ?>
					<div class="grid__col-1-3">
						<div class="home-edicion__box">
							<div class="box__img">
								<img class="home-edicion__box-img-vertical" src="<?php echo get_field('author_cover_page')['sizes'][$size] ?>" alt="">
							</div>
						</div>
					</div>
				<?php endif; ?>

				<div class="grid__col-1-8">
					<div class="home-edicion__box contenido">
						<h5 class="home-edicion__content-ttl"><?php the_title(); ?></h5>

						<div class="home-edicion__content-text">
							<?php the_field('description'); ?>
						</div>

						<div>

							<?php if($paypal_url): ?>
								<a href="<?php echo $paypal_url ?>" target="_blank" class="home-edicion__content-link">
									<?php echo __('Suscríbete', TRANSDOMAIN); ?>
								</a>
							<?php endif; ?>

							<?php if(get_field('paypal_url')): ?>
								<a href="<?php the_field('paypal_url'); ?>" target="_blank" class="home-edicion__content-link" style="margin-left: 30px;">
									<?php echo __('Comprar', TRANSDOMAIN); ?>
								</a>
							<?php endif; ?>

						</div>

					</div>
				</div>

				<?php if($images): ?>

					<?php foreach( $images as $image ): ?>
				
						<div class="grid__col-1-3">
							<div class="home-edicion__box aspect__img--edicion">
								<img class="home-edicion__box-img" src="<?php echo get_thumbnail_src($image['ID'], $size); ?>" alt="">
							</div>
						</div>

					<?php endforeach; ?>

				<?php endif; ?>

			</div>
		</div>
	</section>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>