<?php
function link_form() {
  $obj = &get_instance();
  return array(
    'name' => $obj->input->post('name'),
    'page_id' => $obj->input->post('page_id'),
  );
}