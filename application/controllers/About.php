<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        $this->load->model('About_model');
    }

    public function index()
    {
        $data['title'] = 'About';

        if ($this->agent->is_mobile()) {
            $this->load->view('layout/header', $data);
            $this->load->view('mobile/about');
            $this->load->view('layout/footer');
        } else {
            $data['struktur_organisasi'] = $this->About_model->get_struktur_organisasi();
            $this->load->view('layout/header', $data);
            $this->load->view('about');
            $this->load->view('layout/footer');
        }
    }

    public function viewso($id)
    {

        $this->db->select('*');
        $this->db->from('st_struktur_organisasi');
        $this->db->where('id', $id);
        $data['org'] = $this->db->get()->row_array();



        $data['page_title'] = "About " . $id;

        $myModal1 = $this->load->view('view_so', $data);
        echo json_encode(array('view' => $myModal1));
    }
}
