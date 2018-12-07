<?php
class Users extends CI_Controller {
  function __construct() {
    parent::__construct();
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('user_model');
  }

  function index() {
    $data['users'] = $this->user_model->find_all();
    $this->layout->view('users/index', $data);
  }

  function show($id) {
    $data['user'] = $this->user_model->read($id);
    $this->layout->view('users/show', $data);
  }

  function add() {
    if ($this->input->post()) {
      $user = user_form();
      $this->user_model->save($user);
      redirect('users');
    }
    $this->layout->view('users/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $user = user_form();
      $this->user_model->update($user, $id);
      redirect('users');
    }
    $data['user'] = $this->user_model->read($id);
    $this->layout->view('users/edit', $data);
  }

  function delete($id) {
    $this->user_model->delete($id);
    redirect('users');
  }
}