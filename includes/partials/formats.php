<?php

if (!empty($args['data'])) {
    $available_formats = '';

    foreach ($args['data'] as $formats) {
        $available_formats .= $formats['detail'] . ', ';
    }

    printf('<p class="formats"><small>%s</small></p>', $available_formats);
}