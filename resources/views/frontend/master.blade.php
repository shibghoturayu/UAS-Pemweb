<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="keywords" content="Evento , Event , Html, Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> GETHEVENT </title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand logo" href="#">
            <img src="assets/img/gethevent5.png" alt="Gethevent"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="CRUDevent.php">
                            Kelola Event
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="CRUDsponsor.php">
                            Kelola Sponsor
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="adddataevent.php">
                            Tambah Event
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="addsponsor.php">
                            Tambah Sponsor
                    </a>
                </li>
                

            </ul>
        </div>
    </div>
</header>
<!--header end here-->

<!--cover section slider -->
<section id="home" class="home-cover">
    <div class="cover_slider owl-carousel owl-theme">
        <div class="cover_item" style="background: url('assets/img/bg/slider.png');">
             <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                             <h2 class="cover-title">
                                Get the coolest event
                            </h2>
                            <strong class="cover-xl-text">GETHEVENT</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('assets/img/bg/seminar1.jpg');">
        </div>
        <div class="cover_item" style="background: url('assets/img/bg/festivalbudaya1.jpg');">
        </div>
    </div>
    <div class="cover_nav">
        <ul class="cover_dots">
            <li class="active" data="0"><span>1</span></li>
            <li  data="1"><span>2</span></li>
            <li  data="2"><span>3</span></li>
        </ul>
    </div>
</section>
<!--cover section slider end -->


<!--event info -->
<section class="pt100 pb100">
    <div class="container">
    <div class="row justify-content-center">
                        <h4 class="cover_title">
                           Informasi Yang Akan Kamu Dapatkan:
                        </h4></div>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-calendar-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            TANGGAL
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-location-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            LOKASI
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-person-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            PEMBICARA
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-pricetag-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            HARGA TIKET
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--event info end -->

<!--event calender-->
<section class="pb100">
    <div class="container">
        <div class="table-responsive">
            <table class="event_calender table">
                <thead class="event_title">
                <tr>
                    <th>
                        <i class="ion-ios-calendar-outline"></i>
                        <span>Agenda Terdekat</span>
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>
                   
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <img src="assets/img/cleander/c1.png" alt="event">
                    </td>
                    <td class="event_date">
                        14
                        <span>Juni</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>Run Fast</h5>
                            <h6>06.00 AM </h6>
                            <p>HTM : IDR 100.000</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="assets/img/cleander/c2.png" alt="event">
                    </td>
                    <td class="event_date">
                        24
                        <span>Juni</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>Kuliner Jatim</h5>
                            <h6>07.00 PM</h6>
                            <p>HTM : Free</p>
                        </div>
                    </td>
                    </tr>
                <tr>
                    <td>
                        <img src="assets/img/cleander/c3.png" alt="event">
                    </td>
                    <td class="event_date">
                        1
                        <span>Juli</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>Figuran</h5>
                            <h6>09.00 AM</h6>
                            <p>HTM : IDR 250.000</p>
                        </div>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--event calender end -->

<!--brands section -->
<section class="bg-gray pt100 pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                our partners
            </h3>
        </div>
        <div class="brand_carousel owl-carousel">
            <div class="brand_item text-center">
                <img src="assets/img/brands/b1.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/brands/b2.png" alt="brand">
            </div>

            <div class="brand_item text-center">
                <img src="assets/img/brands/b3.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/brands/b4.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/brands/b5.png" alt="brand">
            </div>
        </div>
    </div>
</section>
<!--brands section end-->

<!--footer start -->
<footer>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 col-12">
                <div class="footer_box">
                    <div class="footer_header">
                        <div class="footer_logo">
                            <img src="assets/img/bg/gethevent5.png" alt="Gethevent"/>
                        </div>
                    </div>
                    <div class="footer_box_body">
                        <p>
                            Hope you find your events or you just display yours!
                        </p>
                        <ul class="footer_social">
                            <li>
                                <a href="#"><i class="ion-social-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            instagram
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <ul class="instagram_list">
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            kritik dan saran
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <div class="newsletter_form">
                            <input type="text" class="form-control" placeholder="Kritik & Saran">
                            <button class="btn btn-rounded btn-block btn-primary">kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright_footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
            <div class="col-12 col-md-6 ">
                <ul class="footer_menu">
                    <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="seminar.html">
                            Seminar & workshop
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="festival.html">
                            Festival
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="kompetisi.html">
                            kompetisi
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="others.html">Others</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--footer end -->

<!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
</body>
</html>