<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Agenda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
		
		<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="css/nouislider.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
  <div class="main-section">

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" align ="center">
	    <div class="container">
       <a class="navbar-brand" href="tasks">User</a>
       <a class="navbar-brand" href="tasks/create">Jadwal</a>
	      <!-- <a class="navbar-brand" href="tasks">Agenda</a> -->
        <a class="navbar-brand" href="memos">Data kegiatan</a>
        <a class="navbar-brand" href="schedules">Laporan</a>
      
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
        
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="dropdown nav-item">
              <a href="{{ url('/logout') }}" class="dropdown-toggle nav-link icon d-flex align-items-center" data-toggle="dropdown">
                <i class="ion-ios-apps mr-2"></i>
                Logout
                <b class="caret"></b>
              </a>
              <div class="dropdown-menu dropdown-menu-left">
                <a href="{{ url('/logout') }}" class="dropdown-item"><i class="ion-ios-apps mr-2"></i> Log Out</a>
               
            </li>
	          </ul>
	      </div>
		  </div>
      </nav>
    <!-- END nav -->
   
  	<section class="hero-wrap js-fullheight" style="background-image: url(images/galaksi.jpg);" data-stellar-background-ratio="0.5">
  		<div class="overlay"></div>
  		<div class="container">
  			<div class="row description js-fullheight align-items-center justify-content-center">
  				<div class="col-md-8 text-center">
  					<div class="text">
  						<h1 class="mb-4"><span>Agenda</span></h1>
  						<h4 class="mb-5 mt-2">Create your day </h4>
  						<div class="designed d-inline-block">
  							<d class="d-flex align-items-center">
                
  							</d>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		
  	</section>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/nouislider.min.js"></script>
  <script src="js/moment-with-locales.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>