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
                <div class="col-lg-6 text-end"><a href='#' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#addmodal'>add sponsor</a></div>
            </div>
        </div>
        <div class=" card-body">
            <div class="table-responsive">

                <table id="manage_tbl" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Logo</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Logo</th>

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
                <h5 class="modal-title" id="exampleModalLabel">Add Sponsor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url("admin/Sponsor/add_sponsor") ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <span class="">Nama</span>
                    <input class="form-control mb-3" type="text" name="nama_sponsor" placeholder="Nama Sponsor" aria-label="default input example" required="">
                    <span class="">Logo</span>
                    <input class="form-control mb-3" type="file" name="logo" placeholder="logo" aria-label="default input example" required="" accept="image/*">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal edit -->
<?php foreach ($data as $u) { ?>
    <div class="modal fade" id="editmodal<?php echo $u['id_sponsor'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Sponsor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url("admin/Sponsor/edit_sponsor") ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input class="form-control mb-3" type="hidden" name="id" value="<?php echo $u['id_sponsor'] ?>" placeholder="id" aria-label="default input example">
                        <span class="">Nama</span>
                        <input class="form-control mb-3" type="text" name="nama_sponsor" value="<?php echo $u['nama_sponsor'] ?>" placeholder="nama_sponsor" aria-label="default input example" required="">
                        <span class="">Logo</span>
                        <input class="form-control mb-3" type="file" name="logo" placeholder="logo" aria-label="default input example" accept="image/*">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- modal hapus -->
<?php foreach ($data as $u) { ?>
    <div class="modal fade" id="hapusmodal<?php echo $u['id_sponsor'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Sponsor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url("admin/Sponsor/hapus_sponsor") ?>" method="post">
                    <div class="modal-body">
                        <input class="form-control mb-3" type="hidden" name="id" value="<?php echo $u['id_sponsor'] ?>" placeholder="id" aria-label="default input example">
                        <span class="">Apakah yakin menghapus <?php echo $u['nama_sponsor'] ?> ?</span>
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
<!-- end page main -->