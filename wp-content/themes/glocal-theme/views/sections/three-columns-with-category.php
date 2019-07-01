<div class="grid__col-1-3">
	<div class="three__categorie-box">
		<a href="<?php the_permalink(); ?>">
			<div class="three__categorie-contImg">
				<img class="three__categorie-img" src="<?php echo get_thumbnail_src(); ?>" alt="">
			</div>
		</a>
		<?php the_category(); ?>
		<a href="<?php the_permalink(); ?>">
			<h4 class="three__categorie-content"><?php the_title(); ?></h4>
		</a>
	</div>
</div>
