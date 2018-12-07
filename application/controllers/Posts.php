<?php
class Posts extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('post_model');
  }

  function index() {
    $data['posts'] = $this->post_model->find_all();
    $this->layout->view('posts/index', $data);
  }

  function show($id) {
    $data['post'] = $this->post_model->read($id);
    $this->layout->view('posts/show', $data);
  }

  function add() {
    if ($this->input->post()) {
      $post = post_form();
      $this->post_model->save($post);
      redirect('posts');
    }
    $this->layout->view('posts/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $post = post_form();
      $this->post_model->update($post, $id);
      redirect('posts');
    }
    $data['post'] = $this->post_model->read($id);
    $this->layout->view('posts/edit', $data);
  }

  function delete($id) {
    $this->post_model->delete($id);
    redirect('posts');
  }
}