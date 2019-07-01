<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- C o n o c e n o s -->
	<div class="conocenos">

		<h3 class="section-category conocenos__ttl text-center"><?php the_title(); ?></h3>

		<?php get_template_part('views/page/content'); ?>

	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
