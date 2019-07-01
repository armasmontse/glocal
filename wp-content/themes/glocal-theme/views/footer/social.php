<?php

global $general_options;

?>
<div class="footer__social">
    <ul class="footer__redes">
        <?php foreach($general_options['social'] as $network): ?>
            <li class="footer__redes-links"><a href="<?php echo $network['url']; ?>" target="_blank" ><i class="<?php echo $network['icon']; ?>"></i></a></li>
        <?php endforeach; ?>
    </ul>
    <div class="footer__brand">
        <span><img src="<?php echo THEMEURL ?>images/logo-glocal-magazine.svg" alt=""></span>
    </div>
</div>
