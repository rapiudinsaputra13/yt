<!--start content-->
<style>
  td {
    vertical-align: middle;
  }
</style>
<main class="page-content bg-white">

  <h1><?= $title ?></h1>

  <table class="table" id="poster-table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Poster</th>
        <th scope="col">Poster</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach ($poster as $p) {
      ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $p['name'] ?></td>
          <td><img src="<?= base_url('assets/image/gambar_end/' . $p['name']) ?>" alt="" style="width: 50px;"></td>
          <td>
            <a href="">edit</a>
            <a href="">hapus</a>
          </td>
        </tr>
      <?php
        $i++;
      }
      ?>
    </tbody>
  </table>

</main>
<!--end page main-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
  var base_url = window.location.origin;
  // console.log(base_url + "/dashboard/get_poster");
  $(document).ready(function() {
    $("#poster-table").dataTable({
      // "ajax": {
      //   "url": base_url + "/admin/dashboard/get_poster",
      //   "type": "POST",
      //   "dataType": "json",
      //   "dataSrc": "data",
      //   "success": function(data) {
      //     console.log(data);
      //   },
      //   "columns": [{
      //       data: 'name'
      //     },
      //   ],
      // },
    });
  });
</script>