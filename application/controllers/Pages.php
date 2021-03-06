<?php
class Pages extends CI_Controller {
  function __construct() {
    parent::__construct();
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('page_model');
  }

  function index() {
    $data['pages'] = $this->page_model->find_all();
    $this->layout->view('pages/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $page = page_form();
      $this->page_model->save($page);
      redirect('pages');
    }
    $this->layout->view('pages/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $page = page_form();
      $this->page_model->update($page, $id);
      redirect('pages');
    }
    $data['page'] = $this->page_model->read($id);
    $this->layout->view('pages/edit', $data);
  }

  function delete($id) {
    $this->page_model->delete($id);
    redirect('pages');
  }
}