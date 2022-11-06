<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model', 'user');
  }

  public function index()
  {
    redirect('/');
  }

  public function login()
  {

    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->user->validation($email);

    if ($user) {
      $user = $this->user->validation($email, $password);
      if ($user) {

        $u = $this->user->get_sessions($email, $password);


        $data = array(
          'username'     => $u[0]['username'],
          'email'     => $u[0]['email'],
          'phone'     => $u[0]['phone'],
          'id'         => $u[0]['id'],
          'client'     => $u[0]['client'],
          'group_id'    => $u[0]['group_id'],
          'password'    => $u[0]['password'],
          'loggedin'     => TRUE
        );
        $this->session->set_userdata($data);

        $this->session->set_flashdata('alert_success', 'Berhasil Login!');

        redirect('admin/dashboard');
      } else {
        $this->session->set_flashdata('alert_error', 'Kata Sandi Salah!');
      }
    } else {
      $this->session->set_flashdata('alert_error', 'Email Salah!');
    }

    redirect('/home/home1');
  }

  public function logout()
  {

    unset(
      $_SESSION['username'],
      $_SESSION['email'],
      $_SESSION['phone'],
      $_SESSION['id'],
      $_SESSION['client'],
      $_SESSION['group_id'],
      $_SESSION['password'],
      $_SESSION['loggedin'],
    );

    $this->session->set_flashdata('alert_success', 'Logout Berhasil');
    redirect("/home/home1");
  }
}
