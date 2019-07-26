<?php include 'includes/setup.inc.php'; ?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/Favic.png">
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
			<style>
				.border-st {
					border-color: #003464 !important;
				}
			</style>
			
			  
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
					<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Paso 1 - Información Personal				
							</h1>	
							<p class="text-white link-nav"><a href="">Paso 1 </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Paso 2</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


			<section class="container p-5 m-5">

				<div class="row justify-content-center border border-st ">
					<div class="col-md-8 pt-4">
						
						<h2>Informacion de Vuelo para su(s) traslado(s)</h2>
						<!-- <h1 class="display-4">Eco-Hoteles</h1> -->
						<hr class="bg-info">
						<p class="pb-0 mb-0">Hola, llena el registro correctamente,y te invitamos a revisar tus datos posteriormente.</p>
						<p class="text-danger pt-0 mt-0">*No todos los campos son Obligatorios, pero no te olvides revisar.*</p>


						
							<form class="" action="">

							<!-- -----------------------------------nombre y email -------------------------------------- -->

								<div class="form-row"> 
									
									<div class=" form-group col-md-6">
										
										<label for="inputState" class=""> Nombre: </label>

										<input type="text" name="nombre-hotel" value="" id="nombre-hotel" class="form-control">

									</div>
										
			
									<div class=" form-group col-md-6 "> 

										
										<label for="inputState">Email</label>
										<input type="text" name="nombre-hotel" value="" id="nombre-hotel" class="form-control">
									
									</div>
									
								</div>   
								<!-- ----------------------------nombre y email--------------------------- -->
								

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Apellidos">Apellidos</label>
										<input type="email" class="form-control" id="inputEmail4" >
									</div>
									<div class="form-group col-md-6">
										<label for="inputPassword4">Pais</label>

										<select class="form-control" name="categoria" id="categoria">
											<option value="Cancun">Cancun</option>
											<option value="Tulum">Tulum</option>
											<option value="Riviera Maya">Riviera Maya</option>
										</select>
										
									</div>
								</div>




								<div class="form-row">

									<div class=" form-group col-md-6">

										<label for="inputState" class=""> Telefono: </label>

										<input type="text" name="nombre-hotel" value="" id="nombre-hotel" class="form-control">

									</div>


									<div class=" form-group col-md-6 ">


										<label for="inputState">Ciudad/Estado</label>
										<input type="text" name="nombre-hotel" value="" id="nombre-hotel" class="form-control">

									</div>

								</div>

								

							    
								

								<div class="form-group row justify-content-center">
								 	<div class="">
								 		<button type="submit" class="btn btn-success">Siguiente</button>
								 	</div>
								 </div>


								


								


							</form>

						</div>
						<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
					
					</div>

				</div>

				
			
			</section>



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