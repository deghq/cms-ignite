<?php
class Home extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('page_model');
    $this->load->model('link_model');
    $this->layout->set_layout('home_layout');
  }

  function index() {
    $data['links'] = $this->link_model->find_all();
    $this->layout->view('home', $data);
  }
}