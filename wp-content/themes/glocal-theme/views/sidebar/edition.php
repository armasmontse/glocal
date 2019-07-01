<?php

// Variable set on header.php
global $featured_edition;

if (!empty($featured_edition)): 
	
	$post = $featured_edition;
    setup_postdata($post);
    
    ?>
    
    <div class="menu__publishing">		
        <h4 class="menu__publishing-edition"><?php the_title(); ?><br><?php the_field('edition'); ?></h4>
        <?php if(get_field('author_cover_page')): ?>
            <img class="menu__publishing-magazine" src="<?php echo get_field('author_cover_page')['sizes']['large'] ?>" alt="Magazine">
        <?php endif; ?>
        <p class="menu__publishing-text"><?php the_field('description'); ?></p>
    </div>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>
