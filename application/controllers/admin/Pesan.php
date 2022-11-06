<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
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


        $data = [
            'title' => "Data Pesan",
            'data' => $this->Pesan_model->get_pesan(),
        ];

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/pesan', $data);
        $this->load->view('admin/layout/footer');
    }
}
