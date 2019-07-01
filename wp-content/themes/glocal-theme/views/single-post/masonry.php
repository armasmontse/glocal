<?php

$masonry = get_sub_field('images');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$modal_id = uniqid();

if($masonry):

?>

<section class="galeria" id="masonry_<?php echo $masonry_id; ?>">
	<div class="grid__row">
		<div class="grid__container">
			<div class="grid__col-1-1">
				<div class="masonry__container sm">
					<div class="masonry">
						<div class="masonry-sizer"></div>
						<?php $i = 0; foreach( $masonry as $image ): ?>
							<div class="masonry-item modal-opener" data-index="<?php echo $i ?>" data-modal="<?php echo $modal_id; ?>">
								<img class="masonry-item-image" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
								<div class="masonry-item-container">
									<p class="masonry-item-container--text"><?php echo $image['caption']; ?></p>
								</div>
							</div>
						<?php $i++; endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal" id="<?php echo $modal_id; ?>">
	<div class="modal__content">
		<div class="modal__header">
			<button type="submit" class="close modal-closer">
				<img class="modal__header--close" src="<?php echo THEMEURL ?>images/menu-close.svg" alt="Botón para cerrar menu">
			</button>
		</div>
		<div class="modal__body">
			<div class="slider">
				<?php foreach( $masonry as $image ): ?>
					<div>
						<?php include(get_stylesheet_directory() . '/views/single-post/masonry-slide.php'); ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="modal__footer">
			<?php get_template_part('views/single-post/share'); ?>
		</div>
	</div>
</div>

<?php endif; ?>
