<?php 

$tags = get_the_tags() ?: [];

if($tags) {
    $tags = array_map(function($tag) {
        return $tag->name;
    }, $tags);
}

$networks = [
    'facebook' => [
        'href' => 'https://www.facebook.com/sharer/sharer.php?u=' . get_the_permalink(),
        'icon' => 'fab fa-facebook-f'
    ],
    'twitter' => [
        'href' => 'https://twitter.com/intent/tweet?url=' . get_the_permalink() . '&text=' . get_the_title() . '&hashtags=' . implode(',', $tags),
        'icon' => 'fab fa-twitter'
    ]
];

?>
<span class="single__info-redes">
    <?php foreach($networks as $network): ?>
        <a href="<?php echo esc_url($network['href']); ?>" target="_blank" onclick="window.open(this.href, '_blank','left=20,top=20,width=500,height=500,toolbar=no,resizable=no'); return false;">
            <i class="<?php echo $network['icon']; ?>"></i>
        </a>
    <?php endforeach; ?>
</span>

