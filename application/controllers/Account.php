<?php
class Account extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
  }

  function login() {
    $data['message'] = '';
    if ($this->input->post()) {
      list($username, $password) = login_form();
      $user = $this->user_model->read_by_username_and_password($username, $password);
      if ($user) {
        $this->session->set_userdata('user_id', $user->id);
        redirect('account/dashboard');
      } else {
        $data['message'] = 'Invalid user name or password. Please try again!';
      }
    }
    $this->load->view($this->layout->get_theme() . '/account/login', $data);
  }

  function dashboard() {
    $data = array();
    $this->layout->view('account/dashboard', $data);
  }

  function logout() {
    $this->session->sess_destroy();
    redirect('account/login');
  }
}