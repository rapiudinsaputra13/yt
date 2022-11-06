<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setdata extends CI_Controller
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

    public function data()
    {
        $tb = $_GET['tb'];

        $requestData = $_REQUEST;

        // var_dump($requestData);
        // die;
        if ($tb == "cms_users") {
            $totaldata = $this->User_model->get_num_user();
        } elseif ($tb == "st_sponsor") {
            $totaldata = $this->Sponsor_model->get_num_sponsor();
        } elseif ($tb == "st_postingan") {
            $totaldata = $this->Postingan_model->get_num_postingan();
        } elseif ($tb == "st_pesan") {
            $totaldata = $this->Pesan_model->get_num_pesan();
        } elseif ($tb == "st_informasi") {
            $totaldata = $this->Informasi_model->get_num_informasi();
        }

        $totalFiltered = $totaldata;

        $start = $requestData['start'];
        $length = $requestData['length'];


        if ($length != -1) {
            if (empty($requestData['search']['value'])) {

                if ($tb == "cms_users") {
                    $query = $this->User_model->get_user_order($start, $length);
                } elseif ($tb == "st_sponsor") {
                    $query = $this->Sponsor_model->get_sponsor_order($start, $length);
                } elseif ($tb == "st_postingan") {
                    $query = $this->Postingan_model->get_postingan_order($start, $length);
                } elseif ($tb == "st_pesan") {
                    $query = $this->Pesan_model->get_pesan_order($start, $length);
                } elseif ($tb == "st_informasi") {
                    $query = $this->Informasi_model->get_informasi_order($start, $length);
                }
            } else {
                $where = $requestData['search']['value'];

                if ($tb == "cms_users") {
                    $query = $this->User_model->get_user_where($where, $start, $length);
                } elseif ($tb == "st_sponsor") {
                    $query = $this->Sponsor_model->get_sponsor_where($where, $start, $length);
                } elseif ($tb == "st_postingan") {
                    $query = $this->Postingan_model->get_postingan_where($where, $start, $length);
                } elseif ($tb == "st_pesan") {
                    $query = $this->Pesan_model->get_pesan_where($where, $start, $length);
                } elseif ($tb == "st_informasi") {
                    $query = $this->Informasi_model->get_informasi_where($where, $start, $length);
                }
            }
        } else {

            if ($tb == "cms_users") {
                $query = $this->User_model->get_user();
            } elseif ($tb == "st_sponsor") {
                $query = $this->Sponsor_model->get_sponsor();
            } elseif ($tb == "st_postingan") {
                $query = $this->Postingan_model->get_postingan();
            } elseif ($tb == "st_pesan") {
                $query = $this->Pesan_model->get_pesan();
            } elseif ($tb == "st_informasi") {
                $query = $this->Informasi_model->get_informasi();
            }
        }



        $i = 1;
        if (!empty($query)) {

            foreach ($query as $q) {
                if ($tb == "cms_users") {
                    $nesteddata = array();
                    $nesteddata[] = $i++;
                    $nesteddata[] = $q['username'];
                    $nesteddata[] = $q['email'];
                    $nesteddata[] = $q['phone'];
                    $nesteddata[] = "<a href='#' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#editmodal" . $q['id'] . "'>edit</a> <a class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#hapusmodal" . $q['id'] . "'>hapus</a>";
                    $data[] = $nesteddata;
                } elseif ($tb == "st_sponsor") {
                    $nesteddata = array();
                    $nesteddata[] = $i++;
                    $nesteddata[] = $q['nama_sponsor'];
                    $nesteddata[] = $q['logo'];
                    $nesteddata[] = "<a href='#' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#editmodal" . $q['id_sponsor'] . "'>edit</a> <a class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#hapusmodal" . $q['id_sponsor'] . "'>hapus</a>";
                    $data[] = $nesteddata;
                } elseif ($tb == "st_postingan") {
                    $nesteddata = array();
                    $nesteddata[] = $i++;
                    $nesteddata[] = $q['judul'];
                    $nesteddata[] = $q['produser'];
                    $nesteddata[] = $q['sutradara'];
                    $nesteddata[] = $q['poster'];
                    $nesteddata[] = "<a href='#' class='btn btn-info' data-bs-toggle='modal' data-bs-target='#detailmodal" . $q['id_postingan'] . "'>detail</a> <a href='#' class='btn btn-success' data-idPostingan='" . $q['id_postingan'] . "' onclick='get_edit(this)'>edit</a> <a class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#hapusmodal" . $q['id_postingan'] . "'>hapus</a>";
                    $data[] = $nesteddata;
                }
            }
        } else {


            if ($tb == "cms_users") {
                $nesteddata[] = "<tbody class=''><tr><th colspan='14'>No data found in the server</th></tr></tbody>";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $data[] = $nesteddata;
            } elseif ($tb == "st_sponsor") {
                $nesteddata[] = "<tbody class=''><tr><th colspan='14'>No data found in the server</th></tr></tbody>";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $data[] = $nesteddata;
            } elseif ($tb == "st_postingan") {
                $nesteddata[] = "<tbody class=''><tr><th colspan='14'>No data found in the server</th></tr></tbody>";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $data[] = $nesteddata;
            } elseif ($tb == "st_pesan") {
                $nesteddata[] = "<tbody class=''><tr><th colspan='14'>No data found in the server</th></tr></tbody>";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $data[] = $nesteddata;
            } elseif ($tb == "st_informasi") {
                $nesteddata[] = "<tbody class=''><tr><th colspan='14'>No data found in the server</th></tr></tbody>";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $nesteddata[] = "";
                $data[] = $nesteddata;
            }
        }



        $json_data = array(
            "draw" => intval($requestData['draw']),
            "recordsTotal" => intval($totaldata),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data,
        );
        // var_dump($json_data);
        // die;

        print_r(json_encode($json_data));
    }
}
