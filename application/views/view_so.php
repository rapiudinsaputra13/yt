<!-- Modal content -->
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="modalSoLabel">Detail Pengurus</h5>

    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-6">
          <img class="img-org so_link px-0 mb-3" src="assets/image/org/<?= $org['picture'] ?>" alt="">
        </div>
        <div class="col-6">
          <b>Nama</b>
          <p><?= $org['name'] ?></p>
          <b>Jabatan</b>
          <p><?= $org['jabatan'] ?></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background: #a36927; color:#fff" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>