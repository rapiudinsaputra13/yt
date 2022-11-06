<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
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
            'title' => "Data Info",
            'data' => $this->Info_model->get_info(),
        ];

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/info', $data);
        $this->load->view('admin/layout/footer');
    }
}
