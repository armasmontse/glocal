<?php

$terms = get_terms( 'category', array(
    'hide_empty' => false,
));

echo "<pre>";
print_r(get_term_link($terms[0]));