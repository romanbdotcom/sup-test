<?php

if (!empty($args['data'])) {
    $authors = '';
    $bioses = '';
    foreach ($args['data'] as $contributors) {
        $authors .= '<a href="#" data-id="c-'.$contributors['contributor']['contributor_id'].'" class="author show-author-modal">'.$contributors['contributor']['name'] . '</a>' . ',';
    }
}
printf('<div class="authors"><span class="by">Author(s) : </span> %s</div>%s', $authors, $bios);