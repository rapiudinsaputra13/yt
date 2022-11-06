<!--start overlay-->
<div class="overlay nav-toggle-icon"></div>
<!--end overlay-->

<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->


</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="<?= base_url() ?>assets/onedash/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="<?= base_url() ?>assets/onedash/js/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
<script src="<?= base_url() ?>assets/onedash/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

<!-- <script src="<?= base_url() ?>assets/onedash/plugins/simplebar/js/simplebar.min.js"></script>
<script src="<?= base_url() ?>assets/onedash/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?= base_url() ?>assets/onedash/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>

  <script src="<?= base_url() ?>assets/onedash/plugins/chartjs/js/Chart.min.js"></script>
  <script src="<?= base_url() ?>assets/onedash/plugins/chartjs/js/Chart.extension.js"></script>
  
<script src="<?= base_url() ?>assets/onedash/js/pace.min.js"></script>
<!--app-->
<script src="<?= base_url() ?>assets/onedash/js/app.js"></script>
<script src="<?= base_url() ?>assets/onedash/js/index2.js"></script>

<!-- <script src="<?= base_url() ?>assets/onedash/js/table-datatable.js"></script> -->

<!-- <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.bootstrap5.min.js"></script> -->


<!-- <script>
  const asideBody = new PerfectScrollbar('.aside-body', {
    suppressScrollX: true
  });
</script> -->

<!-- <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/jquery-3.2.1.slim.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- datatable -->
<script src="<?= base_url() ?>assets/onedash/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/onedash/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.colVis.min.js"></script>

<!-- toastr -->
<script src="<?= base_url(''); ?>assets/js/toastr.js"></script>
<script src="<?= base_url(''); ?>assets/js/toastr.min.js"></script>


<?php if ($this->session->flashdata('alert_success') != "") : ?>
  <script type="text/javascript">
    toastr.success('<?php echo $this->session->flashdata("alert_success"); ?>');
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('alert_error') != "") : ?>

  <script type="text/javascript">
    toastr.error('<?php echo $this->session->flashdata("alert_error") ?>');
  </script>

<?php endif; ?>



</body>

</html>