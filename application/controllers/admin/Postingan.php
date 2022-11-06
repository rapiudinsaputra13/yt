<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Postingan extends CI_Controller
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



        // $hari = date("l");
        // $tanggal = date("d");
        // $bulan = date("F");
        // $taun = date("Y");
        // $format_indo = $hari.", ".$tanggal." ".$bulan." ".$taun;

        // var_dump($format_indo);
        // die;
        $data = [
            'title' => "Data Postingan",
            'data' => $this->Postingan_model->get_postingan(),
            'controller' => "st_postingan"
        ];

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/postingan', $data);
    }

    public function add_postingan()
    {
        $jml_pemain = $this->input->post('jml_pemain');
        $jml_tag = $this->input->post('jml_tag');

        $pemain = NULL;
        for ($jml_pemain1 = 1; $jml_pemain1 <= $jml_pemain; $jml_pemain1++) {
            $pemain .= $this->input->post('pemain' . $jml_pemain1) . ",";
        }

        $tag = NULL;
        for ($jml_tag1 = 1; $jml_tag1 <= $jml_tag; $jml_tag1++) {
            $tag .= $this->input->post('tag' . $jml_tag1) . ",";
        }
        // var_dump($pemain);
        // var_dump($tag);
        // die;


        $tanggal = $this->input->post('tanggal');
        // $hari = date('l', strtotime($tanggal));
        // $tgl = date('d', strtotime($tanggal));
        // $bulan = date('F', strtotime($tanggal));
        // $tahun = date('Y', strtotime($tanggal));

        // if ($hari == "Sunday") {
        //     $hari = "Minggu";
        // } elseif ($hari == "Monday") {
        //     $hari = "Senin";
        // } elseif ($hari == "Tuesday") {
        //     $hari = "Selasa";
        // } elseif ($hari == "Wednesday") {
        //     $hari = "Rabu";
        // } elseif ($hari == "Thursday") {
        //     $hari = "Kamis";
        // } elseif ($hari == "Friday") {
        //     $hari = "Jumat";
        // } elseif ($hari == "Saturday") {
        //     $hari = "Sabtu";
        // }

        // if ($bulan == "January") {
        //     $bulan = "Januari";
        // } elseif ($bulan == "February") {
        //     $bulan = "Februari";
        // } elseif ($bulan == "March") {
        //     $bulan = "Maret";
        // } elseif ($bulan == "May") {
        //     $bulan = "Mei";
        // } elseif ($bulan == "June") {
        //     $bulan = "Juni";
        // } elseif ($bulan == "July") {
        //     $bulan = "Juli";
        // } elseif ($bulan == "August") {
        //     $bulan = "Agustus";
        // } elseif ($bulan == "October") {
        //     $bulan = "Oktober";
        // } elseif ($bulan == "December") {
        //     $bulan = "Desember";
        // } else {
        //     $bulan = $bulan;
        // }

        // $tanggal_acara = $hari . ", " . $tgl . " " . $bulan . " " . $tahun;



        $config = array(
            'upload_path' => "./assets/upload/poster/",
            'allowed_types' => "Png|png|PNG|JPG|jpg|Jpg|jpeg|Jpeg|JPEG",
            'file_name' => $_FILES['poster']['name'],
            'encrypt_name' => TRUE,
            'max_size' => 2168, // 7mb
            'max_height' => "30000",
            'max_width' => "30000"
        );
        $this->upload->initialize($config);
        if ($this->upload->do_upload('poster')) {

            // var_dump("upload poster berhasil");
            // die;
            $upload_data1 = $this->upload->data();
            $data_postingan = [
                'judul' => $this->input->post('judul'),
                'subjudul' => $this->input->post('subjudul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pemain' => $pemain,
                'link' => $this->input->post('link'),
                'produser' => $this->input->post('produser'),
                'sutradara' => $this->input->post('sutradara'),
                'musik' => $this->input->post('musik'),
                'tanggal' => $tanggal,
                'waktu' => $this->input->post('waktu'),
                'tempat' => $this->input->post('tempat'),
                'tag' => $tag,
                'poster' => $upload_data1['file_name'],
                'created_by' => $_SESSION['id'],
                'created' => date("Y-m-d h:i:sa"),
            ];

            $this->Postingan_model->add_postingan($data_postingan);
            $this->session->set_flashdata('alert', "<div class='alert alert-success alert-dismissible fade show' role='alert'>Postingan berhasil ditambahkan<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
            // $id = $this->photo->save($data);
        } else {
            $kondisi_size =  "The file you are attempting to upload is larger than the permitted size.";
            $kondisi_tipe = "The filetype you are attempting to upload is not allowed.";
            $parameter = $this->upload->display_errors();

            if (strpos($parameter, $kondisi_size)) {
                $msg = "Ukuran poster yang di upload terlalu besar.";
            } elseif (strpos($parameter, $kondisi_tipe)) {
                $msg = "Jenis file poster yang di upload tidak sesuai.";
            } else {
                $msg = "Postingan yang anda tambahkan gagal!";
            }
            // var_dump($msg);
            // die;
            $this->session->set_flashdata('alert', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>" . $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
        }
        // $id = $this->photo->save($data);

        redirect(base_url("admin/Postingan"));
    }

    public function data()
    {
        $id_postingan = $_GET['id'];
        $data = $this->Postingan_model->get_where_id($id_postingan);

        $data_pemain = $data[0]['pemain'];
        $data_pemainn = explode(",", $data_pemain);
        $jml_pemain = count($data_pemainn);
        $jml_pemainn = $jml_pemain - 2;

        $pemain = NULL;


        for ($jml_pemain1 = 0; $jml_pemain1 <= $jml_pemainn; $jml_pemain1++) {
            $jml_pem = $jml_pemain1 + 1;
            $pemain .= '<input class="form-control mb-3 pemain2" type="text" value="' . $data_pemainn[$jml_pemain1] . '" name="pemain' . $jml_pem . '" placeholder="Pemain ' . $jml_pem . '" aria-label="default input example">';
        }


        $data_tag = $data[0]['tag'];
        $data_tagg = explode(",", $data_tag);
        $jml_tag = count($data_tagg);
        $jml_tagg = $jml_tag - 2;

        $tag = NULL;

        for ($jml_tag1 = 0; $jml_tag1 <= $jml_tagg; $jml_tag1++) {
            $jml_ta = $jml_tag1 + 1;
            $tag .= '<input class="form-control mb-3 tag2" type="text" value="' . $data_tagg[$jml_tag1] . '" name="tag' . $jml_ta . '" placeholder="Tag ' . $jml_ta . '" aria-label="default input example">';
        }

        // var_dump($jml_pemainn);
        // var_dump($jml_tagg);
        // var_dump($pemain);
        // var_dump($tag);
        // die;

        $data_postingan = '<span class="">Judul</span>
        <input class="form-control mb-3" type="hidden" value="' . $data[0]['id_postingan'] . '" name="id_postingan" placeholder="Judul" aria-label="default input example">
        <input class="form-control mb-3" type="text" value="' . $data[0]['judul'] . '" name="judul" placeholder="Judul" aria-label="default input example">
        <span class="">Sub Judul</span>
        <input class="form-control mb-3" type="text" value="' . $data[0]['subjudul'] . '" name="subjudul" placeholder="Sub Judul" aria-label="default input example">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3">' . $data[0]['deskripsi'] . '</textarea>
        </div>

        <div class="row">
        
        <div class="col-lg-6">
                <span class="">Link Youtube</span>
                <input class="form-control mb-3" value="' . $data[0]['link'] . '" type="text" name="link" placeholder="Link Youtube" aria-label="default input example">
                <span class="">Produser</span>
                <input class="form-control mb-3" value="' . $data[0]['produser'] . '" type="text" name="produser" placeholder="Produser" aria-label="default input example">
                <span class="">Sutradara</span>
                <input class="form-control mb-3" value="' . $data[0]['sutradara'] . '" type="text" name="sutradara" placeholder="Sutradara" aria-label="default input example">
                <span class="">Musik</span>
                <input class="form-control mb-3" type="text" value="' . $data[0]['musik'] . '" name="musik" placeholder="Musik" aria-label="default input example">
                <div class="tag-area1">
                    <span>Tag</span><br />
                    <button class="btn btn-primary" type="button" data-nomor="1" id="button0" onclick="appendTextEdit2(this)">Add Tag</button><br /><br />
                    ' . $tag . '
                </div>
                <textarea class="form-control mb-3" id="jumlah_tagg" hidden name="jml_tag" aria-label="default input example">' . $jml_tag1 . '</textarea>
            </div>
            <div class="col-lg-6">
                <span class="">Tanggal</span>
                <input class="form-control mb-3" type="date" value="' . $data[0]['tanggal'] . '" name="tanggal" placeholder="tanggal" aria-label="default input example">
                <span class="">Waktu</span>
                <input class="form-control mb-3" type="time" name="waktu" value="' . $data[0]['waktu'] . '" placeholder="Waktu" aria-label="default input example">
                <span class="">Tempat</span>
                <input class="form-control mb-3" type="text" name="tempat" value="' . $data[0]['tempat'] . '" placeholder="Tempat" aria-label="default input example">

                <span class="">Poster</span>
                <input class="form-control mb-3" type="file" name="poster" placeholder="Poster" aria-label="default input example" accept="image/*">
                <div class="pemain-area1">
                    <span>Pemain</span><br />
                    <button class="btn btn-primary" type="button" data-nomor="1" id="button0" onclick="appendTextEdit1(this)">Add Pemain</button><br /><br />
                    ' . $pemain . '
                </div>
                <textarea class="form-control mb-3" id="jumlah_pemainn" hidden name="jml_pemain" aria-label="default input example">' . $jml_pemain1 . '</textarea>
            </div>
        </div>';

        print_r($data_postingan);
    }

    public function edit_postingan()
    {
        $id_postingan = $this->input->post('id_postingan');
        $jml_pemain = $this->input->post('jml_pemain');
        $jml_tag = $this->input->post('jml_tag');

        $pemain = NULL;
        for ($jml_pemain1 = 1; $jml_pemain1 <= $jml_pemain; $jml_pemain1++) {
            $pemain .= $this->input->post('pemain' . $jml_pemain1) . ",";
        }

        $tag = NULL;
        for ($jml_tag1 = 1; $jml_tag1 <= $jml_tag; $jml_tag1++) {
            $tag .= $this->input->post('tag' . $jml_tag1) . ",";
        }
        // var_dump($pemain);
        // var_dump($tag);
        // die;
        $config = array(
            'upload_path' => "./assets/upload/poster/",
            'allowed_types' => "Png|png|PNG|JPG|jpg|Jpg|jpeg|Jpeg|JPEG",
            'file_name' => $_FILES['poster']['name'],
            'encrypt_name' => TRUE,
            'max_size' => 2168, // 2mb
            'max_height' => "30000",
            'max_width' => "30000"
        );
        $this->upload->initialize($config);
        if ($this->upload->do_upload('poster')) {

            // var_dump("upload poster berhasil");
            // die;
            $upload_data1 = $this->upload->data();
            $data_postingan = [
                'judul' => $this->input->post('judul'),
                'subjudul' => $this->input->post('subjudul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pemain' => $pemain,
                'link' => $this->input->post('link'),
                'produser' => $this->input->post('produser'),
                'sutradara' => $this->input->post('sutradara'),
                'musik' => $this->input->post('musik'),
                'tanggal' => $this->input->post('tanggal'),
                'waktu' => $this->input->post('waktu'),
                'tempat' => $this->input->post('tempat'),
                'tag' => $tag,
                'poster' => $upload_data1['file_name'],
                'updated_by' => $_SESSION['id'],
                'updated' => date("Y-m-d h:i:sa"),
            ];

            $this->Postingan_model->edit_postingan($id_postingan, $data_postingan);
            $this->session->set_flashdata('alert', "<div class='alert alert-success alert-dismissible fade show' role='alert'>Postingan berhasil diubah<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
            // $id = $this->photo->save($data);
        } else {
            $kondisi_size =  "The file you are attempting to upload is larger than the permitted size.";
            $kondisi_tipe = "The filetype you are attempting to upload is not allowed.";
            $kondisi_kosong = "You did not select a file to upload.";
            $parameter = $this->upload->display_errors();
            // var_dump($parameter);
            // die;

            if (strpos($parameter, $kondisi_size)) {
                $msg = "Ukuran poster yang di upload terlalu besar.";
            } elseif (strpos($parameter, $kondisi_tipe)) {
                $msg = "Jenis file poster yang di upload tidak sesuai.";
            } elseif (strpos($parameter, $kondisi_kosong)) {
                // var_dump("ok");
                // var_dump($pemain);
                // var_dump($tag);
                // var_dump($jml_tag);
                // var_dump($jml_pemain);

                // die;
                $data_postingan = [
                    'judul' => $this->input->post('judul'),
                    'subjudul' => $this->input->post('subjudul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'pemain' => $pemain,
                    'link' => $this->input->post('link'),
                    'produser' => $this->input->post('produser'),
                    'sutradara' => $this->input->post('sutradara'),
                    'musik' => $this->input->post('musik'),
                    'tanggal' => $this->input->post('tanggal'),
                    'waktu' => $this->input->post('waktu'),
                    'tempat' => $this->input->post('tempat'),
                    'tag' => $tag,
                    'updated_by' => $_SESSION['id'],
                    'updated' => date("Y-m-d h:i:sa"),
                ];

                $this->Postingan_model->edit_postingan($id_postingan, $data_postingan);
                $this->session->set_flashdata('alert', "<div class='alert alert-success alert-dismissible fade show' role='alert'>Postingan berhasil diubah<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
                redirect(base_url("admin/Postingan"));
            } else {
                $msg = "Postingan yang anda ubah gagal!";
            }
            // var_dump($parameter);
            // var_dump($msg);
            // var_dump("not ok");
            // die;
            $this->session->set_flashdata('alert', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>" . $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
        }
        redirect(base_url("admin/Postingan"));
    }

    public function delete_postingan()
    {
        $id_postingan = $this->input->post('id');

        $this->Postingan_model->delete_postingan($id_postingan);
        $this->session->set_flashdata('alert', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Postingan berhasil dihapus<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
        redirect(base_url("admin/Postingan"));
    }
}
