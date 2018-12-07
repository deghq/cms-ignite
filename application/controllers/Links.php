<?php
class Links extends CI_Controller {
  function __construct() {
    parent::__construct();
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('link_model');
  }

  function index() {
    $data['links'] = $this->link_model->find_all();
    $this->layout->view('links/index', $data);
  }

  function show($id) {
    $data['link'] = $this->link_model->read($id);
    $this->layout->view('links/show', $data);
  }

  function add() {
    if ($this->input->post()) {
      $link = link_form();
      $this->link_model->save($link);
      redirect('links');
    }
    $this->layout->view('links/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $link = link_form();
      $this->link_model->update($link, $id);
      redirect('links');
    }
    $data['link'] = $this->link_model->read($id);
    $this->layout->view('links/edit', $data);
  }

  function delete($id) {
    $this->link_model->delete($id);
    redirect('links');
  }
}