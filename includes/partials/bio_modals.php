<?php

$modal_template = '
<div class="modal modal-bio" trole="dialog" data-id="%s">
  <div class="modal-dialog" role="document">
    <div class="modal-content py-5">
      <div class="modal-body px-5">
        %s
      </div>
      <div class="modal-footer px-5">
        <button class="close-modal mx-auto" data-id="%s">CLOSE</button>
      </div>
    </div>
  </div>
</div>
';

if (!empty($args['data'])) {
    $authors = '';
    $bioses = '';
    foreach ($args['data'] as $contributors) {
        $id = 'c-' . $contributors['contributor']['contributor_id'];

        printf($modal_template, $id, $contributors['contributor']['bio'], $id);
    }
}
