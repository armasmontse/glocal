<?php 

$author = get_field('author');
$photographer = get_field('photographer');

?>
<?php if($author): ?>
    <p class="single__info-by"><strong>Por:</strong> <?php echo $author; ?></p>
<?php endif; ?>
<?php if($photographer): ?>
    <p class="single__info-photos"><strong>Fotos:</strong> <?php echo $photographer; ?></p>
<?php endif; ?>