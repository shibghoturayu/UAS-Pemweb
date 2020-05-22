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

<!--cover section slider -->
<section id="home" class="home-cover">
    <div class="cover_item" style="background: url('assets/img/bg/slider.png'); width:1400px;"><br><br>
                              <center>
                              <div class=""><br>
                                  <h3 style="color: white; font-size: 30px;"> EDIT SPONSOR </h3><hr>
                              <br/>
                              <br/>
                              <form action="/dtplg/update" method="post">
                                {{ csrf_field() }}
                              <tr>
                                <td>
                                  <Label id="name" style="min-width: 200px; height: 50px; color: white;" >Nama</Label>
                                  <input type="text" name="Nama">
                                </td>
                              </tr><br>
                              <tr>
                                <td>
                                  <Label id="TTL" style="min-width: 200px; height: 50px; color: white;" >TTL</Label>
                                  <input type="Date" name="TTL">
                                </td>
                              </tr><br>
                              <tr>
                                <td>
                                  <Label id="Alamat" style="min-width: 200px; height: 50px; color: white;" >Alamat</Label>
                                  <textarea></textarea>
                                </td>
                              </tr><br>
                              <tr>
                                <td>
                                  <Label id="Email" style="min-width: 200px; height: 50px; color: white;" >Email</Label>
                                  <input type="Email" name="Email">
                                </td>
                              </tr><br>

                                <div><br><br>
                                <input type="submit" value="Back" href="">
                                <input type="submit" value="Simpan Data" href="index.php">                              

                                </div>
                                <br><br><br><br><br>
                              </form>
                              </div>
                             </div>  
                          </center>
            </div>
       </section>
<!--cover section slider end -->
   

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