<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="apple-touch-startup-image" href="assets/img/splash/launch.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/img/splash/launch.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/img/splash/launch.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/img/splash/launch.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/img/splash/launch.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/img/splash/launch.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/img/splash/launch.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">  
  
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="./manifest.json">
  <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#ffee00">


  <meta charset="utf-8">
  <title data-translate="title"></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/stylesAddLocation.css">

  <!-- Nivo Slider Theme -->
  <link href="assets/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css?v2" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="assets/css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->
  </head>
<body>
  
  <form action="addLocation.php" method="post">
    <section>
         <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Add Your Location</h2>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col locatHead">
            <div><a class="btn btn-primary btn-lg" id="submit" name="submit" role="button" href="#myModal" onclick="getLocation()" data-toggle="modal">Add Location</a>
                <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Thank you!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                            <div class="modal-body">
                              <p hidden id="lat" name="latInfo"></p>
                              <p hidden id="lon" name="logInfo"></p>
                                <p class="text-center text-muted">Your information has been successfully submitted!</p>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


<!-- End Service area -->
  </form>
   


   </section>


   <script src="assets/lib/jquery/jquery.min.js"></script>
	<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
	<!-- Get Location -->
    <script src="getLocation.js"></script>


	<!-- Language Translater -->
    <script src="langTran.js"></script>


    <!-- Get Location -->
    <script src="getLocation.js"></script>
        
	

</body>
</html>