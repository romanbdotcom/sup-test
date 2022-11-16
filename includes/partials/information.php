<?php

$page_id = 0;
$info = '';

if (!empty($args['page_id'])) {
    $page_id = $args['page_id'];
}

if(function_exists('get_field')){
    $code = get_field('book_code', $page_id);
    $info .= '<p><strong>Code: </strong>'.$code.'</p>';
}

if(function_exists('get_field')){
    $code = get_field('in_stock', $page_id);
    $info .= '<p><strong>InStock: </strong>'.$code.'</p>';
}

printf('<div class="infos">%s</div>', $info);