<?php
function link_form() {
  $obj = &get_instance();
  return array(
    'name' => $obj->input->post('name'),
    'reference' => $obj->input->post('reference'),
    'is_page_reference' => $obj->input->post('is_page_reference'),
    'page_id' => $obj->input->post('page_id'),
  );
}