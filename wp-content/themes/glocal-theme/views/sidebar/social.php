<?php

global $general_options;

?>
<ul class="menu__redes">
    <?php foreach($general_options['social'] as $network): ?>
        <?php if($network['url']): ?>
            <li class="menu__redes-item"><a href="<?php echo $network['url']; ?>" target="_blank" class=""><i class="<?php echo $network['icon']; ?>"></i></a></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
