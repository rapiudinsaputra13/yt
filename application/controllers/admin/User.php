<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
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
            'title' => "Data User",
            'user' => $this->User_model->get_user(),
            'controller' => "cms_users"
        ];

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/user', $data);
    }

    // public function setdata()
    // {
    //     $requestData = $_REQUEST;

    //     $totaldata = $this->User_model->get_num_user();
    //     $totalFiltered = $totaldata;

    //     $start = $requestData['start'];
    //     $length = $requestData['length'];

    //     if ($length != -1) {
    //         if (empty($requestData['search']['value'])) {
    //             $query = $this->User_model->get_user_order($start, $length);
    //         } else {
    //             $where = $requestData['search']['value'];
    //             $query = $this->User_model->get_user_where($where, $start, $length);
    //         }
    //     } else {
    //         $query = $this->User_model->get_user();
    //     }

    //     $i = 1;

    //     foreach ($query as $q) {
    //         $nesteddata = array();
    //         $nesteddata[] = $i++;
    //         $nesteddata[] = $q['username'];
    //         $nesteddata[] = $q['email'];
    //         $nesteddata[] = $q['phone'];
    //         $nesteddata[] = "<a href='#' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#editmodal" . $q['id'] . "'>edit</a> <a class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#hapusmodal" . $q['id'] . "'>hapus</a>";
    //         $data[] = $nesteddata;
    //     }




    //     $json_data = array(
    //         "draw" => intval($requestData['draw']),
    //         "recordsTotal" => intval($totaldata),
    //         "recordsFiltered" => intval($totalFiltered),
    //         "data" => $data,
    //     );

    //     print_r(json_encode($json_data));
    // }

    public function edit_user()
    {

        $password1 = $this->input->post('password1');
        $password2 = $this->input->post('password2');
        if (empty($password1) && empty($password1)) {
            // $test = "why";
            // var_dump($test);
            // die;
            $id_user = $this->input->post('id');
            $data_user = [
                'username' => $this->input->post('username'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
            ];
            $this->User_model->edit_user($id_user, $data_user);
            $this->session->set_flashdata('alert', "<div class='alert alert-success alert-dismissible fade show' role='alert'>User berhasil diubah<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
            redirect(base_url("admin/User"));
        } else {

            if ($password1 == $password2) {
                // $test = "OK";
                // var_dump($test);
                // die;
                $id_user = $this->input->post('id');
                $data_user = [
                    'username' => $this->input->post('username'),
                    'password' => $password1,
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                ];
                $this->User_model->edit_user($id_user, $data_user);
                $this->session->set_flashdata('alert', "<div class='alert alert-success alert-dismissible fade show' role='alert'>User berhasil diubah<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
                redirect(base_url("admin/User"));
            } else {
                // $test = "NOT OK";
                // var_dump($test);
                // die;
                // $this->session->set_flashdata('alert', "<div class='alert alert-warning' role='alert'>Password yang dimasukan tidak sama!</div>");
                $this->session->set_flashdata('alert', "<div class='alert alert-warning alert-dismissible fade show' role='alert'>Password yang dimasukan tidak sama!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>");
                redirect(base_url("admin/User"));
            }
        }
    }

    public function hapus_user()
    {
        $id_user = $this->input->post('id');
        $this->User_model->hapus_user($id_user);
        $this->session->set_flashdata('alert', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>User berhasil dihapus<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
        redirect(base_url("admin/User"));
    }
}
