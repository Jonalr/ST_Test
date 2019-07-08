<?php ?>
<!DOCTYPE html>
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
<style>
.text-blue-aqua{
	font-weight: 600;
	color:#066472;
}
.text-info-tour{
	font-weight: 600;
	color: black;
}
</style>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
					  <div class="row align-items-center">
						  <div class="col-lg-6 col-sm-6 col-6 header-top-left">
							  <ul>
								<li><a href="mailto:contact@traveluum.com">contact@traveluum.com</a></li>
							
							  </ul>			
						  </div>
						  <div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-info" href="#" style="height: 30px; font-size: 12px;">
                                <i class="fa fa-shopping-cart"></i> 
                                Mi carrito
                            </a>
							</div>
						  </div>
					  </div>			  					
					</div>
				</div>
				<div class="main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/LogoST.png" style="width: 125px; height: 65px;" title="" /></a>
				      </div>
					  <nav id="nav-menu-container">
						<ul class="nav-menu">
						<li><a href="index.php">Inicio</a></li>
				          <li><a href="about.php">Acerca de</a></li>
						  <li><a href="destinations.php">Destinos</a></li>
						  <li><a href="transfers.php">Traslados</a></li>
						  <li><a href="tours.php">Tours</a></li>	
						  <li><a href="groups.php">Grupos</a></li>
				          <li><a href="agencias.php">Agencias</a></li>
				          <li><a href="blog.php">Blog</a></li>	          					          		          
				          <li><a href="contact.php">Contact</a></li>
						</ul>
					  </nav>					      		  
					</div>
				</div>
			</header>
  
			<section class="container section-gap">			
                <h2 style="color: black; text-align: center; padding: 20px;"> <img src="img/shop2.png" style="width:120px; height:80px;">Mi carrito de compras</h2> 		
				<div class="row ">
					<div class="col-md-8 pt-4">
				
						<div class="form-row rounded m-1 text-center" style="padding: 15px 0 15px 0; background: #138496">
                            <div class="col-md-4 text-white" style="font-size:18px; font-weight: bolder;">Servicio</div> 
                            <div class="col-md-4 text-white" style="font-size:18px; font-weight: bolder;">Detalles</div>
                            <div class="col-md-4 text-white" style="font-size:18px; font-weight: bolder;">Subtotal</div>
                        </div>
						<!--Aqui empieza la simulación de un tour agregado al carrito-->
				
					<div class="col-md-12 p-1">
						<div class="form-row text-center">
                            <div class="col-md-4 text-blue-aqua">
                            	<div>TOUR</div>
                            	<div><img src="img/tours/cancun.jpg" class="img-responsive" style="width: 60%; height: 40%;"></div>
                        	</div>
                                                    
							<div class="col-md-4">
								<p class="text-info-tour">
								Xcaret Plus Xcaret Básico-Tour Privado<br>
								3 Adultos <br>
								Fecha de Tour: 31/07/2019 </p>
							</div>
														
							<div class="col-md-4" >
								<p class="f-s-25px text-blue-aqua">$10,129.21 MXN</p>														
								<a href="/edit-tour.php?item_code=TO0818&ref=SC" class="btn btn-primary btn-sm">Editar</a> 
								<a class="btn btn-danger btn-sm delete-item" id="TO0818.Xcaret Plus Xcaret Básico-Tour Privado">Borrar</a>
							</div>
                       
						</div>
					</div>
						<!--Aqui termina la simulacion-->
							<!--BOTONES SE HABILITAN CUANDO HALLAN PRODUCTOS EN EL CARRITO-->
                                
                            <div class="row justify-content-center mt-5">

								<div class="p-1">
									<button type="submit" class="btn btn-danger " >Vaciar carrito</button>
								</div>
                                <div class="p-1">
									<button type="submit" class="btn btn-info" >Agregar más al carrito</button>
                                </div>
                                <div class="p-1">
									<button type="submit" class="btn btn-success" >Comprar ahora!</button>
								</div>
                            </div>
 						</div>

					<div class="col-md-4 pt-4">
                        
                        <div class="form-row rounded m-1 text-center" style="padding: 15px 0 15px 0; background: #138496">
                            <div class="col-md-12 text-white" style="font-size:18px; font-weight: bolder;">      Mis productos agregados</div>

                        </div>
						<div class="col-md-7 ">
                                        <p>
                                        <span class="f-s-14px text-info-tour">
                                            <strong>Tour 1</strong><br>
                                            Traslado    <br>
                                             (31 Pax) desde                                            Xcaret Plus<br>Fecha de llegada:                                                                                     </span>
                                        </p>
                                    </div>
						<div class="form-row" style="background: #418f9b94; border-radius: 15px;">
                            <div class="col-sm-6 text-blue-aqua">
                                <p>TOTAL: </p>
							</div>

							<div class="col-sm-6 text-right text-blue-aqua">
								<p>$10,129.21 MXN </p>
							</div>

						</div>
					</div>
				</div>
	
			</section>


			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">

					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>CONTACTANOS</h6>
								<ul>
								<li>Cancun, Quintana Roo</li>
								<li>Días Laborales: Mon-Sun</li>
								<li>Horarios Laborales: 9:00AM - 9:00PM</li>
								<li>Télefono de Contacto: (+52) 998-705-4593</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Navigation Links</h6>
								<div class="row">
									<div class="col">
									<ul>
											<li><a href="index.php">Inicio</a></li>
											<li><a href="about.php">Acerca De</a></li>
											<li><a href="transfers.php">Traslados</a></li>
											<li><a href="tours.php">Tours</a></li>
										</ul>
									</div>
									<div class="col">
										<ul>
											<li><a href="destinations.php">Destinos</a></li>
											<li><a href="agencias.php">Agencias</a></li>
											<li><a href="groups.php">Grupos</a></li>
											<li><a href="contact.php">Contacto</a></li>
										</ul>
									</div>										
								</div>							
							</div>
						</div>							
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>RECURSOS ADICIONALES</h6>
								<div class="col">
										<ul>
											<li><a href="#">Preguntas Frecuentes</a></li>
											<li><a href="#">Terminos y Condiciones</a></li>
											<li><a href="#">Politicas de Privacidad</a></li>
											
										</ul>
									</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								
								<ul class="instafeed d-flex flex-wrap">
									<img src="img/logo-mexico.png" style="width: 65%;  height: 50%;" alt="">
							
									
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="">Students UTCancun</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

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