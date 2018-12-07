<?php
function post_form() {
  $obj = &get_instance();
  return array(
    'title' => $obj->input->post('title'),
    'content' => $obj->input->post('content'),
  );
}

function comment_form($post_id, $user_id) {
  $obj = &get_instance();
  return array(
    'post_id' => $post_id,
    'user_id' => $user_id,
    'comments' => $obj->input->post('comments'),
  );
}