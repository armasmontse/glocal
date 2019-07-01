<div class="grid__col-1-3">
	<div class="mas-vistos__box">
		<a href="<?php the_permalink(); ?>">
			<div class="mas-vistos__cont-img">
				<img class="mas-vistos__img" src="<?php echo get_thumbnail_src(); ?>" alt="">
			</div>

		</a>
		<?php the_category(); ?>
		<a href="<?php the_permalink(); ?>">
			<h4 class="mas-vistos__content"><?php the_title(); ?></h4>
		</a>
	</div>
</div>
