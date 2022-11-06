<style>
  @font-face {
    font-family: poppins;
    src: url(<?= base_url('assets/fonts/Poppins-Regular.ttf') ?>);
  }

  .cstmnavowl {
    font-family: poppins;
    color: #fff;
  }

  .teater-details {
    padding-left: 0%;
  }
</style>

<link rel="stylesheet" href="<?= base_url('/assets/owlcarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css') ?>">


<section class="wrapper bg-landing" style="z-index: -1; margin-top:-70px;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div id="carousellandingControls" class="carousel slide carousel-fade mt-0" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?= base_url() ?>assets/image/slides/inggit2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url() ?>assets/image/slides/inggit2.png" class="d-block w-100" alt="...">
            </div>
            <!-- <div class="carousel-item">
              <img src="<?= base_url() ?>assets/image/slides/update/PPC.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url() ?>assets/image/slides/update/rock.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url() ?>assets/image/slides/update/bunga_penutup.jpg" class="d-block w-100" alt="...">
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
  </div>
</section>


<section class="wrapper bg-teater2">
  <div class="container-fluid">
    <div class="row">
      <div class=" col sub-title" style="padding-left:3%">
        <p style="text-decoration: none;">PRODUKSI MENDATANG</p>
      </div>
      <div id="carouselteaterControls" class="carousel slide p-0" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="card" style="border: none;">
                <div class="row g-0">
                  <div class="col-6 teater">
                    <div class="card-body" style="height:80%;">
                      <div class="teater-details ">
                        <h5 class="teater-title card-title ">Perempuan Perempuan Chairil</h5>
                        <p class="teater-text card-text text-dark">Berkisah tentang empat perempuan yang ada dalam hidup "Si Binatang Jalang" Chairil Anwar. Keempat perempuan tersebut menjadi inspirasi dalam proses penciptaan karya - karya sajak dan puisi Chairil</p>
                        <p class="teater-peran card-text text-dark">Reza Rahadian &bull; Marsha Timothy &bull; Chelsea Islan &bull;
                          Tara Basro &bull; Sita Nursanti
                        </p>
                      </div>
                    </div>
                    <div class="card-footer mb-2">
                      <hr class="teater-hr">
                      <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a>
                    </div>
                  </div>
                  <div class="col-6">
                    <img src="<?= base_url() ?>assets/image/slide_teater/gambar-1.png" class="img-teater" alt="...">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="card" style="border: none;">
                <div class="row g-0">
                  <div class="col-6">
                    <img src="<?= base_url() ?>assets/image/slide_teater/gambar-2.png" class="img-teater" alt="...">
                  </div>
                  <div class="col-6 teater">
                    <div class="card-body" style="height:80%;">
                      <div class="teater-details ">
                        <h5 class="teater-title card-title ">Rumah Kenangan</h5>
                        <p class="teater-text card-text text-dark">Rumah kenangan adalah kisah tentang 6 manusia dengan beragam karakter yang diikat karena persaudaraan. Disebabkan oleh pandemi Covid-19, mereka semua terpaksa berada di satu rumah bersama setelah sebelumnya berpencar. Ternyata segala yang selama ini terpendam, terbuka secara perlahan di dalam sebuah rumah kenangan.</p>
                        <p class="teater-peran card-text text-dark">Butet Kartaredjasa &bull; Ratna Riantiarno &bull; Happy Salma &bull; Reza Rahadian &bull; Wulan Gurtino &bull; Susilo Nugroho
                        </p>
                      </div>
                    </div>
                    <div class="card-footer mb-2">
                      <hr class="teater-hr">
                      <a class="buy-teater d-flex justify-content-start" href="#">LIHAT SEMUA</a>
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
                  <div class="col-6 teater">
                    <div class="card-body" style="height:80%;">
                      <div class="teater-details ">
                        <h5 class="teater-title card-title ">Nyanyi Sunyi Revolusi</h5>
                        <p class="teater-text card-text text-dark">Sebuah pentas teater tentang penyair Amir Hamzah Sabtu dan Minggu | 2 dan 3 Februari 2019 Gedung Kesenian Jakarta</p>
                        <p class="teater-peran card-text text-dark">Lukman Sardi &bull; Prisia Nasution &bull; Sri Qadariatin &bull; Desi Susanti</p>
                      </div>
                    </div>
                    <div class="card-footer mb-2">
                      <hr class="teater-hr">
                      <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a>
                    </div>
                  </div>
                  <div class="col-6">
                    <img src="<?= base_url() ?>assets/image/slide_teater/gambar-3.png" class="img-teater" alt="...">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="card" style="border: none;">
                <div class="row g-0">
                  <div class="col-6">
                    <img src="<?= base_url() ?>assets/image/slide_teater/gambar-4.png" class="img-teater" alt="...">
                  </div>
                  <div class="col-6 teater">
                    <div class="card-body" style="height:80%;">
                      <div class="teater-details ">
                        <h5 class="teater-title card-title ">Tarung/Stripping/Rubberneck</h5>
                        <p class="teater-text card-text text-dark">Bercerita tentang permasalahan perempuan di ranah pribadi dan juga publik. Dengan naskah yang ditulis langsung oleh para penampil, pertunjukan ini akan menjadi salah satu testimoni dari pergulatan yang harus di hadapi perempuan, dan semakin memperlihatkan bahwa permasalahan perempuan modern tidak hanya berkutat di ranah domestik.</p>
                        <p class="teater-peran card-text text-dark">Jessy &bull; Miranda Risang Ayu &bull; Dinda Kanyadewi</p>
                      </div>
                    </div>
                    <div class="card-footer mb-2">
                      <hr class="teater-hr">
                      <a class="buy-teater d-flex justify-content-start" href="#">LIHAT SEMUA</a>
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
                  <div class="col-6 teater">
                    <div class="card-body" style="height:80%;">
                      <div class="teater-details ">
                        <h5 class="teater-title card-title ">Melihat Masa Kini, Melihat Masa Lalu</h5>
                        <p class="teater-text card-text text-dark">sebuah apresiasi atas perjalanan panjang para penulis Indonesia dalam berinteraksi, berafiliasi dan bertransformasi dengan masanya. Di sini, para penulis akan menceritakan bagaimana proses kreatif mereka dalam menghasilkan suatu karya, juga akan ada kolaborasi karya berupa pembacaan puisi dan pembacaan karya diiringi oleh musisi EDM.</p>
                        <p class="teater-peran card-text text-dark">Godi Suwarna &bull; Ni Made Purnama Sari &bull; Faisal Syahreza &bull; Tesla Manaf Hanna Fransisca &bull; H S Dewandani &bull; Joind Bayuwinanda</p>
                      </div>
                    </div>
                    <div class="card-footer mb-2">
                      <hr class="teater-hr">
                      <a class="buy-teater d-flex justify-content-start" href="#">BELI TIKET</a>
                    </div>
                  </div>
                  <div class="col-6">
                    <img src="<?= base_url() ?>assets/image/slide_teater/gambar-5.png" class="img-teater" alt="...">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="card" style="border: none;">
                <div class="row g-0">
                  <div class="col-6">
                    <img src="<?= base_url() ?>assets/image/slide_teater/gambar-6.png" class="img-teater" alt="...">
                  </div>
                  <div class="col-6 teater">
                    <div class="card-body" style="height:80%;">
                      <div class="teater-details ">
                        <h5 class="teater-title card-title ">Roos von Tjikembang</h5>
                        <p class="teater-text card-text text-dark">Sebuah Fragmen dari Karya Kwee Tek Hoay" Adaptasi dari novel tahun 1925 berjudul Bunga Roos dari Tjikembang karya Kwee Tek Hoay.</p>
                        <p class="teater-peran card-text text-dark">Verdi Solaiman &bull; Vanessa Kaliani Ong &bull; Madin Tyasawan &bull; Andi Bersama</p>
                      </div>
                    </div>
                    <div class="card-footer mb-2">
                      <hr class="teater-hr">
                      <a class="buy-teater d-flex justify-content-start" href="#">LIHAT SEMUA</a>
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
          <p class="video-text2">Reza Rahardian &bull; Happy salma &bull; Chelsea Islan &bull; Lukman sardi</p>
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
          <img src="<?= base_url() ?>assets/image/video_thumb/vid-2.png" class="card-img-top img-video" alt="...">
        </div>
        <div class="card-body video-card" style="padding-left: 0;">
          <h5 class="video-title">PEREMPUAN PEREMPUAN CHAIRIL</h5>
          <p class="video-text">Cinta adalah bahaya yang lekas jadi pudar</p>
          <p class="video-text2">Reza Rahadian &bull; Marsha Timothy &bull; Siti Nursanti &bull; Chelsea Islan &bull; Tara Basro</p>
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
          <p class="video-text"></p>
          <p class="video-text2">Reza Rahadian &bull; Marsha Timothy &bull; Chelsea Islan &bull; Siti Nursanti &bull; Atiqah Hasiholan &bull; Teuku Rifnu Wikana</p>
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
          <p class="video-text2">Reza Rahardian &bull; Happy salma &bull; Chelsea Islan &bull; Lukman sardi</p>
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
          <p class="video-text2">Reza Rahadian &bull; Marsha Timothy &bull; Siti Nursanti &bull; Chelsea Islan &bull; Tara Basro</p>
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
          <p class="video-text2">Reza Rahadian &bull; Marsha Timothy &bull; Chelsea Islan &bull; Siti Nursanti &bull; Atiqah Hasiholan &bull; Teuku Rifnu Wikana</p>
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


<section class="wrapper bg-teater pb-3">
  <div class="container">
    <div class="row mb-1 pb-0 pt-5">
      <ul class="nav d-flex justify-content-center  ">
        <li class="nav-item">
          <a class="nav-link active nav-teater" href="#">2022</a>
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

      <div class="row teater-row">
        <div class="col-teater p-1 col-4">
          <img class="img-teaters img-fluid" src="<?= base_url() ?>assets/image/gambar_teater2/gambar-1.png" alt="">
          <p class="teater-year">2014</p>
          <p class="br-teater-title">MONOLOG AKU PEREMPUAN</p>
        </div>
        <div class="col-teater p-1 col-4">
          <img class="img-teaters img-fluid" src="<?= base_url() ?>assets/image/gambar_teater2/gambar-2.png" alt="">
          <p class="teater-year">2014</p>
          <p class="br-teater-title">WAYANG ORANG ROCK</p>
        </div>
        <div class="col-teater p-1 col-4">
          <img class="img-teaters img-fluid" src="<?= base_url() ?>assets/image/gambar_teater2/gambar-3.png" alt="">
          <p class="teater-year">2016</p>
          <p class="br-teater-title">SUKRENI GADIS BALI</p>
        </div>
        <div class="col-teater p-1 col-4">
          <img class="img-teaters img-fluid" src="<?= base_url() ?>assets/image/gambar_teater2/gambar-4.png" alt="">
          <p class="teater-year">2017</p>
          <p class="br-teater-title">PEREMPUAN-PEREMPUAN CHAIRIL</p>
        </div>
        <div class="col-teater p-1 col-8">
          <img class="img-teaters img-fluid" src="<?= base_url() ?>assets/image/gambar_teater2/gambar-7.png" alt="">
          <p class="teater-year">2017</p>
          <p class="br-teater-title">CITRARESMI</p>
        </div>
        <div class="col-8">
          <div class="row">
            <div class="col-teater p-1 col-6">
              <img class="img-teaters img-fluid" src="<?= base_url() ?>assets/image/gambar_teater2/gambar-5.png" alt="">
              <p class="teater-year">2020</p>
              <p class="br-teater-title">AKU ISTRI MUNIR</p>
            </div>
            <div class="col-teater p-1 col-6">
              <img class="img-teaters img-fluid" src="<?= base_url() ?>assets/image/gambar_teater2/gambar-6.png" alt="">
              <p class="teater-year">2019</p>
              <p class="br-teater-title">LA LA LOVE</p>
            </div>
          </div>
          <div class="row">
            <div class="col-teater p-1  col-12">
              <img class="img-teaters img-fluid" src="<?= base_url() ?>assets/image/gambar_teater2/gambar-8.png" alt="">
              <p class="teater-year">2021</p>
              <p class="br-teater-title">TITIMANGSA PODCAST</p>
            </div>
          </div>
        </div>
        <div class="col-4" style="padding: 5.5px 5.5px 5.5px 10px; position: relative;">
          <img class="img-teaters img-fluid" src="<?= base_url() ?>assets/image/gambar_teater2/gambar-9.png" alt="">
          <p class="teater-year">2018</p>
          <p class="br-teater-title">BUNGA PENUTUP ABAD</p>
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

    <div class="row">
      <div class="col-1 col-sm-1 col-md-1 col-lg-1" style="margin: auto;">
        <a style="font-size: 50px;" class="cstmnavowl customPrevBtn btn">
          < </a>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10">
        <div id="gallery" class="owl-carousel">
          <?php foreach ($poster as $p) { ?>
            <div class="item">
              <img class="img-fluid p-3" src="<?= base_url('assets/image/gambar_end/' . $p['name']) ?>" alt="">
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-1 col-sm-1 col-md-1 col-lg-1" style="margin: auto;">
        <a style="font-size: 50px;" class="cstmnavowl customNextBtn btn">></a>
      </div>
    </div>
</section>