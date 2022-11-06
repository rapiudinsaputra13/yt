<style>
	.video-title {
		font-family: Linux-Biolinum;
		color: white;
		font-size: 3.5vw;
		letter-spacing: 2.5px;
		text-transform: uppercase;
	}

	.teater-title {
		font-family: Linux-Biolinum;
		/* font-size: 50px; */
		font-size: 7.5vw;
		color: #783824;
		padding-right: 0;
	}

	.img-ks {
		display: block;
		/* margin-left: auto; */
		margin-left: 30px;
		margin-right: auto;
		width: 95%;
		padding: auto;
		width: 767px
	}

	.img-teater {
		/* height: 30rem; */
		/* height: 100%; */
		/* width: 100%;
		/* margin: auto; */
		/* margin-left: 30px;
		border: solid 1px #E98A8A;
		object-fit: cover;
		border-radius: 7px; */
		/* padding: 8px 7px; */
		padding-left: 20px;
		float: left;

		/* tambahan */
		max-width: 767px */
	}

	.contact-title {
		font-family: Linux-Biolinum;
		color: rgb(255, 254, 254);
		font-size: 5vw;
	}

	::placeholder {
		color: rgba(119, 59, 41, 0.3) !important;
		text-align: center;
	}

	.text-custom1 {
		color: #deccbe;
	}

	.title-mobile-1 {
		font-family: Linux-Biolinum;
		font-size: 13vw;
	}

	.sub-title-mobile-1 {
		font-family: Linux-BiolinumBold;
		font-size: 4vw;
		letter-spacing: 3px;
	}

	.text-mobile-1 {
		font-family: Linux-Biolinum;
		font-size: 3vw;
	}

	.title-mobile-2 {
		font-family: Linux-Biolinum;
		font-size: 10vw;
	}

	.hr-cstm {
		border: 1px solid #fff;
		height: 0px !important;
	}

	.hr-cstm2 {
		border: 1px solid #fff;
		height: 0px !important;

	}

	.btn-brown {
		background-color: #773b29;
		color: #deccbe;
		font-family: Linux-Biolinum;
		font-size: 10px;
		border-radius: 0;
	}

	.a-medsos {
		color: #deccbe;
	}

	.teater {
		background-color: #dcbfa5;
		padding-left: 100px;
		padding-right: 100px;
		height: 100%;
	}

	.teater-year1 {
		font-family: Linux-BiolinumBold;
		font-size: 4vw;
		color: white;
		position: absolute;
		right: 10%;
		bottom: 5%;
		margin-bottom: 0;
	}

	.br-teater-title1 {
		font-family: Linux-Biolinum;
		font-size: 1vw;
		color: white;
		position: absolute;
		right: 10%;
		bottom: 5%;
		margin-bottom: 0;
	}

	.wrapper {
		overflow: hidden;
	}

	/* .owl-stage {
		width: 300px !important;
		transform: translate3d(-50px, 0px, 0px) !important;
		transition: all 0.25s ease 0s !important;
		display: flex !important;
		flex-wrap: wrap !important;
	} */
</style>

<section class="wrapper bg-landing">
	<div class="container-fluid">
		<div class="row">
			<div id="carousellandingControls" class="carousel slide carousel-fade mt-5 mb-4" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?= base_url() ?>assets/image/mobile/inggit2.png" class="d-block w-100" alt="...">
					</div>
					<!-- <div class="carousel-item">
						<img src="<?= base_url() ?>assets/image/mobile/nyanyi.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?= base_url() ?>assets/image/mobile/PPC.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?= base_url() ?>assets/image/mobile/rock.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?= base_url() ?>assets/image/mobile/bunga.jpg" class="d-block w-100" alt="...">
					</div> -->
				</div>

				<button class="carousel-control-prev" type="button" data-bs-target="#carousellandingControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carousellandingControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>
</section>
<section class="wrapper bg-teater2">
	<div class="container-fluid">
		<div class="row">
			<div class=" col sub-title" style="padding-left:3%">
				<p style="text-decoration: none;">PRODUKSI MENDATANG</p>
			</div>

			<div class="owl-carousel owl-carousel2 ">
				<div class="">
					<div class="row">
						<div class="card" style="border: none;">
							<div class="row g-0">
								<div class="col-12 col-xs-12 ">
									<img src="<?= base_url() ?>assets/image/slide_teater/gambar-1.png" class="img-teater p--2 img-fluid" alt="...">
								</div>
								<div class="col-12 teater p-5">
									<div class="card-body" style="height: fit-content">
										<div class="teater-details ">
											<h5 class="teater-title card-title ">Perempuan Perempuan Chairil</h5>
											<p class="teater-text card-text text-dark">Berkisah tentang empat perempuan yang ada dalam hidup "Si Binatang Jalang" Chairil Anwar. Keempat perempuan tersebut menjadi inspirasi dalam proses penciptaan karya - karya sajak dan puisi Chairil</p>
											<p class="teater-peran card-text text-dark" style="font-weight: 900;">Reza Rahadian &bull; Marsha Timothy &bull; Chelsea Islan &bull;
												Tara Basro &bull; Sita Nursanti
											</p>
										</div>
									</div>
									<div class="card-footer mb-2">
										<br>
										<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
										</br>
										<!-- <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a> -->
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="row">
						<div class="card" style="border: none;">
							<div class="row g-0">
								<div class="col-12 width:100%;">
									<img src="<?= base_url() ?>assets/image/slide_teater/gambar-2.png" class="img-teater p-0" alt="...">
								</div>
								<div class="col-12 teater p-5">
									<div class="card-body" style="height:fit-content">
										<div class="teater-details ">
											<h5 class="teater-title card-title ">Rumah Kenangan</h5>
											<p class="teater-text card-text text-dark">Rumah kenangan adalah kisah tentang 6 manusia dengan beragam karakter yang diikat karena persaudaraan. Disebabkan oleh pandemi Covid-19, mereka semua terpaksa berada di satu rumah bersama setelah sebelumnya berpencar. Ternyata segala yang selama ini terpendam, terbuka secara perlahan di dalam sebuah rumah kenangan.</p>
											<p class="teater-peran card-text text-dark" style="font-weight: 900;">Butet Kartaredjasa &bull; Ratna Riantiarno &bull; Happy Salma &bull; Reza Rahadian &bull; Wulan Gurtino &bull; Susilo Nugroho
											</p>
										</div>
									</div>
									<div class="card-footer mb-2">
										<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
										<!-- <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="row">
						<div class="card" style="border: none;">
							<div class="row g-0">
								<div class="col-12 width:100%;">
									<img src="<?= base_url() ?>assets/image/slide_teater/gambar-3.png" class="img-teater p-0" alt="...">
								</div>
								<div class="col-12 teater p-5">
									<div class="card-body" style="height:fit-content;">
										<div class="teater-details ">
											<h5 class="teater-title card-title ">Nyanyi Sunyi Revolusi</h5>
											<p class="teater-text card-text text-dark">Sebuah pentas teater tentang penyair Amir Hamzah Sabtu dan Minggu | 2 dan 3 Februari 2019 Gedung Kesenian Jakarta</p>
											<p class="teater-peran card-text text-dark" style="font-weight: 900;">Lukman Sardi &bull; Prisia Nasution &bull; Sri Qadariatin &bull; Desi Susanti</p>
										</div>
									</div>
									<div class="card-footer mb-2">
										<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
										<!-- <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a> -->
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="row">
						<div class="card" style="border: none;">
							<div class="row g-0">
								<div class="col-12 width:100%;">
									<img src="<?= base_url() ?>assets/image/slide_teater/gambar-4.png" class="img-teater p-0" alt="...">
								</div>
								<div class="col-12 teater p-5">
									<div class="card-body" style="height:fit-content;">
										<div class="teater-details ">
											<h5 class="teater-title card-title ">Tarung/Stripping/Rubberneck</h5>
											<p class="teater-text card-text text-dark">Bercerita tentang permasalahan perempuan di ranah pribadi dan juga publik. Dengan naskah yang ditulis langsung oleh para penampil, pertunjukan ini akan menjadi salah satu testimoni dari pergulatan yang harus di hadapi perempuan, dan semakin memperlihatkan bahwa permasalahan perempuan modern tidak hanya berkutat di ranah domestik.</p>
											<p class="teater-peran card-text text-dark" style="font-weight: 900;">Jessy &bull; Miranda Risang Ayu &bull; Dinda Kanyadewi</p>
										</div>
									</div>
									<div class="card-footer mb-2">
										<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
										<!-- <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a> -->
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="row">
						<div class="card" style="border: none;">
							<div class="row g-0">
								<div class="col-12 width:100%;">
									<img src="<?= base_url() ?>assets/image/slide_teater/gambar-5.png" class="img-teater p-0" alt="...">
								</div>
								<div class="col-12 teater p-5">
									<div class="card-body" style="height:fit-content;">
										<div class="teater-details ">
											<h5 class="teater-title card-title ">Melihat Masa Kini, Melihat Masa Lalu</h5>
											<p class="teater-text card-text text-dark">Sebuah apresiasi atas perjalanan panjang para penulis Indonesia dalam berinteraksi, berafiliasi dan bertransformasi dengan masanya. Di sini, para penulis akan menceritakan bagaimana proses kreatif mereka dalam menghasilkan suatu karya, juga akan ada kolaborasi karya berupa pembacaan puisi dan pembacaan karya diiringi oleh musisi EDM.</p>
											<p class="teater-peran card-text text-dark " style="font-weight: 900;">Godi Suwarna &bull; Ni Made Purnama Sari &bull; Faisal Syahreza &bull; Tesla Manaf Hanna Fransisca &bull; H S Dewandani &bull; Joind Bayuwinanda</p>
										</div>
									</div>
									<div class="card-footer mb-2">
										<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>

										<!-- <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="row">
						<div class="" style="border: none;">
							<div class="row g-0">
								<div class="col-12 width:100%;">
									<img src="<?= base_url() ?>assets/image/slide_teater/gambar-6.png" class="img-teater p-0" alt="...">
								</div>
								<div class="col-12 teater p-5">
									<div class="card-body" style="height:fit-content;">
										<div class="teater-details ">
											<h5 class="teater-title card-title ">Roos von Tjikembang</h5>
											<p class="teater-text card-text text-dark">Sebuah Fragmen dari Karya Kwee Tek Hoay" Adaptasi dari novel tahun 1925 berjudul Bunga Roos dari Tjikembang karya Kwee Tek Hoay.</p>
											<p class="teater-peran card-text text-dark " style="font-weight: 900;">Verdi Solaiman &bull; Vanessa Kaliani Ong &bull; Madin Tyasawan &bull; Andi Bersama</p>
										</div>
									</div>
									<div class="card-footer mb-2">
										<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
										<!-- <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a> -->
									</div>
								</div>
								<!-- <div class="teater-details ">
										<h5 class="teater-title card-title ">Melihat Masa Kini, Melihat Masa Lalu</h5>
										<p class="teater-text card-text text-dark">sebuah apresiasi atas perjalanan panjang para penulis Indonesia dalam berinteraksi, berafiliasi dan bertransformasi dengan masanya. Di sini, para penulis akan menceritakan bagaimana proses kreatif mereka dalam menghasilkan suatu karya, juga akan ada kolaborasi karya berupa pembacaan puisi dan pembacaan karya diiringi oleh musisi EDM.</p>
										<p class="teater-peran card-text text-dark">Godi Suwarna &bull; Ni Made Purnama Sari &bull; Faisal Syahreza &bull; Tesla Manaf Hanna Fransisca &bull; H S Dewandani &bull; Joind Bayuwinanda</p>
									</div> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 p-0 m-2">
					<div class="row">
						<div class="card" style="border: none;">
							<div class="row g-0">
								<div class="col-col-12 col-lg-8" style="padding:auto">
									<img src="<?= base_url() ?>assets/image/slide_teater/sudamalalandscape.jpg" class="img-teater p-0" alt="...">
								</div>
								<div class="col-12 teater p-5">
									<div class="card-body" style="width:100%">
										<div class="card-body">
											<img src="<?= base_url() ?>assets/image/slide_teater/sudamalatitleblack.png" class="w-50" alt="...">
											<p class="pr-2 m-0" style="text-align: justify;">
												Persembahan ke-59 Titimangsa kali ini menghadirkan pementasan yang terinspirasi dari pentas tradisi Bali yang berakar dari sastra. Menyuguhkan tari dan drama, menampilkan karya pahat dan seni rupa, keindahan tata busana serta alunan gamelan Bali yang bernafaskan neo-klasik. Pertunjukan ini sarat dengan makna utamanya tentang kesadaran akan penyucian dan pembersihan diri maupun alam lingkungan yang berangkat dari drama kisah Calonarang.<br>
												Sudamala: dari epilog Calonarang menceritakan kisah Walu Nateng Dirah, seorang perempuan yang memiliki kekuatan dan ilmu yang luar biasa besar serta ditakuti banyak orang termasuk membuat resah raja yang berkuasa saat itu, Airlangga. Hal ini pula yang menyebabkan tak banyak pemuda yang berani mendekati putri semata wayangnya, yang bernama Ratna Manggali. Walu Nateng Dirah sangat kecewa dan mengekspresikan kepedihannya dengan menebar berbagai wabah. Luka hatinya itu akhirnya sementara terobati, setelah Ratna Manggali menikah dengan Mpu Bahula.<br>
												Kehidupan pernikahan ini ternyata dicederai Mpu Bahula. Ia yang ternyata adalah utusan pendeta kepercayaan Raja Airlangga,  mengambil pustaka sakti milik Walu Nateng Dirah  yang akhirnya jatuh ke tangan Mpu Bharada. Walu Nateng Dirah kecewa dan murka, kemurkaanya lalu menimbulkan wabah yang  menyengsarakan banyak orang. Setelah Mpu Bharada mengenali ilmu yang dimiliki Walu Nateng Dirah, Ia lantas menantang Walu Nateng Dirah untuk beradu ilmu, agar dapat menuntaskan bencana dan wabah yang melanda.<br>
												Siapakah yang menang dalam pertarungan ini? Apakah Walu Nateng Dirah, seorang perempuan sakti yang kecewa? Ataukah Mpu Bharada, seorang brahmana suci, pendeta kesayangan Raja Airlangga?</p>
										</div>
									</div>
									<div class="card-footer mb-2">
										<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="carouselteaterControls" class="carousel slide p-0" data-bs-ride="carousel" data-pause="hover">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="card" style="border: none;">
								<div class="row g-0">
									<div class=" widht:100%">
										<img src="<?= base_url() ?>assets/image/slide_teater/gambar-1.png" class="img-teater " alt="...">
									</div>
									<div class="col-md-8 col-md-offset-2 teater p-5">
										<div class="card-body" style="height: fit-content">
											<div class="teater-details ">
												<h5 class="teater-title card-title ">Perempuan Perempuan Chairil</h5>
												<p class="teater-text card-text text-dark">Berkisah tentang empat perempuan yang ada dalam hidup "Si Binatang Jalang" Chairil Anwar. Keempat perempuan tersebut menjadi inspirasi dalam proses penciptaan karya - karya sajak dan puisi Chairil</p>
												<p class="teater-peran card-text text-dark" style="font-weight: 900;">Reza Rahadian &bull; Marsha Timothy &bull; Chelsea Islan &bull;
													Tara Basro &bull; Sita Nursanti
												</p>
											</div>
										</div>
										<div class="card-footer mb-2">
											<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="" style="border: none;">
								<div class="row g-0">

									<div class="owl-carousel">

										<div class="col-12">
											<img src="<?= base_url() ?>assets/image/slide_teater/gambar-2.png" class="img-teater" alt="...">
										</div>
										<div class="col-12 teater p-5">
											<div class="card-body" style="height:fit-content">
												<div class="teater-details ">
													<h5 class="teater-title card-title ">Rumah Kenangan</h5>
													<p class="teater-text card-text text-dark">Rumah kenangan adalah kisah tentang 6 manusia dengan beragam karakter yang diikat karena persaudaraan. Disebabkan oleh pandemi Covid-19, mereka semua terpaksa berada di satu rumah bersama setelah sebelumnya berpencar. Ternyata segala yang selama ini terpendam, terbuka secara perlahan di dalam sebuah rumah kenangan.</p>
													<p class="teater-peran card-text text-dark" style="font-weight: 900;">Butet Kartaredjasa &bull; Ratna Riantiarno &bull; Happy Salma &bull; Reza Rahadian &bull; Wulan Gurtino &bull; Susilo Nugroho
													</p>
												</div>
											</div>
											<div class="card-footer mb-2">
												<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="card" style="border: none;">
									<div class="row g-0">
										<div class="col-12">
											<img src="<?= base_url() ?>assets/image/slide_teater/gambar-3.png" class="img-teater" alt="...">
										</div>
										<div class="col-12 teater p-5">
											<div class="card-body" style="height:fit-content;">
												<div class="teater-details ">
													<h5 class="teater-title card-title ">Nyanyi Sunyi Revolusi</h5>
													<p class="teater-text card-text text-dark">Sebuah pentas teater tentang penyair Amir Hamzah Sabtu dan Minggu | 2 dan 3 Februari 2019 Gedung Kesenian Jakarta</p>
													<p class="teater-peran card-text text-dark" style="font-weight: 900;">Lukman Sardi &bull; Prisia Nasution &bull; Sri Qadariatin &bull; Desi Susanti</p>
												</div>
											</div>
											<div class="card-footer mb-2">
												<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
												<!-- <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a> -->
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="" style="border: none;">
									<div class="row g-0">
										<div class="col-12 width:100%">
											<img src="<?= base_url() ?>assets/image/slide_teater/gambar-4.png" class="img-teater" alt="...">
										</div>
										<div class="col-12 teater p-5">
											<div class="card-body" style="height:fit-content;">
												<div class="teater-details ">
													<h5 class="teater-title card-title ">Tarung/Stripping/Rubberneck</h5>
													<p class="teater-text card-text text-dark">Bercerita tentang permasalahan perempuan di ranah pribadi dan juga publik. Dengan naskah yang ditulis langsung oleh para penampil, pertunjukan ini akan menjadi salah satu testimoni dari pergulatan yang harus di hadapi perempuan, dan semakin memperlihatkan bahwa permasalahan perempuan modern tidak hanya berkutat di ranah domestik.</p>
													<p class="teater-peran card-text text-dark" style="font-weight: 900;">Jessy &bull; Miranda Risang Ayu &bull; Dinda Kanyadewi</p>
												</div>
											</div>
											<div class="card-footer mb-2">
												<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
												<!-- <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a> -->
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="card" style="border: none;">
									<div class="row g-0">
										<div class="col-12 width:100%;">
											<img src="<?= base_url() ?>assets/image/slide_teater/gambar-5.png" class="img-teater" alt="...">
										</div>
										<div class="col-12 teater p-5">
											<div class="card-body" style="height:fit-content;">
												<div class="teater-details ">
													<h5 class="teater-title card-title ">Melihat Masa Kini, Melihat Masa Lalu</h5>
													<p class="teater-text card-text text-dark">Sebuah apresiasi atas perjalanan panjang para penulis Indonesia dalam berinteraksi, berafiliasi dan bertransformasi dengan masanya. Di sini, para penulis akan menceritakan bagaimana proses kreatif mereka dalam menghasilkan suatu karya, juga akan ada kolaborasi karya berupa pembacaan puisi dan pembacaan karya diiringi oleh musisi EDM.</p>
													<p class="teater-peran card-text text-dark " style="font-weight: 900;">Godi Suwarna &bull; Ni Made Purnama Sari &bull; Faisal Syahreza &bull; Tesla Manaf Hanna Fransisca &bull; H S Dewandani &bull; Joind Bayuwinanda</p>
												</div>
											</div>
											<div class="card-footer mb-2">
												<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>

												<!-- <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="card" style="border: none;">
									<div class="row g-0">
										<div class="col-12 width:100%;">
											<img src="<?= base_url() ?>assets/image/slide_teater/gambar-6.png" class="img-teater" alt="...">
										</div>
										<div class="col-12 teater p-5">
											<div class="card-body" style="height:fit-content;">
												<div class="teater-details ">
													<h5 class="teater-title card-title ">Roos von Tjikembang</h5>
													<p class="teater-text card-text text-dark">Sebuah Fragmen dari Karya Kwee Tek Hoay" Adaptasi dari novel tahun 1925 berjudul Bunga Roos dari Tjikembang karya Kwee Tek Hoay.</p>
													<p class="teater-peran card-text text-dark " style="font-weight: 900;">Verdi Solaiman &bull; Vanessa Kaliani Ong &bull; Madin Tyasawan &bull; Andi Bersama</p>
												</div>
											</div>
											<div class="card-footer mb-2">
												<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
												<!-- <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a> -->
											</div>
										</div>
										<!-- <div class="teater-details ">
										<h5 class="teater-title card-title ">Melihat Masa Kini, Melihat Masa Lalu</h5>
										<p class="teater-text card-text text-dark">sebuah apresiasi atas perjalanan panjang para penulis Indonesia dalam berinteraksi, berafiliasi dan bertransformasi dengan masanya. Di sini, para penulis akan menceritakan bagaimana proses kreatif mereka dalam menghasilkan suatu karya, juga akan ada kolaborasi karya berupa pembacaan puisi dan pembacaan karya diiringi oleh musisi EDM.</p>
										<p class="teater-peran card-text text-dark">Godi Suwarna &bull; Ni Made Purnama Sari &bull; Faisal Syahreza &bull; Tesla Manaf Hanna Fransisca &bull; H S Dewandani &bull; Joind Bayuwinanda</p>
									</div> -->
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="card" style="border: none;">
									<div class="row g-0">
										<div class="col-12" style="padding: auto;">
											<img src="<?= base_url() ?>assets/image/slide_teater/sudamalalandscape.jpg" class="img-teater p-0 " alt="...">
										</div>
										<div class="col-12 teater p-5">
											<div class="card-body" style="width:100%">
												<div class="card-body">
													<img src="<?= base_url() ?>assets/image/slide_teater/sudamalatitleblack.png" class="w-50" alt="...">
													<p class="pr-2 m-0" style="text-align: justify;">
														Persembahan ke-59 Titimangsa kali ini menghadirkan pementasan yang terinspirasi dari pentas tradisi Bali yang berakar dari sastra. Menyuguhkan tari dan drama, menampilkan karya pahat dan seni rupa, keindahan tata busana serta alunan gamelan Bali yang bernafaskan neo-klasik. Pertunjukan ini sarat dengan makna utamanya tentang kesadaran akan penyucian dan pembersihan diri maupun alam lingkungan yang berangkat dari drama kisah Calonarang.<br>
														Sudamala: dari epilog Calonarang menceritakan kisah Walu Nateng Dirah, seorang perempuan yang memiliki kekuatan dan ilmu yang luar biasa besar serta ditakuti banyak orang termasuk membuat resah raja yang berkuasa saat itu, Airlangga. Hal ini pula yang menyebabkan tak banyak pemuda yang berani mendekati putri semata wayangnya, yang bernama Ratna Manggali. Walu Nateng Dirah sangat kecewa dan mengekspresikan kepedihannya dengan menebar berbagai wabah. Luka hatinya itu akhirnya sementara terobati, setelah Ratna Manggali menikah dengan Mpu Bahula.<br>
														Kehidupan pernikahan ini ternyata dicederai Mpu Bahula. Ia yang ternyata adalah utusan pendeta kepercayaan Raja Airlangga,  mengambil pustaka sakti milik Walu Nateng Dirah  yang akhirnya jatuh ke tangan Mpu Bharada. Walu Nateng Dirah kecewa dan murka, kemurkaanya lalu menimbulkan wabah yang  menyengsarakan banyak orang. Setelah Mpu Bharada mengenali ilmu yang dimiliki Walu Nateng Dirah, Ia lantas menantang Walu Nateng Dirah untuk beradu ilmu, agar dapat menuntaskan bencana dan wabah yang melanda.<br>
														Siapakah yang menang dalam pertarungan ini? Apakah Walu Nateng Dirah, seorang perempuan sakti yang kecewa? Ataukah Mpu Bharada, seorang brahmana suci, pendeta kesayangan Raja Airlangga?</p>
												</div>
											</div>
											<div class="card-footer mb-2">
												<!-- <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a> -->
												<!-- <button type="button" class="btn btn-brown  align-items-center" type="submit">BELI TIKET</button> -->

												<button type="button" class="btn btn-brown btn-lg btn-block">BELI TIKET</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselteaterControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselteaterControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
</section>

<section class="wrapper bg-videos" id="videos">
	<div class="container">
		<div class="row">
			<div class="col sub-title">
				<p style="text-decoration: none ;">PRODUKSI SEBELUMNYA</p>
			</div>
			<div class="col sub-title d-flex justify-content-end">
				<a href="">
					<p>LIHAT SEMUA</p>
				</a>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-4 col-lg-4 col-md-4 col-sm-4">
				<div class="shadow-lg mb-3">
					<img src="<?= base_url() ?>assets/image/video_thumb/vid-1.png" class="card-img-top img-video" alt="...">
				</div>
				<div class="card-body video-card" style="padding-left: 0;">
					<h5 class="video-title">Bunga Penutup Abad</h5>
					<p class="video-text">Adaptasi dari karya Pramoedita Ananta Noer</p>
					<p class="video-text2" style="font-weight: 900;">Reza Rahardian &bull; Happy salma &bull; Chelsea Islan &bull; Lukman sardi</p>
				</div>
				<div class="card-footer px-4 ">
					<div class="row align-self-end">
						<div class=" col-8 col-sm-10 col-md-8 col-lg-5 px-0 d-flex justify-content-start">
							<a class="video-seemore" href="<?= base_url() ?>video">LIHAT SELENGKAPNYA</a>
						</div>
						<div class="col-4 col-sm-2 col-md-4 col-lg-7 p-1">
							<hr style="color: white;">
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 col-lg-4 col-md-4 col-sm-4">
				<div class="shadow-lg mb-3">
					<img src="<?= base_url() ?>assets/image/video_thumb/vid-2.png" class="card-img-top img-video" alt="...">
				</div>
				<div class="card-body video-card" style="padding-left: 0;">
					<h5 class="video-title">PEREMPUAN PEREMPUAN CHAIRIL</h5>
					<p class="video-text">Cinta adalah bahaya yang lekas jadi pudar</p>
					<p class="video-text2 text-bold" style="font-weight: 900;">Reza Rahadian &bull; Marsha Timothy &bull; Siti Nursanti &bull; Chelsea Islan &bull; Tara Basro</p>
				</div>
				<div class="card-footer px-4">
					<div class="row align-self-end">
						<div class="col-8 col-sm-10 col-md-8 col-lg-5 px-0 d-flex justify-content-start">
							<a class="video-seemore" href="<?= base_url() ?>video">LIHAT SELENGKAPNYA</a>
						</div>
						<div class="col-4 col-sm-2 col-md-4 col-lg-7 p-1">
							<hr style="color: white;">
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 col-lg-4 col-md-4 col-sm-4">
				<div class="shadow-col-md-4 lg mb-3">
					<img src="<?= base_url() ?>assets/image/video_thumb/vid-3.png" class="card-img-top img-video" alt="...">
				</div>
				<div class="card-body video-card" style="padding-left: 0;">
					<h5 class="video-title">CINTA TAK PERNAH SEDERHANA</h5>
					<p class="video-text">Konser Musikal Puisi-puisi Cinta</p>
					<p class="video-text2" style="font-weight: 900;">Reza Rahadian &bull; Marsha Timothy &bull; Chelsea Islan &bull; Siti Nursanti &bull; Atiqah Hasiholan &bull; Teuku Rifnu Wikana</p>
				</div>
				<div class="card-footer px-4">
					<div class="row align-self-end">
						<div class="col-8 col-sm-10 col-md-8 col-lg-5 px-0 d-flex justify-content-start">
							<a class="video-seemore" href="<?= base_url() ?>video">LIHAT SELENGKAPNYA</a>
						</div>
						<div class="col-4 col-sm-2 col-md-4 col-lg-7 p-1">
							<hr style="color: white;">
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 col-lg-4 col-md-4 col-sm-4">
				<div class="shadow-lg mb-3">
					<img src="<?= base_url() ?>assets/image/video_thumb/vid-5.jpg" class="card-img-top img-video" alt="...">
				</div>
				<div class="card-body video-card" style="padding-left: 0;">
					<h5 class="video-title">ANUGERAH TERINDAH</h5>
					<p class="video-text">Adaptasi dari karya Pramoedita Ananta Noer</p>
					<p class="video-text2" style="font-weight: 900;">Reza Rahardian &bull; Happy salma &bull; Chelsea Islan &bull; Lukman sardi</p>
				</div>
				<div class="card-footer px-4">
					<div class="row align-self-end">
						<div class="col-8 col-sm-10 col-md-8 col-lg-5 px-0 d-flex justify-content-start">
							<a class="video-seemore" href="<?= base_url() ?>video">LIHAT SELENGKAPNYA</a>
						</div>
						<div class="col-4 col-sm-2 col-md-4 col-lg-7 p-1">
							<hr style="color: white;">
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 col-lg-4 col-md-4 col-sm-4">
				<div class="shadow-lg mb-3">
					<img src="<?= base_url() ?>assets/image/video_thumb/vid-6.jpg" class="card-img-top img-video" alt="...">
				</div>
				<div class="card-body video-card" style="padding-left: 0;">
					<h5 class="video-title">AKU ISTRI MUNIR</h5>
					<p class="video-text">Cinta adalah bahaya yang lekas jadi pudar</p>
					<p class="video-text2" style="font-weight: 900;">Reza Rahadian &bull; Marsha Timothy &bull; Siti Nursanti &bull; Chelsea Islan &bull; Tara Basro</p>
				</div>
				<div class="card-footer px-4">
					<div class="row align-self-end">
						<div class="col-8 col-sm-10 col-md-8 col-lg-5 px-0 d-flex justify-content-start">
							<a class="video-seemore" href="<?= base_url() ?>video">LIHAT SELENGKAPNYA</a>
						</div>
						<div class="col-4 col-sm-2 col-md-4 col-lg-7 p-1">
							<hr style="color: white;">
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 col-lg-4 col-md-4 col-sm-4">
				<div class="shadow-col-md-4 lg mb-3">
					<img src="<?= base_url() ?>assets/image/video_thumb/vid-7.jpg" class="card-img-top img-video" alt="...">
				</div>
				<div class="card-body video-card" style="padding-left: 0;">
					<h5 class="video-title">RUMAH KENANGAN</h5>
					<p class="video-text">Konser Musikal Puisi-puisi Cinta</p>
					<p class="video-text2" style="font-weight: 900;">Reza Rahadian &bull; Marsha Timothy &bull; Chelsea Islan &bull; Siti Nursanti &bull; Atiqah Hasiholan &bull; Teuku Rifnu Wikana</p>
				</div>
				<div class="card-footer px-4">
					<div class="row align-self-end">
						<div class="col-8 col-sm-10 col-md-8 col-lg-5 px-0 d-flex justify-content-start">
							<a class="video-seemore" href="<?= base_url() ?>video">LIHAT SELENGKAPNYA</a>
						</div>
						<div class="col-4 col-sm-2 col-md-4 col-lg-7 p-1">
							<hr style="color: white;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="wrapper bg-teater">
	<div class="container">
		<div class="row pb-2 pt-5">
			<ul class="nav d-flex justify-content-center  ">
				<li class="nav-item">
					<a class="nav-link nav-teater" href="#">2022</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-teater" href="#">2021</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-teater" href="#">2020</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-teater" href="#">2019</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-teater" href="#">2018</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-teater" href="#">2017</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-teater" href="#">2016</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-teater" href="#">2015</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-teater" href="#">2014</a>
				</li>
			</ul>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="teater-row d-flex flex-wrap align-items-center  ">
				<div class="col-teater col-12 ">
					<img class="img-teaters img-fluid " src="<?= base_url() ?>assets/image/gambar_teater2/gambar-1.png" alt="">
					<p class="teater-year">2014</p>
					<p class="br-teater-title  ">MONOLOG AKU PEREMPUAN</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="wrapper bg-end mb-3">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-5">
			<!-- <h1 class="double-quotes-end"><img src="<?= base_url() ?>assets/image/double-quotes.svg" alt="" style="margin-top: 60px;"></h1> -->
			<div class="mt-5 pt-5 col-10">
				<p class="text-ends">"Sebagai sebuah ide, Titimangsa merupakan wadah yang menawarkan kemungkinan kreatif dalam kerja dan produksi seni. Sejak berdirinya, Titimangsa kerap berkonsentrasi pada usaha adaptasi atau alih-wahana karya sastra Indonesia ke dalam seni pertunjukan."</p>
			</div>

		</div>
		<div class="row ">
			<div class="owl-carousel owl-theme owl-carousel1">
				<?php
				$i = 0;
				foreach ($poster as $p) { ?>
					<?php
					if ($i == 0) {
						$active = "active";
					} else {
						$active = "";
					}
					?>
					<div class="item">
						<img style="width: 200px; height: max-content " src="<?= base_url('assets/image/gambar_end/' . $p['name']) ?>" alt="">
					</div>
				<?php $i++;
				} ?>
			</div>
		</div>

</section>

<div>
	<img class="logo-end my-5" src="<?= base_url() ?>assets/image/logoowhite.png" alt="" style="width:150px">
</div>
<!-- <section class="wrapper bg-end">
	<div class="container">
		<div class="row justify-content-center text-brown">
			<div class="col-9 mx-auto my-5">
				<p class=" title-mobile-2 text-center text-white">Get In Touch</p>
				<p class="text-mobile-1 text-center text-white">Don't be shy. Give us a call or drop us a line.
					Let's make some magic together</p>
			</div>
			<form class="form-inline" action="">
				<div class="row">
					<div class="col-10 col-lg-10 pe-0">
						<input class="contact-input form-control pe-0 ps-5" id="fullname" name="fullname" type="text" placeholder="email address" style="background:white">
					</div>
					<div class="col-2 col-lg-2">
						<button type="submit" class="btn mb-2" style="background-color: white;"><i class="bi bi-caret-right-fill" style="color: #773b29;"></i></button>
					</div>
					<div class="row my-5">
						<hr class="hr-cstm2" style="background:white">
					</div>
				</div>
			</form>
		</div>
	</div>
</section> -->

<section class="wrapper bg-end p-3">
	<div class="container">
		<div class="row px-3 align-items-center" style="color: #deccbe;">
			<div class="col-12">

				<div class="row mb-5 justify-content-center">
					<div class="social d-flex justify-content-center ">
						<p class=" i-social " style="color:#dcbfa5;text-align: center;">Jalan Jati Padang V No.2, Pasar Minggu, Jakarta 12540</p>
					</div>
					<div class="social d-flex justify-content-center">
						<a href="https://www.instagram.com/infotitimangsa/" target="_blank" class="mx-3">
							<i class="bi bi-instagram" style="color:#dcbfa5"></i>
						</a>
						<a href="https://www.twitter.com/infotitimangsa/" target="_blank" class="mx-3 inline">
							<i class="bi bi-twitter" style="color:#dcbfa5"></i>
						</a>
						<a href="https://www.tiktok.com/@infotitimangsa" target="_blank" class="mx-3 inline">
							<i class="bi bi-tiktok" style="color:#dcbfa5"></i>

						</a>
						<p class="i-social d-inline">@infotitimangsa</p>

					</div>
					<p class=" i-social mx-4 col-12" style="color:#dcbfa5;text-align: center;">TITIMANGSA.OR.ID</p>

					<p class=" i-social mx-4 col-12" style="color:#dcbfa5;text-align: center;">All Rights Reserved</p>
				</div>
			</div>
</section>