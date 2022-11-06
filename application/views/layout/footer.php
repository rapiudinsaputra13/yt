<?php if ($this->agent->is_mobile()) {
} else { ?>

	<section class="wrapper bg-end pt-3 mt-3">
		<div class="container">
			<div>
				<img class="logo-end my-5" src="<?= base_url() ?>assets/image/logoowhite.png" alt="" style="width:200px">
			</div>
			<div class="row mb-5">
				<div class="social d-flex justify-content-center my-4">
					<p class=" i-social mx-4" style="color:#dcbfa5">Jalan Jati Padang V No.2, Pasar Minggu, Jakarta 12540</p>
					<a href="https://www.instagram.com/infotitimangsa/" target="_blank" class="mx-2">
						<i class="bi bi-instagram" style="color:#dcbfa5"></i>
					</a>
					<a href="https://www.twitter.com/infotitimangsa/" target="_blank" class="mx-2 inline">
						<i class="bi bi-twitter" style="color:#dcbfa5"></i>
					</a>
					<a href="https://www.tiktok.com/@infotitimangsa" target="_blank" class="mx-2 inline">
						<i class="bi bi-tiktok" style="color:#dcbfa5"></i>
						<p class="i-social d-inline"> infotitimangsa</p>
					</a>
					<a href="https://web.facebook.com/titimangsa.tf" target="_blank" class="mx-4 inline">
						<i class="bi bi-facebook" style="color:#dcbfa5"></i>
						<p class="i-social d-inline"> Titimangsa</p>
					</a>
					<p class=" i-social mx-4" style="color:#dcbfa5">TITIMANGSA.OR.ID</p>
					<p class=" i-social mx-4" style="color:#dcbfa5">All Rights Reserved</p>
				</div>
			</div>

		</div>
	</section>
<?php } ?>

<!-- Modal -->
<div class="modal" id="modalSo" tabindex="-1" aria-labelledby="modalSoLabel" aria-hidden="true">

</div>

<div class="modal fade " id="logins" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-dialog-centered" role="document" style="margin: auto;">
		<div class="modal-content">
			<div class="modal-header row m-3">
				<h4 class="modal-title col-10  text-center" id="myModalLabel">Masuk</h4>
				<button type="button" class="col-1 btn btn-sm btn-brown" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="form-group row">
						<div class="col-12">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item active">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Masuk</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Daftar</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Lupa Kata Sandi</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade active in show" id="home" role="tabpanel" aria-labelledby="home-tab">
							<form action='<?= base_url('auth/login/') ?>' role='form' method="POST">
								<div class="form-group row">
									<label class="col-6 col-form-label">Email</label>
									<div class="col-6">
										<input type="email" class="form-control" name="email" id="email1" autofocus="autofocus" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-6 col-form-label">Kata Sandi</label>
									<div class="col-6">
										<input type="password" class="form-control" name="password" id="password1" autofocus="autofocus" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12">
										<button class="btn btn-brown btn-block" type="submit">Masuk</button>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<form action='<?= base_url('auth/registers/') ?>' role='form' method="post">
								<div class="form-group row">
									<label class="col-6 col-form-label">Email</label>
									<div class="col-6">
										<input type="email" class="form-control" name="email" id="email" autofocus="autofocus" required>
									</div>
									<div class="col-12">
										<small class="help-block"><em>Pastikan email diisi dengan benar, karena akan digunakan untuk login dan kode booking akan dikirimkan melalui email Anda.</em></small>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-6 col-form-label">Nama Lengkap</label>
									<div class="col-6">
										<input type="text" class="form-control" name="username" id="usernamex" autofocus="autofocus" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-6 col-form-label">Telepon/WA yang Aktif</label>
									<div class="col-6">
										<input type="text" class="form-control" name="phone" id="phone" autofocus="autofocus" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-6 col-form-label">Kata Sandi</label>
									<div class="col-6">
										<input type="password" class="form-control" name="password" id="passwordx" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-6 col-form-label">Konfirmasi Kata Sandi</label>
									<div class="col-6">
										<input type="password" class="form-control" name="conpassword" id="conpassword" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12">
										<button class="btn btn-brown btn-block" type="submit">Daftar</button>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<form action='<?= base_url('auth/forgot/') ?>' role='form' method="POST">
								<div class="form-group row">
									<label class="col-6 col-form-label">Email</label>
									<div class="col-6">
										<input type="email" class="form-control" name="email" id="emails" autofocus="autofocus" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12">
										<button class="btn btn-brown btn-block" type="submit">Kirim Kata Sandi</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





<script>
	function show() {
		document.getElementById("search-nav").style.display = "block";
		document.getElementById("search-toggle1").style.display = "none";
		document.getElementById("search-toggle2").style.display = "block";
	}

	function show2() {
		document.getElementById("search-nav").style.display = "none";
		document.getElementById("search-toggle1").style.display = "block";
		document.getElementById("search-toggle2").style.display = "none";
	}

	$(document).ready(function() {
		$('.dropdown-submenu a.test').on("click", function(e) {
			$(this).next('ul').toggle();
			e.stopPropagation();
			e.preventDefault();
		});

		var base_url = window.location.origin;
		$(document).on('click', '#bio', function() {
			// console.log($(this).data('id'));
			var id = $(this).data('id');
			$.get(base_url + '/about/viewso/' + id, function(data) {
				// console.log(data);
				// alert("Data Loaded: " + data);
				// document.getElementById('modalSo').html(data);
				// document.querySelector("#modalSo > div > div").html(data);
				$('#modalSo').html(data);
				$('#modalSo').modal('show');
			});
		});
	});
</script>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->

<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<script src="<?= base_url(''); ?>assets/js/toastr.js"></script>
<script src="<?= base_url(''); ?>assets/js/toastr.min.js"></script>
<script src="<?= base_url('') ?>assets/owlcarousel/docs/assets/owlcarousel/owl.carousel.min.js"></script>
<script>
	$(document).ready(function() {
		// $(".owl-carousel").owlCarousel({
		// 	loop: true,
		// 	items: 5
		// });
		var owl = $('.owl-carousel1');
		var owl2 = $('.owl-carousel2');
		owl.owlCarousel({

			stagePadding: 0,
			loop: true,
			// responsiveClass: true,
			dots: false,
			autoplay: true,
			autoHeight: false,

			margin: 30,
			autoplay: true,
			// autoplayTimeout: 2000,
			autoplaySpeed: 2000,
			autoplayHoverPause: true,
			// nav: true,
			center: true,
			responsive: {
				// breakpoint from 0 up
				0: {
					items: 3
				},
				// breakpoint from 768 up
				768: {
					items: 4,

				},
				1000: {
					items: 5,
				}


			}
		});
		$('.customNextBtn').click(function() {
			owl.trigger('next.owl.carousel');
		});
		// Go to the previous item
		$('.customPrevBtn').click(function() {
			// With optional speed parameter
			// Parameters has to be in square bracket '[]'
			owl.trigger('prev.owl.carousel');
		});


		owl2.owlCarousel({

			loop: true,
			// responsiveClass: true,
			dots: false,
			autoplay: false,
			autoHeight: false,
			margin: 0,
			autoplay: true,
			autoplayTimeout: 30000,
			autoplayHoverPause: true,
			// nav: true,
			center: true,
			responsive: {
				// breakpoint from 0 up
				0: {
					items: 1
				}



			}
		});
		$('.customNextBtn').click(function() {
			owl2.trigger('next.owl.carousel');
		});
		// Go to the previous item
		$('.customPrevBtn').click(function() {
			// With optional speed parameter
			// Parameters has to be in square bracket '[]'
			owl2.trigger('prev.owl.carousel');
		});
	});
</script>



<?php
// var_dump($this->session->flashdata('alert_success'));
// die;
if ($this->session->flashdata('alert_success') != "") : ?>
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