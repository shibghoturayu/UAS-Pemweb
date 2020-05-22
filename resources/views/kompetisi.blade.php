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
    <title> Evento - Event Html Template</title>
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

@include('template.header')
<!--page title section-->
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="assets/img/thropy.jpg">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                        Kompetisi
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="index.html">Home</a>  |   </li>
                <li><span style="color: #35076e">KOMPETISI</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->


<!--sub kategori start-->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
              kategori event
            </h3>
        </div>
    </div>
    <div class="row justify-content-center no-gutters">
  
        <div class="col-md-2 col-sm-5">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/blog/instagram/food.jpg" alt="speaker name">
                    <div class="info_box">
                        <h4 class="name">
                        <a href="/event"><strong>Food</strong></a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/blog/instagram/music.jpg" alt="speaker name" height="252">
                    <div class="info_box">
                        <h4 class="name">
                        <a href="/event"><strong>Music</strong></a>
                        </h4>
                     
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/blog/instagram/art.jpg" alt="speaker name" height="252">
                    <div class="info_box">
                        <h4 class="name">
                        <a href="/event"><strong>Art & Culture</strong></a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/blog/instagram/health.jpg" alt="speaker name" height="252">
                    <div class="info_box">
                        <h4 class="name">
                        <a href="events.html"><strong>Health & Beauty</strong></a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
          
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/blog/instagram/sport.jpg" alt="speaker name" height="252">
                    <div class="info_box">
                        <h4 class="name">
                        <a href="/event"><strong>Sport</strong></a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</section><!--subkategori end-->

@include('template.footer')
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