<!--start content-->
<main class="page-content bg-white">
    <?php echo $this->session->flashdata("alert"); ?>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3"><?php echo $title ?></div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="<?= base_url("admin/Dashboard") ?>"><i class="bx bx-home-alt" style="color:#a36927;"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <hr />
    <div class="card">
        <div class="card-header">
            <div class="row mb-3 py-3">
                <div class="col-lg-12"><b>Download :</b></div>
                <div class="col-lg-6" id="filterx"></div>
                <div class="col-lg-6 text-end"><a href='#' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#addmodal'>add postingan</a></div>


            </div>
        </div>
        <div class=" card-body">
            <div class="table-responsive">

                <table id="manage_tbl" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Produser</th>
                            <th>Sutradara</th>
                            <th>Poster</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Produser</th>
                            <th>Sutradara</th>
                            <th>Poster</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


</main>

<!-- Modal Add -->

<div class="modal fade" id="addmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Postingan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?= base_url("admin/Postingan/add_postingan") ?>" method="post" enctype="multipart/form-data">
                    <span class="">Judul</span>
                    <input class="form-control mb-3" type="text" name="judul" placeholder="Judul" aria-label="default input example">
                    <span class="">Sub Judul</span>
                    <input class="form-control mb-3" type="text" name="subjudul" placeholder="Sub Judul" aria-label="default input example">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <span class="">Link Youtube</span>
                            <input class="form-control mb-3" type="text" name="link" placeholder="Link Youtube" aria-label="default input example">
                            <span class="">Produser</span>
                            <input class="form-control mb-3" type="text" name="produser" placeholder="Produser" aria-label="default input example">
                            <span class="">Sutradara</span>
                            <input class="form-control mb-3" type="text" name="sutradara" placeholder="Sutradara" aria-label="default input example">
                            <span class="">Musik</span>
                            <input class="form-control mb-3" type="text" name="musik" placeholder="Musik" aria-label="default input example">
                            <div class="tag-area">
                                <button class='btn btn-primary' type="button" data-nomor="1" id="button0" onclick="appendText1(this)">Add Tag</button><br /><br />
                            </div>
                            <textarea class="form-control mb-3" id="jumlah_tag" hidden name="jml_tag" aria-label="default input example"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <span class="">Tanggal</span>
                            <input class="form-control mb-3" type="date" name="tanggal" placeholder="tanggal" aria-label="default input example">
                            <span class="">Waktu</span>
                            <input class="form-control mb-3" type="time" name="waktu" placeholder="Waktu" aria-label="default input example">
                            <span class="">Tempat</span>
                            <input class="form-control mb-3" type="text" name="tempat" placeholder="Tempat" aria-label="default input example">

                            <span class="">Poster</span>
                            <input class="form-control mb-3" type="file" name="poster" placeholder="Poster" aria-label="default input example" accept="image/*">
                            <div class="pemain-area">
                                <button class='btn btn-primary' type="button" data-nomor="1" id="button0" onclick="appendText(this)">Add Pemain</button><br /><br />
                            </div>
                            <textarea class="form-control mb-3" id="jumlah_pemain" hidden name="jml_pemain" aria-label="default input example"></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Detail -->
<?php foreach ($data as $u) { ?>
    <div class="modal fade" id="detailmodal<?php echo $u['id_postingan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Postingan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <span class="">Judul</span>
                    <input class="form-control mb-3" value="<?php echo $u['judul'] ?>" readonly type="text" name="judul" placeholder="Judul" aria-label="default input example">
                    <span class="">Sub Judul</span>
                    <input class="form-control mb-3" type="text" value="<?php echo $u['subjudul'] ?>" readonly name="subjudul" placeholder="Sub Judul" aria-label="default input example">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>

                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" readonly><?php echo $u['deskripsi'] ?></textarea>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <span class="">Link Youtube</span><br />
                            <!-- <span class="form-control mb-3"><a href="<?php echo $u['link'] ?>"><?php echo $u['link'] ?></a></span> -->
                            <a href="https://www.<?= $u['link'] ?>" class="btn btn-secondary mb-3" target="_blank" style="width:220px">Lihat</a><br />
                            <span class="">Produser</span>
                            <input class="form-control mb-3" type="text" value="<?php echo $u['produser'] ?>" readonly name="produser" placeholder="Produser" aria-label="default input example">
                            <span class="">Sutradara</span>
                            <input class="form-control mb-3" type="text" value="<?php echo $u['sutradara'] ?>" readonly name="sutradara" placeholder="Sutradara" aria-label="default input example">
                            <span class="">Musik</span>
                            <input class="form-control mb-3" type="text" value="<?php echo $u['musik'] ?>" readonly name="musik" placeholder="Musik" aria-label="default input example">
                            <span class="">Tag</span>
                            <textarea class="form-control mb-3" type="text" value="" readonly name="tempat" rows="4" placeholder="Tempat" aria-label="default input example"><?php echo $u['tag'] ?></textarea>
                        </div>


                        <div class="col-lg-6">
                            <span class="">Tanggal</span>
                            <input class="form-control mb-3" type="text" value="<?php echo $u['tanggal'] ?>" readonly name="tanggal" placeholder="tanggal" aria-label="default input example">
                            <span class="">Waktu</span>
                            <input class="form-control mb-3" type="time" value="<?php echo $u['waktu'] ?>" readonly name="waktu" placeholder="Waktu" aria-label="default input example">
                            <span class="">Tempat</span>
                            <input class="form-control mb-3" type="text" value="<?php echo $u['tempat'] ?>" readonly name="tempat" placeholder="Tempat" aria-label="default input example">
                            <span class="">Poster</span><br />
                            <a href="<?php echo base_url() . 'assets/upload/poster/' . $u['poster'] ?>" class="btn btn-secondary mb-3" target="_blank" style="width:220px">Lihat</a><br />
                            <span class="">Pemain</span>
                            <textarea class="form-control mb-3" type="text" rows="4" value="" onkeyup="get_data_pemain(<?php echo $u['id_postingan'] ?>)" readonly name="tempat" placeholder="Tempat" aria-label="default input example"><?php echo $u['pemain'] ?></textarea>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>


<!-- Modal edit -->

<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Postingan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url("admin/Postingan/edit_postingan") ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- modal hapus -->
<?php foreach ($data as $u) { ?>
    <div class="modal fade" id="hapusmodal<?php echo $u['id_postingan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Postingan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url("admin/Postingan/delete_postingan") ?>" method="post">
                    <div class="modal-body">
                        <input class="form-control mb-3" type="hidden" name="id" value="<?php echo $u['id_postingan'] ?>" placeholder="id" aria-label="default input example">
                        <span class="">Apakah yakin menghapus postingan <?php echo $u['judul'] ?> ?</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<?php $this->load->view('admin/layout/footer'); ?>

<?php
$data[] = $controller;
$this->load->view("admin/data_js", $data); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function get_edit(edit) {

        var id = edit.getAttribute("data-idPostingan");
        var table = $('#manage_tbl');
        // console.log(id);


        $.ajax({
            url: 'https://titimangsa.or.id/admin/Postingan/data?id=' + id, // json datasource
            type: "get", // method  , by default get                   
            // error: function() { 
            //     $("#manage_tbl").html("");
            //     $("#manage_tbl").append('<tbody class=""><tr><th colspan="14">No data found in the server</th></tr></tbody>');
            //     $("#manage_tbl").css("display", "none");
            // }
            data: {
                id: id
            },
            success: function(response) {
                // Add response in Modal body
                $("#editmodal").find(".modal-body").html(response);

                // Display Modal
                $('#editmodal').modal('show');
            }
        });



    }
</script>
<script>
    var nomor_total = 0;

    function appendText(nomor) {
        var nomor = nomor.getAttribute("data-nomor");
        nomor_total++;
        var txt2 = $("<span class=''>Pemain " + nomor_total + "</span><input style='margin-top:0px;' class='form-control mb-3 pemain1' type='text' name='pemain" + nomor_total + "' placeholder='Pemain " + nomor_total + "' aria-label='default input example' required=''>"); // Create text with jQuery
        $("#addmodal").find(".pemain-area").append(txt2);
        let num = document.getElementsByClassName("pemain1").length;
        // num = num - 9;
        document.getElementById("jumlah_pemain").innerHTML = num;
    }

    var nomor_tag = 0;

    function appendText1(nomor1) {
        var nomor = nomor1.getAttribute("data-nomor");
        nomor_tag++;
        var txt1 = $(" <span class=''>Tag " + nomor_tag + "</span><input class='form-control mb-3 tag1' type='text' name='tag" + nomor_tag + "' placeholder='Tag " + nomor_tag + "' aria-label='default input example'>"); // Create text with jQuery
        $("#addmodal").find(".tag-area").append(txt1);

        let num1 = document.getElementsByClassName("tag1").length;
        // num1 = num1 - 9;
        document.getElementById("jumlah_tag").innerHTML = num1;
    }
</script>
<script>
    function appendTextEdit1(nomor) {
        let nomor_pemain1 = document.getElementsByClassName("pemain2").length;

        // console.log(nomor_pemain1);

        nomor_total = nomor_pemain1++;
        nomor_total = nomor_total + 1;
        var txt2 = $("<input style='margin-top:0px;' class='form-control mb-3 pemain2' type='text' name='pemain" + nomor_total + "' placeholder='Pemain " + nomor_total + "' aria-label='default input example' required=''>"); // Create text with jQuery
        $("#editmodal").find(".pemain-area1").append(txt2);
        let num = document.getElementsByClassName("pemain2").length;
        // num = num - 9;
        document.getElementById("jumlah_pemainn").innerHTML = num;
    }




    function appendTextEdit2(nomor1) {
        let nomor_tag1 = document.getElementsByClassName("tag2").length;

        // console.log(nomor_tag1);

        nomor_tag = nomor_tag1++;
        nomor_tag = nomor_tag + 1;
        var txt1 = $(" <input class='form-control mb-3 tag2' type='text' name='tag" + nomor_tag + "' placeholder='Tag " + nomor_tag + "' aria-label='default input example'>"); // Create text with jQuery
        $("#editmodal").find(".tag-area1").append(txt1);

        let num1 = document.getElementsByClassName("tag2").length;
        // num1 = num1 - 9;
        document.getElementById("jumlah_tagg").innerHTML = num1;
    }
</script>

<script>

</script>

<!-- end page main -->