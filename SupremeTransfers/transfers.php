<?php?>
<!DOCTYPE html>
<?php include 'includes/setup.inc.php'; ?>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/favicon.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Travel</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		<?php include 'includes/header.php' ?>
			
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Transfers				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="transfers.php"> Traslados</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			<style>
			.section-top{
				padding: 55px 0 0 0;
			}
			</style>
			<!-- start reserv Area -->		
			<div class="container section-top">
				<div class="row fullscreen align-items-center float-right">
					<div class="col-lg-12 col-md-10 col-xs-6 banner-right">
							<!--<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a style="background-color: #003464" class="nav-link" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true" >Tours</a>
							  </li>
							</ul>-->
							<div class="tab-content" id="myTabContent" style="padding: 15% 0 0 0;">
							  <div style="width: 350px; height: 372px; background-color: #003464;" class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
							  <form class="form-wrap">
								<h4 style="color: white;">Transfers</h4><br>
									<input type="text" class="form-control" name="Hotel" placeholder="Hotel " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Hotel '">									
									<input type="text" class="form-control" name="Type of tour" placeholder="Type of tour " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type of tour'">
									<!--<input type="text" class="form-control date-picker" name="Tipo de viaje" placeholder="Tipo de viaje " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tipo de viaje '">-->
									<input type="text" class="form-control date-picker" name="Arrival date" placeholder="Arrival date " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Arrival date '">
									<input type="number" min="1" max="10" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
									<input type="number" min="0" max="10" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">						
									<a style="background-color: #00b2f865" href="#" class="primary-btn" onMouseover="this.style.background='#009bf5'" onMouseout="this.style.background='#00669f'">Get prices</a>									
								</form>	
							  </div>
							</div>	
							<div class="text-center ">
								<h1>Can we help you?</h1>
								<p>You can call to 888 888!</p>
								<img src="img/help.jpg" alt="">
							</div>
						</div>
					</div>		
				</div>

			<!-- End reserv Area -->
		
			<!-- Start hot-deal Area -->
			<section class="hot-deal-area ">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-12">
		                    <div class="title text-justify">
		                        <h1 class="mb-10"><?=TITLE_TRANSFERS?></h1>
		                        <p><?=INFO_TRANSFERS?></p>
		                    </div>
		                </div>
		            </div>						
					<div class="row justify-content-center">
						<div class="col-lg-10 active-hot-deal-carusel">
							<div class="single-carusel">
								<div class="thumb relative">
									<!--<div class="overlay overlay-bg"></div>-->
									<img class="img-fluid" src="img/transfers/basic_service.jpg" alt="">
									<h4 class="text-black text-center">Servicio básico</h4>
									<p class="text-black text-center">
									Motor L4 2.7L 16 válvulas DOHC VVT-i Dual, ETCS-i; Potencia 149 hp @ 4,800 rpm y torque 178 lb-ft @ 3,200 rpm</p>
									<div class="text-center">
									<button type="button" class="btn btn-info text-center" style="font-size: 12px; color: black;">Starting From</button>
									</div>	
								</div>											
							</div>
							<div class="single-carusel">
								<div class="thumb relative">
									<!--<div class="overlay overlay-bg"></div>-->
									<img class="img-fluid" src="img/transfers/deluxe_service.jpg" alt="">
									<h4 class="text-black text-center">Servicio de lujo</h4>
									<p class="text-black text-center">
									Motor L4 2.7L 16 válvulas DOHC VVT-i Dual, ETCS-i; Potencia 149 hp @ 4,800 rpm y torque 178 lb-ft @ 3,200 rpm</p>
									<div class="text-center">
									<button type="button" class="btn btn-info text-center" style="font-size: 12px; color: black;">Starting From</button>
									</div>
								</div>
								
							</div>
							<div class="single-carusel">
								<div class="thumb relative">
									<!--<div class="overlay overlay-bg"></div>-->
									<img class="img-fluid" src="img/transfers/Groups_service.jpg" alt="">
									<h4 class="text-black text-center">Grupos</h4>
									<p class="text-black text-center" >
									Motor L4 2.7L 16 válvulas DOHC VVT-i Dual, ETCS-i; Potencia 149 hp @ 4,800 rpm y torque 178 lb-ft @ 3,200 rpm</p>
									<div class="text-center">
									<button type="button" class="btn btn-info text-center" style="font-size: 12px; color: black;">Starting From</button>
									</div>
								</div>						
							</div>													
						</div>
					</div>
				</div>	
			</section>
			<!-- End hot-deal Area -->
			<div class="alert alert-primary" role="alert">
				Nuestros vehiculos cuentan con la opción de llevar un asiento especial, para bebé o de otro tipo, sin costo adicional.
				Sólo debe solicitarlo al staff de reservaciones después de realizar su reservación.
			</div>
			<style>
				.section-top.dest{
					padding: 2% 0 0 0;
					
				}
			</style>
			<!--START SECTION DESTINATION-->
			<section class="popular-destination-area section-top.dest">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Destinations</h1>
		                        <p> We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day. 
									We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day. 
						    	</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/d1.jpg" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">$150</a>			
									<h4>Mountain River</h4>
									<p>Paraguay</p>			
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/d2.jpg" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">$250</a>			
									<h4>Dream City</h4>
									<p>Paris</p>			
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/d3.jpg" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">$350</a>			
									<h4>Cloud Mountain</h4>
									<p>Sri Lanka</p>			
								</div>
							</div>
						</div>	
						</div>	
						<br>
						<div class="row">
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/d3.jpg" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">$350</a>			
									<h4>Cloud Mountain</h4>
									<p>Sri Lanka</p>			
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/d3.jpg" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">$350</a>			
									<h4>Cloud Mountain</h4>
									<p>Sri Lanka</p>			
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/d3.jpg" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">$350</a>			
									<h4>Cloud Mountain</h4>
									<p>Sri Lanka</p>			
								</div>
							</div>
						</div>									
					</div>
				</div>	
			</section>
			<br>
			<!-- partir en dos filas -->
			<!--END SECTION DESTINATION-->	
			<?php include 'includes/footer.php' ?>
			
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>