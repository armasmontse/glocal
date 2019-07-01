<?php

$show_ad = get_sub_field('show_ad');

?>
<div class="grid__row">
	<div class="grid__container single__container <?php echo $show_ad ? 'single__container-23-13' : ''; ?>">
		<?php if($show_ad): ?>
			<div class="single__content--wysiwyg">
				<?php the_sub_field('content'); ?>
			</div>
			<div class="single__content--ad">
				<?php get_template_part('views/ad/square'); ?>
			</div>
		<?php else: ?>
			<div class="single__content--wysiwyg">
				<?php the_sub_field('content'); ?>
			</div>
		<?php endif; ?>
	</div>
</div>

