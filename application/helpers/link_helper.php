<?php
function link_form() {
  $obj = &get_instance();
  return array(
    'name' => $obj->input->post('name'),
  );
}