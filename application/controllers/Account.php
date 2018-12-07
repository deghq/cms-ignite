<?php
class Account extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
  }

  function login() {
    redirect_if($this->session->userdata('user_id'), 'dashboard');
    $data['message'] = '';
    if ($this->input->post()) {
      list($username, $password) = login_form();
      $user = $this->user_model->read_by_username_and_password($username, $password);
      if ($user) {
        $this->session->set_userdata('user_id', $user->id);
        redirect('dashboard');
      } else {
        $data['message'] = 'Invalid user name or password. Please try again!';
      }
    }
    $this->load->view('account/login', $data);
  }

  function dashboard() {
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $data = array();
    $this->layout->view('account/dashboard', $data);
  }

  function logout() {
    $this->session->sess_destroy();
    redirect('login');
  }
}