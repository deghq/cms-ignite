<?php
class Home extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('page_model');
    $this->load->model('link_model');
    
    $this->layout->set_theme('themes/spectrum');
  }

  function index() {
    $data['links'] = $this->link_model->find_all();
    $this->layout->view('home', $data);
  }

  function page($id) {
    $data['links'] = $this->link_model->find_all();
    $data['page'] = $this->page_model->read($id);
    $this->layout->view('page', $data);
  }
}