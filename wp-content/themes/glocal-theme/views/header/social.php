<?php

global $general_options;

?>
<ul class="header__redes">
    
    <?php foreach($general_options['social'] as $network): ?>
        <?php if($network['url']): ?>
            <li><a target="_blank" href="<?php echo $network['url']; ?>" class="header__redes-links"><i class="<?php echo $network['icon']; ?>"></i></a></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
