<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/image/favtm.png">
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
</head>
<style>
    @font-face {
        font-family: 'Montserrat-Black';
        src: url('assets/fonts/Montserrat-Black.otf');
    }

    @font-face {
        font-family: 'Montserrat-Thin';
        src: url('assets/fonts/Montserrat-Thin.otf');
    }

    @font-face {
        font-family: 'Montserrat-ExtraLight';
        src: url('assets/fonts/Montserrat-ExtraLight.otf');
    }

    @font-face {
        font-family: 'Montserrat-Light';
        src: url('assets/fonts/Montserrat-Light.otf');
    }

    @font-face {
        font-family: 'Montserrat-Medium';
        src: url('assets/fonts/Montserrat-Medium.otf');
    }

    @font-face {
        font-family: 'Montserrat-Regular';
        src: url('assets/fonts/Montserrat-Regular.otf');
    }

    @font-face {
        font-family: 'Montserrat-SemiBold';
        src: url('assets/fonts/Montserrat-SemiBold.otf');
    }

    @font-face {
        font-family: 'Montserrat-Bold';
        src: url('assets/fonts/Montserrat-Bold.otf');
    }

    @font-face {
        font-family: 'Montserrat-ExtraBold';
        src: url('assets/fonts/Montserrat-ExtraBold.otf');

    }

    @font-face {
        font-family: 'Columbus';
        src: url('assets/fonts/COLUMBUS.TTF');

    }

    @font-face {
        font-family: 'Century-Schoolbook';
        src: url('assets/fonts/CENSCBK.TTF');
    }

    @font-face {
        font-family: 'Century-SchoolbookItalic';
        src: url('assets/fonts/SCHLBKI.TTF');
    }

    @font-face {
        font-family: 'Linux-Biolinum';
        src: url('assets/fonts/LinBiolinum_R.otf');
    }

    @font-face {
        font-family: 'Linux-BiolinumBold';
        src: url('assets/fonts/LinBiolinum_RB.otf');
    }

    @font-face {
        font-family: 'Linux-BiolinumItalic';
        src: url('assets/fonts/LinBiolinum_RI.otf');
    }

    img.bg {
        object-fit: contain;
        top: 0;
        left: 0;
        min-width: 100%;
    }

    /* @media screen and (min-width: 768px) {

        
    } */

    .sub-title p {
        font-family: 'Linux-BiolinumBold';
        color: white;
        font-size: 15;
        margin-top: 20px;
        letter-spacing: 2.5px;
    }

    body {
        background-color: #773b29;
    }

    .bg-landing {
        background-color: #773b29;
    }

    .bg-videos {
        background-color: #773b29;
    }

    .bg-teater {
        background-color: #f6f4eb;
    }

    .bg-teater2 {
        background-color: #deccbe;
    }

    .bg-end {
        background-color: #773b29;
    }

    .video-title {
        font-family: 'Linux-Biolinum';
        color: white;
        font-size: 1.1vw;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .video-text {
        font-family: 'Linux-Biolinum';
        color: white;
        font-size: 1vw;
    }

    .video-text2 {
        font-family: 'Linux-Biolinum';
        color: white;
        font-size: 1vw;
        margin-bottom: auto;
    }

    .video-seemore {
        font-family: 'Linux-Biolinum';
        color: #deccbe;
        font-size: 14.946666666666667px;
        text-decoration: none;
    }

    a.nav {
        color: white;
    }

    .teater {
        background-color: rgb(222, 204, 190);
        padding-left: 60px;
        padding-right: 60px;
        height: 100%;
    }

    .teater-title {
        font-family: Linux-BiolinumBold;
        /* font-size: 50px; */
        font-size: 2.5vw;
        color: #fff;
    }

    .teater-text {
        font-family: 'Linux-Biolinum';
        /* font-size: 12px; */
        font-size: 1.1vw;
        color: #783824;
    }

    .teater-peran {
        font-family: 'Linux-BiolinumBold';
        /* font-size: 14px; */
        font-size: 1.1vw;
        color: #783824;
    }

    .img-teater {
        width: 100%;
        height: 100%;
    }

    .nav-teater {
        color: #783824;
        text-transform: uppercase;
        font-weight: 500;
        font-size: 15px;
        margin-top: 20px;
        margin-right: 5px;
        padding-left: 40px;
        padding-right: 40px;
    }

    a.nav-teater:hover {
        background-color: #783824;
        color: rgb(234, 231, 226);
    }

    .double-quotes-end {
        text-align: center;
        height: 170px;
    }

    .text-ends {
        font-family: Century-SchoolbookItalic;
        font-size: 24px;
        color: white;
        text-align: center;
    }

    .logo-end {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .img-teaters {
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        height: 100%;
    }

    .teater-row {
        margin-top: 10px;
        padding: 0;
    }

    .teater-year {
        font-family: 'Linux-BiolinumBold';
        /* font-size: 46.666666666666664px; */
        font-size: 3vw;
        color: white;
        position: absolute;
        bottom: 10px;
        right: 30px;
    }

    .br-teater-title {
        font-family: Linux-Biolinum;
        font-size: 1vw;
        color: white;
        position: absolute;
        bottom: 0;
        right: 30px;
        margin-top: 30px;
    }

    .col-teater {
        padding: 5px;
        position: relative;
    }

    .col-ge {
        padding-left: 0;
        padding-right: 0;
    }

    .i-social {
        font-family: 'Linux-BiolinumBold';
        color: white;
        font-style: normal;
        font-size: 14px;
    }

    i {
        color: white;
    }

    .futer {
        font-family: 'Linux-Biolinum';
        color: white;
        letter-spacing: 0.5em;
        font-size: 1.5vw;
    }

    .row-social {
        height: 50px;
    }

    .teater-hr {
        color: #783824;
    }

    a.buy-teater {
        color: #783824;
        text-decoration: none;
    }

    .nav-tm {
        width: max-content;
        font-family: 'Linux-Biolinum';
        color: #deccbe;
        text-align: right;
        text-transform: uppercase;
        font-size: 10px;
        letter-spacing: 3px;

    }

    .nav-tm:hover {
        width: max-content;
        color: white;
        font-weight: bold;
        padding-bottom: 0;
        padding-right: 0;
        border-bottom: 1px solid white;
    }

    .bg-dd {
        background-color: transparent;
        border: transparent;
    }

    .img-video {
        border: 1px solid rgb(162, 119, 106);
    }

    .ssl {
        margin-left: 15px;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .ssl-signin {
        margin-left: 15px;
        font-family: 'Linux-Biolinum';
        color: white;
        text-decoration: none;
        font-size: 12px;
    }

    .ssl-login {
        margin-left: 15px;
        font-family: 'Linux-BiolinumBold';
        color: white;
        text-decoration: none;
        font-size: 12px;
    }

    .bg-about {
        background-image: url('assets/image/about-bg');
    }

    .title-about {
        position: absolute;
        top: 5%;
        left: 10%;
        font-family: Linux-Biolinum;
        /* font-size: 50px; */
        font-size: 4vw;
        width: 35%;
        color: white;
    }

    .title-about2 {
        position: absolute;
        top: 12%;
        left: 10%;
        font-family: 'Linux-BiolinumBold';
        font-size: 15px;
        width: 35%;
        color: white;
        letter-spacing: 3px;
    }

    .text-about {
        position: absolute;
        top: 20%;
        left: 10%;
        font-family: 'Linux-Biolinum';
        font-size: 1vw;
        color: white;
    }

    .medsos-about-tw {
        position: absolute;
        bottom: 7%;
        right: 7%;
        font-size: 1vw;
        color: #773b29;
        font-weight: bold;
    }

    .medsos-about-ig {
        position: absolute;
        bottom: 7%;
        right: 17%;
        font-size: 1vw;
        color: #773b29;
        font-weight: bold;
    }

    .medsos-about-fa {
        position: absolute;
        bottom: 7%;
        right: 32%;
        font-size: 1vw;
        color: #773b29;
        font-weight: bold;
    }

    .contact-title {
        font-family: Linux-Biolinum;
        color: rgb(255, 254, 254);
        font-size: 3vw;
    }

    .contact-text {
        font-family: 'Linux-Biolinum';
        color: rgb(255, 254, 254);
        font-size: 1vw;
    }

    .contact-card {
        padding: 0;
        border-radius: 0;
        border: none;
    }

    .contact-input {
        border-left: none;
        border-top: none;
        border-right: none;
        border-color: rgba(119, 59, 41, 0.2);
        width: 100%;
        background-color: transparent;
        font-family: 'Linux-Biolinum' !important;

    }

    ::placeholder {
        color: #ada687 !important;
    }

    .contact-num {
        font-size: 13px;
    }

    .contact-mail {
        font-size: 13px;
    }

    .bg-contact {
        background-image: url('assets/image/bg-contact.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .send-message {
        font-family: 'Linux-BiolinumBold';
    }

    .bg-video {
        background-image: url('assets/image/bg-video.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .text-brown {
        color: #773b29;
    }

    .title-video {
        font-family: Columbus;
    }

    .sub-title-video {
        font-family: 'Linux-Biolinum';
    }

    .desc-video {
        font-family: 'Linux-Biolinum';
    }

    .p-video {
        font-family: 'Linux-BiolinumBold';
    }

    .card-footer {
        background-color: transparent;
        padding: 0;
        border: none;
        margin-top: auto;
    }

    .video-card {
        min-height: 160px;
    }

    .search {
        margin-top: 2px;
        margin-left: 2px;
        height: 17px;
        display: none;
        width: 200px;
    }

    .img-org {
        width: 200px;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 5px;
    }

    .container-org {
        position: relative;
        padding-left: 11%;
        padding-left: 11%;
        padding-top: 50px;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
        border-bottom: 0px;
    }

    .nav .open>a,
    .nav .open>a:focus,
    .nav .open>a:hover {

        font-family: 'Linux-Biolinum';
        background-color: transparent;
        border-color: transparent;
        color: #fff;
        border: 0px;
    }

    a:focus {
        outline: 0px;
        outline-offset: 0px;
    }

    .dropdown-menu>li>a {
        color: #fff;

    }

    .dropdown-menu>li>a:hover {
        color: #fff;
        width: max-content;
        font-weight: bold;
        padding-bottom: 0;
        padding-right: 0;
        border-bottom: 1px solid white;
        background-color: transparent;
    }

    .nav>li>a:focus,
    .nav>li>a:hover {
        color: #fff;
        font-family: 'Linux-Biolinum';
        text-decoration: none;
        background-color: rgb(255, 255, 255, 0);
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        text-align: left;
        list-style: none;
        background-clip: padding-box;
        box-shadow: 0 6px 12px rgba(0, 0, 0, .0);
    }

    .carousel-control-next,
    .carousel-control-prev {
        width: 5%;
    }
</style>

<body>
    <!-- Navbar -->
    <?php if ($this->agent->is_mobile()) { ?>
        <div class="nav">
            <div class="fixed-top">
                <nav class="navbar navbar-dark bg-end px-4">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topnav" aria-controls="topnav" aria-expanded="false" aria-label="Toggle navigation" style="border:none;padding-top: 15px;">
                        <span class="" style="font-size:24px;font-family: Linux-BiolinumBold;color: #fff;">Menu</span>
                    </button>
                    <a href="home" class="ms-auto"><img src="assets/image/logoobrown.png" alt="" style="width:200px"></a>
                    <!-- <a href="#home" class="ms-auto" style="width: 12%;"><img class="img-fluid pe-3" src="assets/image/t_logo.png" alt=""></a> -->
                </nav>
                <div class="collapse" id="topnav" style="margin-top:-20px">
                    <div class="bg-end p-4">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link nav-tm" href="home">BERANDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-tm" href="https://tiket-titimangsa.com/sudamala">BELI TIKET</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-tm" href="about">IHWAL TITIMANGSA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-tm" href="contact">KONTAK</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="container">
            <div class="row align-items-center pt-5">
                <div class="col-md-3" style="padding-top: 15px;">
                    <div class="dropdown dropright">
                        <a class="navbar-brand" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:0px;height:auto">
                            <div class="teater-title">
                                MENU
                            </div>
                        </a>

                        <div class="dropdown-menu bg-dd" aria-labelledby="dropdownMenuLink">
                            <ul class="nav flex-column" style="background:#773b29">
                                <li class="nav-item">
                                    <a class="nav-link nav-tm" href="home">BERANDA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-tm" href="https://tiket-titimangsa.com/sudamala">BELI TIKET</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-tm" href="about">IHWAL TITIMANGSA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-tm" href="contact">KONTAK</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <a href="home"><img src="assets/image/logoobrown.png" alt="" style="width:200px"></a>
                </div>
                <!-- <div class="col-md-3">
                    <div class="btn-group mt-4 d-flex" style="position: absolute; right: 3%; top: 0; z-index: 999; text-shadow: 2px 2px #773b29;">
                        <a href="#" class="ssl" onclick='show()' style="display: block;" id="search-toggle1"><i class="bi bi-search"></i></a>
                        <a href="#" class="ssl" onclick='show2()' style="display: none;" id="search-toggle2"><i class="bi bi-search"></i></a>
                        <input type="text" class="search form-control" id="search-nav">
                        <a href="#" class="ssl ssl-signin">Daftar</a>
                        <a href="#" class="ssl ssl-login">Masuk</a>
                    </div>
                </div> -->
            </div>
        </div>
    <?php } ?>
    <!-- end of navbar -->