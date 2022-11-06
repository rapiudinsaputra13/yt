<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Contact';

        if ($this->agent->is_mobile()) {
            $this->load->view('layout/header', $data);
            $this->load->view('mobile/contact');
            $this->load->view('layout/footer');
        } else {
            $this->load->view('layout/header', $data);
            $this->load->view('contact');
            $this->load->view('layout/footer');
        }
    }
}
