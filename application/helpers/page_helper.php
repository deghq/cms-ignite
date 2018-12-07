<?php
function page_form() {
  $obj = &get_instance();
  return array(
    'title' => $obj->input->post('title'),
    'content' => $obj->input->post('content'),
  );
}

function redirect_if($condition, $url) {
  if ($condition) {
    redirect($url);
  }
}

function load_view($view, $data = null) {
  $obj = &get_instance();
  $obj->load->view($obj->layout->get_theme() . '/' . $view, $data);
}