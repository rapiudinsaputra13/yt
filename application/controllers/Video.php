<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Video';
        $this->load->view('layout/header1', $data);
        $this->load->view('video');
        $this->load->view('layout/footer');
    }
}
