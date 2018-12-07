<?php

class Layout {

  function __construct($layout = 'admin_layout', $theme = 'spectrum') {
    $this->layout = $layout;
    $this->theme = $theme;
    $this->obj = &get_instance();
  }

  function view($view, $data = null) {
    $data['content'] = $this->obj->load->view($this->theme . '/' . $view, $data, TRUE);
    $this->obj->load->view($this->theme . '/' . $this->layout, $data);
  }

  function set_layout($layout) {
    $this->layout = $layout;
  }

  function get_theme() {
    return $this->theme;
  }

}
