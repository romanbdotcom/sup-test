<?php

if (!empty($args['data'])) {
    $prices = '';
    foreach ($args['data'] as $price) {
       $prices .= '<div class="price">'.$price['locale']. ' '. $price['amount'] . '</div>';
    }
    printf('<div class="prices"><small>%s</small></div>', $prices);
}
