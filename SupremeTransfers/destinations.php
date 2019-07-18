<?php include 'includes/setup.inc.php'; ?>
<!DOCTYPE html>
	<html  lang="<?php echo $lang; ?>">
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
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--CSS
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
		<style>
			 body { background-color: #f8f9fa; }
			</style>
		<?php include 'includes/header.php' ?>
			
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Destinations				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="destinations.php"> Destinos</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

		<style>
    figure {
		margin: 10px;
		padding: 5px; 
		line-height: 50%;
        display: inline-block;
        position: relative;      
        overflow: hidden;
        border-radius: 10px; 
        background-color: rgba(0, 68, 104, 0.849);
        width: 120px;
        height: 120px; 
		line-height: 1em;
		box-shadow: 6px 8px 5px 3px rgba(186,186,186,1);
		border-style: solid;
  
		border-color: #13235B;
    }
    
    figcaption {
        color: white;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        transition: all 0.3s;
		background:#ac162dc5;
        position: absolute;
        left: 0px;
        bottom: -90px;
        width: 100%;
        padding: 10%;
		font-weight: 700;
    }
    figure:hover figcaption {
        bottom: 15px;
    } 
		</style>
		
		<!-- Start icons area -->
        <div class="container" style="text-align: center; padding: 70px 0 0 0;"> 
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-12">                
                    <div class="row">
			            <div class="col-md-12 text-center" style="margin-bottom:40px;">
				            <div class="line-subtitle-1"></div>
				            <h2 class="h1 home-subtitle-1 text-black">Lorem </h2>
			            </div>      
			        </div>    
                    <div class="container-fluid"> 
                        <figure><img style="margin: 10px; width: 85px; height: 70px;" src="img/icods/a.png"><figcaption>Información</figcaption></figure>
                        <figure><img style="margin: 10px; width: 90px; height: 70px;" src="img/icods/b.png"><figcaption>Salud</figcaption></figure>             
                        <figure><img style="margin: 10px; width: 90px; height: 70px;" src="img/icods/c.png"><figcaption>Guias</figcaption></figure>                
                        <figure><img style="margin: 10px; width: 90px; height: 70px;" src="img/icods/d.png"><figcaption>Transporte</figcaption></figure>                        
                        <figure><img style="margin: 10px; width: 90px; height: 70px;" src="img/icods/e.png"><figcaption>Ahorra</figcaption></figure>                                    
                    </div>
                </div>
            </div>
		</div>
		<!-- End icons area -->
		<!-- Start carrusel area-->
		
		<style>
		img{
			border-radius: 10px;
		}
		ul {
			text-align: center;
			
		}
		</style>
		<section class="recent-blog-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Popular destinations</h1>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis delectus eos ducimus culpa ipsam, suscipit nam odit s. Check out!</p>
							</div>
						</div>
					</div>							
					<div class="row">
						<div class="active-destinations-carusel">
							<div class="single-recent-blog-post item">
								<div class="thumb">
									<img src="img/tours/carrusel_1.jpg" alt="">
								</div>
								<div class="details">
									<div class="tags">
										<ul>
											<li>
												<a href="#">Travel</a>
											</li>
																				
										</ul>
									</div>
									<a href="#"><h4 class="title">Low Cost Advertising</h4></a>
									<p>
										Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
									</p>
									<h6 class="date">31st January,2018</h6>
								</div>	
							</div>
							<div class="single-recent-blog-post item">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/carrusel_2.jpg" alt="">
								</div>
								<div class="details">
									<div class="tags">
										<ul>
											<li>
												<a href="#">Travel</a>
											</li>
																				
										</ul>
									</div>
									<a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
									<p>
										Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
									</p>
									<h6 class="date">31st January,2018</h6>
								</div>	
							</div>
							<div class="single-recent-blog-post item">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/carrusel_3.jpg" alt="">
								</div>
								<div class="details">
									<div class="tags">
										<ul>
											<li>
												<a href="#">Travel</a>
											</li>
																					
										</ul>
									</div>
									<a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
									<p>
										Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
									</p>
									<h6 class="date">31st January,2018</h6>
								</div>	
							</div>	
							<div class="single-recent-blog-post item">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/carrusel_4.jpg" alt="">
								</div>
								<div class="details">
									<div class="tags">
										<ul>
											<li>
												<a href="#">Travel</a>
											</li>
																					
										</ul>
									</div>
									<a href="#"><h4 class="title">Low Cost Advertising</h4></a>
									<p>
										Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
									</p>
									<h6 class="date">31st January,2018</h6>
								</div>	
							</div>
							<div class="single-recent-blog-post item">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/carrusel_5.jpg" alt="">
								</div>
								<div class="details">
									<div class="tags">
										<ul>
											<li>
												<a href="#">Travel</a>
											</li>
																					
										</ul>
									</div>
									<a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
									<p>
										Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
									</p>
									<h6 class="date">31st January,2018</h6>
								</div>	
							</div>
							<div class="single-recent-blog-post item">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/carrusel_6.jpg" alt="">
								</div>
								<div class="details">
									<div class="tags">
										<ul>
											<li>
												<a href="#">Travel</a>
											</li>
																				
										</ul>
									</div>
									<a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
									<p>
										Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
									</p>
									<h6 class="date">31st January,2018</h6>
								</div>	
							</div>														

						</div>
					</div>
				</div>	
			</section>
			<!-- End carrusel area -->			
		


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