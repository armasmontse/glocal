<!-- menu lateral -->
<div class="menu" id="menu__JS">
    
    <button class="menu__close" id="menu__close_JS">
        <img src="<?php echo THEMEURL ?>images/menu-close.svg" alt="Botón para cerrar menu">
    </button>

    <div class="menu__content">
        
        <?php
        
        get_template_part('views/sidebar/menu', 'header');
        
        get_template_part('views/sidebar/menu');
        
        get_template_part('views/sidebar/edition');
        
        get_template_part('views/sidebar/social');
        
        ?> 
        
    </div>
</div>