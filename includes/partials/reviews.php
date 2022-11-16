<?php

if (!empty($args['data'])) {
    $reviews = '';

    foreach ($args['data'] as $review) {
        $reviews .= '<li>'.$review['review']['description'] . '</li>';
    }

    printf('<ul class="reviews">%s</ul>', $reviews);
}
