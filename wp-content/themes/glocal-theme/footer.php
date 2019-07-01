</div> <!-- Aquí cierra el main-wrap -->

<div class="grid__container">
	<hr class="line-footer-divisor">
</div>

<footer class="footer">
	<div class="grid__row">
		<div class="grid__container">
			<div class="grid__col-1-3">
				<?php get_template_part('views/footer/menu'); ?>
			</div>
			<div class="grid__col-1-3">
				<?php get_template_part('views/footer/newsletter'); ?>
			</div>
			<div class="grid__col-1-3">
				<?php get_template_part('views/footer/social'); ?>
			</div>
		</div>
	</div>
</footer>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>

<script type='text/javascript'>
	(function($) {
		window.fnames = new Array();
		window.ftypes = new Array();
		fnames[0]='EMAIL';
		ftypes[0]='email';
	}(jQuery));

	var $mcj = jQuery.noConflict(true);
</script>

<script async defer src="//www.instagram.com/embed.js"></script>

<?php wp_footer(); ?>

</body>
</html>
