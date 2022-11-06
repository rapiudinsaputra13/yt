<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sponsor extends CI_Controller
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
            'title' => "Data Sponsor",
            'data' => $this->Sponsor_model->get_sponsor(),
            'controller' => "st_sponsor"
        ];

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/sponsor', $data);
    }

    public function add_sponsor()
    {

        // if (!empty($this->input->post('logo'))) {
        $config = array(
            'upload_path' => "./assets/upload/logo/",
            'allowed_types' => "Png|png|PNG|JPG|jpg|Jpg|jpeg|Jpeg|JPEG",
            'file_name' => $_FILES['logo']['name'],
            'encrypt_name' => TRUE,
            'max_size' => 2168, // 7mb
            'max_height' => "30000",
            'max_width' => "30000"
        );
        $this->upload->initialize($config);
        if ($this->upload->do_upload('logo')) {
            // var_dump($_FILES['logo']);
            // die;

            $upload_data = $this->upload->data();
            $data_sponsor = [
                'nama_sponsor' => $this->input->post('nama_sponsor'),
                'logo' => $upload_data['file_name'],
                'created_by' => $_SESSION['id'],
                'created' => date("Y-m-d h:i:sa"),
            ];
            $this->Sponsor_model->add_sponsor($data_sponsor);
            $this->session->set_flashdata('alert', "<div class='alert alert-success alert-dismissible fade show' role='alert'>Sponsor berhasil ditambahkan<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
            // $id = $this->photo->save($data);
        } else {
            $kondisi_size =  "The file you are attempting to upload is larger than the permitted size.";
            $kondisi_tipe = "The filetype you are attempting to upload is not allowed.";
            $parameter = $this->upload->display_errors();

            if (strpos($parameter, $kondisi_size)) {
                $msg = "File yang di upload terlalu besar.";
            } elseif (strpos($parameter, $kondisi_tipe)) {
                $msg = "Jenis file yang di upload tidak sesuai.";
            } else {
                $msg = "File yang anda upload gagal!";
            }
            $this->session->set_flashdata('alert', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>" . $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
        }
        // } else {
        //     $data_sponsor = [
        //         'nama_sponsor' => $this->input->post('nama_sponsor'),
        //     ];
        //     $this->Sponsor_model->add_sponsor($data_sponsor);
        //     $this->session->set_flashdata('alert', "<div class='alert alert-success alert-dismissible fade show' role='alert'>Sponsor berhasil ditambahkan<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
        // }

        redirect(base_url("admin/Sponsor"));
    }

    public function edit_sponsor()
    {


        if ($_FILES['logo']['name'] != NULL) {

            $config = array(
                'upload_path' => "./assets/upload/logo/",
                'allowed_types' => "Png|png|PNG|JPG|jpg|Jpg|jpeg|Jpeg|JPEG",
                'file_name' => $_FILES['logo']['name'],
                'encrypt_name' => TRUE,
                'max_size' => 2368, // 7mb
                'max_height' => "30000",
                'max_width' => "30000"
            );
            $this->upload->initialize($config);
            if ($this->upload->do_upload('logo')) {
                $upload_data = $this->upload->data();
                $id_sponsor = $this->input->post('id');
                $data_sponsor = [
                    'nama_sponsor' => $this->input->post('nama_sponsor'),
                    'logo' => $upload_data['file_name'],
                    'updated_by' => $_SESSION['id'],
                    'updated' => date("Y-m-d h:i:sa"),
                ];
                $this->Sponsor_model->edit_sponsor($id_sponsor, $data_sponsor);
                $this->session->set_flashdata('alert', "<div class='alert alert-success alert-dismissible fade show' role='alert'>Sponsor berhasil diubah<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
                // $id = $this->photo->save($data);
            } else {

                $kondisi_size =  "The file you are attempting to upload is larger than the permitted size.";
                $kondisi_tipe = "The filetype you are attempting to upload is not allowed.";
                $parameter = $this->upload->display_errors();

                if (strpos($parameter, $kondisi_size)) {
                    $msg = "File yang di upload terlalu besar.";
                } elseif (strpos($parameter, $kondisi_tipe)) {
                    $msg = "Jenis file yang di upload tidak sesuai.";
                }
                $this->session->set_flashdata('alert', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>" . $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
            }
        } else {

            $id_sponsor = $this->input->post('id');
            $data_sponsor = [
                'nama_sponsor' => $this->input->post('nama_sponsor'),
                'updated_by' => $_SESSION['id'],
                'updated' => date("Y-m-d h:i:sa"),
            ];
            $this->Sponsor_model->edit_sponsor($id_sponsor, $data_sponsor);
            $this->session->set_flashdata('alert', "<div class='alert alert-success alert-dismissible fade show' role='alert'>Sponsor berhasil diubah<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
        }

        redirect(base_url("admin/Sponsor"));
    }


    public function hapus_sponsor()
    {
        $id_sponsor = $this->input->post('id');
        $this->Sponsor_model->hapus_sponsor($id_sponsor);
        $this->session->set_flashdata('alert', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Sponsor berhasil dihapus<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
        redirect(base_url("admin/Sponsor"));
    }
}
