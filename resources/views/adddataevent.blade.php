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
<section id="home" class="home-cover" >
    <div class="cover_item" style="background: url('assets/img/bg/slider.png'); width:1400px;"><br><br>
		<FORM action="">
            <center>
				<legend style="color: white" >Input Data Event</legend><br>
    									<tr>
    										<td>
    											<Label id="name" style="min-width: 150px; height: 40px; color: white;" >Nama Event</Label>
    											<input type="text" name="Nama">
    										</td>
    									</tr><br>
    									<tr>
    										<td>
    											<div>
    											    <label for="title" style="text-align: center; min-width: 150px; height: 40px; color: white;">Kategori Event</label>
    											        <select>
    											            <option value="Kategori_event" ></option>
    											            <option value="Seminar/Workshop" >Seminar / Workshop</option>
    											            <option value="Festival">Festival</option>
    											            <option value="Kompetisi">Kompetisi</option>
    											            <option value="Lainnya">Lainnya</option>
    											        </select> &nbsp;
    											</div>
    										</td>
    									</tr>
    									<tr>
    										<td>
    											<div style="color: white;">Tanggal Event
    											<input type="Date" name="Tanggal" style="min-width: 150px;">
    									        <Label id="name" style="color: white;">Jam</Label>
                              <input type="Time" name="Jam">
                          </div>
                        </td>
                      </tr><br>
    									<tr>
    										<td>
    											<Label id="number" style="min-width: 150px; height: 40px; color: white;">Harga Tiket</Label>
    											<input type="number" name="Nama">
    										</td>
    									</tr><br>
                                        <tr>
                                            <td>
                                                <Label id="tempat" style="min-width: 150px; height: 40px; color: white;">Tempat</Label>
                                                <div id="maps" style="width: 400px; height: 400px;"></div>
                                                <input type="location" id="start" size="50" placeholder="Input Lokasi">
                                            <button id="Selesai">Selesai</button><br><br>

                                              <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
                                              <script type="text/javascript">
                                              function init(){
                                               var service = new google.maps.DirectionsService;
                                               var view = new google.maps.DirectionsRenderer;

                                               var info_window = new google.maps.InfoWindow();
                                               var zoom = 5;

                                               var pos = new google.maps.LatLng(-3.050444,116.323242);
                                               var options = {
                                                'center': pos,
                                                'zoom': zoom,
                                                'mapTypeId': google.maps.MapTypeId.ROADMAP
                                               };

                                               var map = new google.maps.Map(document.getElementById('maps'), options);
                                               view.setMap(map);
                                               info_window = new google.maps.InfoWindow({
                                                'content': 'loading...'
                                               });

                                               var result = function(){
                                                lihat(service, view);
                                               }
                                               document.getElementById('lihat').addEventListener('click', result)
                                              }
                                              function lihat(service, view){
                                               var start = document.getElementById('start').value;
                                               var end = document.getElementById('end').value;

                                               var request = {
                                                origin: start,
                                                destination: end,
                                                travelMode: google.maps.TravelMode.DRIVING
                                               };

                                               service.route(request, function(response, status){
                                                if(status == google.maps.DirectionsStatus.OK){
                                                 view.setDirections(response);
                                                }else{
                                                 window.alert('Directions request failed due to ' + status);
                                                }
                                               });
                                              }
                                              google.maps.event.addDomListener(window, 'load', init);
                                              </script>
                                            </td>
                                        </tr><br>
                                        <tr>
                                            <td>
                                                <Label id="number" style="min-width: 150px; height: 40px; color: white;">Contact Person</Label>
                                                <input type="number" name="CP">
                                            </td>
                                        </tr><br>
                                        <tr>
                                            <td>
                                              <Label id="img" style="min-width: 150px; height: 40px; color: white;">Tambah Gambar
                                                  <p>Upload <input type='file' name='foto' /></p>
                                              </Label>
                                            </td>
                                        </tr><br><br>
    										<div class="button">
    									    <button type="submit" href="CRUDevent.php">CANCEL</button>    
                          <button type="submit" href="CRUDevent.php">ADD EVENT</button>    
                        </div><br><br><br>                                            
			</center>
		</FORM>
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
