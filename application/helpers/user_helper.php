<?php
function user_form() {
  $obj = &get_instance();
  return array(
    'username' => $obj->input->post('username'),
    'password' => $obj->input->post('password'),
    'name' => $obj->input->post('name'),
    'email' => $obj->input->post('email'),
  );
}