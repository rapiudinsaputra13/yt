<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    // var_dump($_SESSION['loggedin']);
    // die;
    if (!$_SESSION['loggedin']) {
      redirect(base_url("home/home1"));
    }
  }

  public function index()
  {
    $data['title'] = 'Dashboard';

    $u = $this->db->get('cms_users');
    $data['user'] = $u->num_rows();

    $this->load->view('admin/layout/header', $data);
    $this->load->view('admin/layout/topbar', $data);
    $this->load->view('admin/layout/sidebar', $data);
    $this->load->view('admin/index');
    $this->load->view('admin/layout/footer');
  }

  public function poster()
  {
    $data['title'] = 'Data Poster';
    $data['poster'] = $this->Dashboard_model->get_poster();

    $this->load->view('admin/layout/header', $data);
    $this->load->view('admin/layout/topbar', $data);
    $this->load->view('admin/layout/sidebar', $data);
    $this->load->view('admin/poster_setting');
    $this->load->view('admin/layout/footer');
  }
}
