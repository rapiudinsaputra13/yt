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
                <div class="col-lg-12" id="filterx"></div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table id="manage_tbl" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


</main>
<!-- Modal edit -->
<?php foreach ($user as $u) { ?>
    <div class="modal fade" id="editmodal<?php echo $u['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url("admin/User/edit_user") ?>" method="post">
                    <div class="modal-body">
                        <input class="form-control mb-3" type="hidden" name="id" id="id<?php echo $u['id'] ?>" value="<?php echo $u['id'] ?>" placeholder="id" aria-label="default input example" required>
                        <span class="">Nama</span>
                        <input class="form-control mb-3" type="text" name="username" id="username<?php echo $u['id'] ?>" value="<?php echo $u['username'] ?>" placeholder="Username" aria-label="default input example" required>
                        <span class="">Email</span>
                        <input class="form-control mb-3" type="text" name="email" id="email<?php echo $u['id'] ?>" value="<?php echo $u['email'] ?>" placeholder="Email" aria-label="default input example" required>
                        <span class="">Phone</span>
                        <input class="form-control mb-3" type="text" name="phone" id="phone<?php echo $u['id'] ?>" value="<?php echo $u['phone'] ?>" placeholder="Phone" aria-label="default input example" required>
                        <span class="">Password</span>
                        <input class="form-control mb-3" type="password" name="password1" id="password1<?php echo $u['id'] ?>" placeholder="Password" aria-label="default input example" required>
                        <span class="">Masukan Ulang Password</span>
                        <input class="form-control mb-3" type="password" name="password2" id="password2<?php echo $u['id'] ?>" placeholder="Repeat Password" aria-label="default input example" required>
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
<?php foreach ($user as $u) { ?>
    <div class="modal fade" id="hapusmodal<?php echo $u['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url("admin/User/hapus_user") ?>" method="post">
                    <div class="modal-body">
                        <input class="form-control mb-3" type="hidden" name="id" id="iddel<?php echo $u['id'] ?>" value="<?php echo $u['id'] ?>" placeholder="id" aria-label="default input example">
                        <span class="">Apakah yakin menghapus <?php echo $u['username'] ?> ?</span>
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