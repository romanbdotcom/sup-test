<?php

if (!empty($args['data'])) {
    $retailers = '';
    count($args['data']);

    foreach ($args['data'] as $links) {
        $retailers .= '<p><a href="' . $links['path'] . '" target="_blank">' . $links['label'] . '</a></p>';
    }

}

?>
<div class="card text-center">
  <div class="card-header">
    Retailers
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <?php  printf('<div class="card-text links">%s</div>', $retailers); ?>
  </div>
</div>