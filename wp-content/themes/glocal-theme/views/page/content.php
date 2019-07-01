<section class="one-column">
	<div class="grid__row">
		<div class="grid__container">
			<div class="grid__col-1-1">
				<div class="one-column-text">
					<?php the_content() ?>
				</div>	
			</div>
		</div>
	</div>
</section>

<?php get_template_part('views/page/film'); ?>

<?php get_template_part('views/page/edition'); ?>

<?php if(get_field('content')): ?>

<section class="one-column">
	<div class="grid__row">
		<div class="grid__container">
			<div class="grid__col-1-1">
				<div class="one-column-text">
					<?php the_field('content'); ?>
				</div>	
			</div>
		</div>
	</div>
</section>

<?php endif; ?>

<?php if(get_field('show_glocalshare')): ?>

	<?php get_template_part('views/general/line-divisor'); ?>

	<?php get_template_part('views/general/glocalshare'); ?>

<?php endif; ?>

<?php if(get_field('show_recomendations')): ?>

	<?php get_template_part('views/general/line-divisor'); ?>

	<?php get_template_part('views/general/recomendaciones');?>

<?php endif; ?>