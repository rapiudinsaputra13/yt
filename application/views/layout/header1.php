<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/image/favtm.png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title><?= $title ?> | Titimangsa</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127045885-1"></script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-127045885-1');
  </script>

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/stylesweb.css" type="text/css" />

  <link rel="preload" href="<?= base_url(); ?>assets/css/toastr.css" as="style" onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="<?= base_url() ?>assets/owlcarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/owlcarousel/dist/assets/owl.theme.default.min.css">
  <style>
    .modal-header {
      padding: 15px;
      border-bottom: 1px solid #000;
    }

    .nav-tabs .nav-item .active,
    .nav-tabs .nav-item .active:hover {
      background-color: #a36927 !important;
      color: #fff !important;
      border: 1px solid #a36927 !important;
      border-radius: 3px 3px 0px 0px !important;
    }

    .nav-tabs .nav-item .nav-link:hover {
      color: #fff !important;
      border: 1px solid #a36927 !important;
      /* border: 0px solid #a36927 !important; */
    }

    .nav-tabs .nav-item:hover {
      background-color: #a36927 !important;
      color: #fff !important;
      border: 1px solid #a36927 !important;
      border-radius: 3px 3px 0px 0px !important;
    }

    .nav-tabs {
      border-bottom: 1px solid #000;
    }
  </style>

</head>

<body>
  <!-- Navbar -->
  <?php if ($this->agent->is_mobile()) { ?>
    <div class="nav">
      <div class="fixed-top">
        <nav class="navbar navbar-dark bg-end px-4">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topnav" aria-controls="topnav" aria-expanded="false" aria-label="Toggle navigation" style="border:none;">
            <span class="" style="font-size:24px;font-family: 'Linux-BiolinumBold';color: #fff;">Menu</span>
          </button>

          <a href="#" class="ssl ssl-login" data-toggle="modal" data-target="#logins">Masuk</a>
          <a href="#" class="ssl ssl-signin" data-toggle="modal" data-target="#logins">Daftar</a>
          <a href="home" class="ms-auto"><img src="<?= base_url() ?>assets/image/logoowhite.png" alt="" style="width:150px"></a>
          <!-- <a href="#home" class="ms-auto" style="width: 12%;"><img class="img-fluid pe-3" src="<?= base_url() ?>assets/image/t_logo.png" alt=""></a> -->
        </nav>
        <div class="collapse" id="topnav" style="margin-top:-20px">
          <div class="bg-end p-4">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link nav-tm" href="<?= base_url() ?>home">BERANDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-tm" https://tiket-titimangsa.com/s">BELI TIKET</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-tm" href="<?= base_url() ?>about">IHWAL TITIMANGSA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-tm" href="<?= base_url() ?>contact">KONTAK</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  <?php } else { ?>
    <div class="container">
      <div class="row align-items-center pt-5 mt-3">
        <div class="col-md-3" style="padding-top: 15px;z-index: 3;">
          <a href="home"><img src="<?= base_url() ?>assets/image/logoowhite.png" alt="" style="width:200px"></a>

        </div>
        <div class="col-md-6 text-center">

        </div>
        <div class="col-md-3 row justify-content-end" style="z-index: 3;">
          <div class="btn-group d-flex col-12 justify-content-end" style="position: absolute; right: 3%; top: 0;  text-shadow: 2px 2px #a36927;">
            <div class="dropdown dropdown">
              <a class="navbar-brand ssl ssl-login" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:0px;height:auto;line-height: 16px;">
                MENU
              </a>

              <div class="dropdown-menu bg-dd" aria-labelledby="dropdownMenuLink">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link nav-tm" href="<?= base_url() ?>home">BERANDA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tm" href="https://tiket-titimangsa.com/sudamala">BELI TIKET</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tm" href="<?= base_url() ?>about">IHWAL TITIMANGSA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-tm" href="<?= base_url() ?>contact">KONTAK</a>
                  </li>
                </ul>
              </div>
            </div>
            <?php if ($this->session->userdata('loggedin') == false) { ?>
              <a href="#" class="ssl ssl-login" data-toggle="modal" data-target="#logins">MASUK</a>
              <a href="#" class="ssl ssl-signin" data-toggle="modal" data-target="#logins">DAFTAR</a>
            <?php } else { ?>
              <div class="dropdown dropdown">
                <a class="navbar-brand ssl ssl-login" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:0px;height:auto;line-height: 16px;">
                  <i class="bi bi-person-circle"></i>
                </a>

                <div class="dropdown-menu bg-dd" aria-labelledby="dropdownMenuLink">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link nav-tm"><?php echo $this->session->userdata('username'); ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-tm" href="">PROFILE</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-tm" href="<?= base_url("auth/logout") ?>">LOGOUT</a>
                    </li>
                  </ul>
                </div>
              </div>
            <?php } ?>
            <a href="#" class="ssl" onclick='show()' style="display: block;" id="search-toggle1"><i class="bi bi-search"></i></a>
            <a href="#" class="ssl" onclick='show2()' style="display: none;" id="search-toggle2"><i class="bi bi-search"></i></a>

          </div>
          <div class="col-9 mt-4 d-flex justify-content-end" style="position: absolute;">
            <input type="text" class="search form-control" id="search-nav">

          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <!-- end of navbar -->