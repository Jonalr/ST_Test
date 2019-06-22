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
		<title>Tours</title>

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
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			
			  
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Tours				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Inicio</a>  <span class="lnr lnr-arrow-right"></span>  <a href="tours.php"> Tours</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start about-info Area 
			<section class="about-info-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 info-left">
							<img class="img-fluid" src="img/about/info-img.jpg" alt="">
						</div>
						<div class="col-lg-6 info-right">
							<h6>Tours</h6>
							<h1>Our tours are...</h1>
							<p>
								</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End about-info Area -->
		
 <!-----------Galeria---------->	
<style>
.section-top{
	padding: 30px 0 0 0;
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
							<div class="tab-content" id="myTabContent" style="padding: 15% 0 0 0 ">
							  <div style="width: 350px; height: 372px; background-color: #003464;" class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
								<form class="form-wrap">
									<h3 style="color: white">Tours</h3><br>
									<input type="text" class="form-control" name="Select Tour" placeholder="Select Tour " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Tour '">									
									<input type="text" class="form-control" name="Select a Package" placeholder="Select a Package " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select a Package '">
									<input type="text" class="form-control date-picker" name="Date of tour" placeholder="Date of tour " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date of tour '">
								<!--<input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">-->
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
			<section class="hot-deal-area">
				<div class="container">
		            <div class="row d-flex justify-content-left">
		                <div class="menu-content pb-70 col-lg-12">
		                    <div class="title text-justify">
		                        <h1 class="mb-10">Today’s Hot Deals</h1>
		                        <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to. Jlive in an age that belongs to the young at heart. Life that is becoming extremely fast
								live in an age that belongs to the young at heart. Life that is becoming extremely fastlive in an age that belongs to the young at heart. Life that is becoming extremely fast.
								live in an age that belongs to the young at heart. Life that is becoming extremely fastlive in an age that belongs to the young at heart. Life that is becoming extremely fast	
							</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row justify-content-left">
						<div class="col-lg-12 active-hot-deal-carusel">
							<div class="single-carusel">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/packages/cayack.jpg" alt="">
								</div>
								<div class="price-detials">
				 					<a href="snorkelMayan.php" class="price-btn"><strong>See more!</strong></a>
								</div>
								<div class="details">
									<h4 class="text-white">Life the adventure</h4>
									<p class="text-white">
										snorkel Mayan
									</p>
								</div>								
							</div>
							<div class="single-carusel">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/packages/Ruins.jpg" alt="">
								</div>
								<div class="price-detials">
									<a href="Mayan_adventure.php" class="price-btn"><strong>See more!</strong></a>
								</div>
								<div class="details">
									<h4 class="text-white">Ancient Architecture</h4>
									<p class="text-white">
										Tulum ruins
									</p>
								</div>								
							</div>
							<div class="single-carusel">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/packages/buceo.jpg" alt="">
								</div>
								<div class="price-detials">
									<a href="xel-ha.php" class="price-btn"><strong>See more!</strong></a>
								</div>
								<div class="details">
									<h4 class="text-white">Diving</h4>
									<p class="text-white">
										Xel-Ha
									</p>
								</div>								
							</div>														
						</div>
					</div>
				</div>	
			</section>
			<!-- End hot-deal Area -->
 			<section class="Tours section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Our Tours</h1>
		                        <p>There is area of tours is area of tours is area of tours is area of tours is area of tours
								is area of tours is area of tours is area of tours is area of tours
								</p>
		                    </div>
		                </div>
		            </div>					
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/Yal-Ku-Lagoon-Caribbeanmaya-1.jpg" alt="">					
								</div>
								<a href="tour-cancun.php">
									<h4>Cancun</h4>
								</a>
								<p>
									The wonderful site of your dreams.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/toursitos/cenote..jpg" alt="">					
								</div>
								<a href="luum_balaam.php">
									<h4>Luum Balam</h4>
								</a>
								<p>
									I was always somebody who felt quite sorry for myself, what I had not got compared.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/toursitos/tiburon.jpg" alt="">					
								</div>
								<a href="Shark_swimming.php">
									<h4>Shark Swiming</h4>
								</a>
								<p>
									The following article covers a topic that has recently moved to center stage–at least it seems.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/tour-jungla-maya-snorkel.jpg" alt="">					
								</div>
								<a href="mayan_jungle.php">
									<h4>Mayan Jungle</h4>
								</a>
								<p>
									There are many kinds of narratives and organizing principles. Science is driven by evidence.
								</p>
							</div>
						</div>	
						<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/mayanadventure.jpg" alt="">					
								</div>
								<a href="mayan_adventure.php">
									<h4>Mayan adveture</h4>
								</a>
								<p>
									The wonderful place in Mexico.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/toursitos/xelha.jpg" alt="">					
								</div>
								<a href="xel-ha.php">
									<h4>Xel-há</h4>
								</a>
								<p>
									I was always somebody who felt quite sorry for myself, what I had not got compared.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/toursitos/piramide.jpg" alt="">					
								</div>
								<a href="chichen.php">
									<h4>Chichen Itzá</h4>
								</a>
								<p>
									The following article covers a topic that has recently moved to center stage–at least it seems.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/gra-cenote.jpg" alt="">					
								</div>
								<a href="grancenote.php">
									<h4>Gran cenote</h4>
								</a>
								<p>
									There are many kinds of narratives and organizing principles. Science is driven by evidence.
								</p>
							</div>
						</div>	
						<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/Viajes-a-Chichen-Itza.jpg" alt="">					
								</div>
								<a href="chichen.php">
									<h4>Chichen</h4>
								</a>
								<p>
									Piramide
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/tour-jungla-maya-snorkel.jpg" alt="">					
								</div>
								<a href="snorkelMayan.php">
									<h4>snorkel Mayan jungle</h4>
								</a>
								<p>
									I was always somebody who felt quite sorry for myself, what I had not got compared.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/gra-cenote.jpg" alt="">					
								</div>
								<a href="granCenote.php">
									<h4>Gran cenote</h4>
								</a>
								<p>
									The following article covers a topic that has recently moved to center stage–at least it seems.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/tours/toursitos/kayak-xenotes.jpg" alt="">					
								</div>
								<a href="xenote.php">
									<h4>Xenotes</h4>
								</a>
								<p>
									There are many kinds of narratives and organizing principles. Science is driven by evidence.
								</p>
							</div>
						</div>																		
					</div>																	
					</div>																	
					</div>

				</div>	
			</section>
			
			<!-----------End Galeria---------->	
			

			<!-- Start price Area -->
			<section class="price-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">We Provide Affordable Prices</h1>
		                        <p>Well educated, intellectual people, especially scientists at all times demonstrate considerably.</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-price">
								<h4>Cheap Packages</h4>
								<ul class="price-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>Pueblo Maya</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Maldives</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Sri Lanka</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Nepal</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Thiland</span>
										<a href="#" class="price-btn">$1500</a>
									</li>	
									<li class="d-flex justify-content-between align-items-center">
										<span>Singapore</span>
										<a href="#" class="price-btn">$1500</a>
									</li>														
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-price">
								<h4>Luxury Packages</h4>
								<ul class="price-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>New York</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Maldives</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Sri Lanka</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Nepal</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Thiland</span>
										<a href="#" class="price-btn">$1500</a>
									</li>	
									<li class="d-flex justify-content-between align-items-center">
										<span>Singapore</span>
										<a href="#" class="price-btn">$1500</a>
									</li>														
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-price">
								<h4>Camping Packages</h4>
								<ul class="price-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>New York</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Maldives</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Sri Lanka</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Nepal</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Thiland</span>
										<a href="#" class="price-btn">$1500</a>
									</li>	
									<li class="d-flex justify-content-between align-items-center">
										<span>Singapore</span>
										<a href="#" class="price-btn">$1500</a>
									</li>														
								</ul>
							</div>
						</div>												
					</div>
				</div>
			</section>
			<!-- End price Area -->
			<!-- Start other-issue Area 
			<section class="other-issue-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-9">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Other issues we can help you with</h1>
		                        <p>We all live in an age that belongs to the young at heart. Life that is.</p>
		                    </div>
		                </div>
		            </div>					
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/o1.jpg" alt="">					
								</div>
								<a href="#">
									<h4>Rent a Car</h4>
								</a>
								<p>
									The preservation of human life is the ultimate value, a pillar of ethics and the foundation.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/o2.jpg" alt="">					
								</div>
								<a href="#">
									<h4>Cruise Booking</h4>
								</a>
								<p>
									I was always somebody who felt quite sorry for myself, what I had not got compared.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/o3.jpg" alt="">					
								</div>
								<a href="#">
									<h4>To Do List</h4>
								</a>
								<p>
									The following article covers a topic that has recently moved to center stage–at least it seems.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/o4.jpg" alt="">					
								</div>
								<a href="#">
									<h4>Food Features</h4>
								</a>
								<p>
									There are many kinds of narratives and organizing principles. Science is driven by evidence.
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End other-issue Area -->
			

			<!-- Start testimonial Area 
		    <section class="testimonial-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Testimonial from our Clients</h1>
		                        <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user1.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
		                            </p>
		                            <h4>Harriet Maxwell</h4>
	                            	<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>				
									</div>	
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user2.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
		                            </p>
		                            <h4>Carolyn Craig</h4>
	                           		<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>			
									</div>	
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user1.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
		                            </p>
		                            <h4>Harriet Maxwell</h4>
	                            	<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>				
									</div>	
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user2.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
		                            </p>
		                            <h4>Carolyn Craig</h4>
	                           		<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>			
									</div>	
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user1.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
		                            </p>
		                            <h4>Harriet Maxwell</h4>
	                            	<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>				
									</div>	
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user2.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
		                            </p>
		                            <h4>Carolyn Craig</h4>
	                           		<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>			
									</div>	
		                        </div>
		                    </div>		                    		                    
		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End testimonial Area -->

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
									<img src="img/logo-mexico.png" style="width: 65%; height: 50%;" alt="">
									
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