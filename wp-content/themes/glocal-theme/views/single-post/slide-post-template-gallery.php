<div class="single__header">
	<h2 class="single__header-title"><?php the_title() ?></h2>
	<div class="single__header-text"><?php the_excerpt()?></div>
	
	
	<?php if( have_rows('content') ): ?>

	    <?php $masonry_id = 1; while ( have_rows('content') ) : the_row(); ?>

	    		<?php if(get_row_layout() == 'masonry'): ?>

	    			<a href="#masonry_<?php echo $masonry_id; ?>" class="single__header-galeria">Ver Galería</a>
				
				<?php $masonry_id++; endif; ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>
