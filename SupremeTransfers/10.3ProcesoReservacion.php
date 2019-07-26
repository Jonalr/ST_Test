<?php include 'includes/setup.inc.php'; ?>
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
                        Paso 3 - Pagos
                    </h1>
                    <p class="text-white link-nav"><a href="">Paso 3 </a> <span class="lnr lnr-arrow-right"></span> <a
                            href=""> Finalizar</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


    <section class="container p-5 m-5">

        <div class="row justify-content-center border border-st ">
            <div class="col-md-8 pt-4">

                <h2 class="text-center">Pago</h2>
                <!-- <h1 class="display-4">Eco-Hoteles</h1> -->
                <hr class="bg-info">
                <p class="pb-0 mb-0">Seleccione un método de pago para su reserva. Cuando hayya completado su reserva, recibirá un correo electrónico de confirmación, junto con su código de cupón, asi como instrucciones detalladas para cada servicio que haya contratado.</p>
                <p class="text-danger pt-0 mt-0">*No todos los campos son Obligatorios, pero no te olvides revisar.*</p>



                <form class="" action="">

                    <!-- -----------------------------------nombre y email -------------------------------------- -->

                    <div class="row p-1 m-1">


                        <div class="col-md-2">
                            <img src="img/iconshopcart/option-cc.png"  alt="">
                        </div>

                        <div class="col-md-5">

                            <div class="btn-group" data-toggle="buttons">
                                <label for="">Tarjeta de Credito/ &nbsp;<br> Deposito/SPEI &nbsp; </label>

                                <label class="btn btn-primary ">
                                    <input type="radio" name="opPago" id="" autocomplete="off" checked>
                                </label>
                            </div>

                        </div>


                        <div class="col-md-5">

                            <div class="radio">
                                <div class="form-check">
                                    <label class="form-check-label">
                                       

                                        <input type="radio" class="form-check-input" name="optradio" id="" value="checkedValue" checked>
                                    
                                        Estoy de acuerdo con la forma de pago y las instrucciones correspondientes, y deso
                                        hacer mi reserva con las politicas y garantias de privacidad que ofrece el sitio web
                                        de la Agencia Travelu'um.
                                  </label>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="row p-1 m-1">
                        <div class="col-md-2">
                            <img src="img/iconshopcart/option-cash.png" alt="">

                        </div>


                        <div class="col-md-5">
                            <div class="btn-group" data-toggle="buttons">
                                <label for="">En efectivo [+ Más info] &nbsp; </label>

                                <label class="btn btn-primary ">
                                    <input type="radio" name="opPago" id="" autocomplete="off" checked>
                                </label>
                            </div>

                        </div>
                        
                        
                        <div class="col-md-5">
                            
                            <div class="radio">
                             <div class="form-check">
                                 <label class="form-check-label">
                                     
                                    <input type="radio" class="form-check-input" name="optcondi" id="" value="checkedValue" checked> 
                                    
                                    Si, he leido y acepto las Condiciones del Servicio.
                                 </label>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="row">

                        <p>Si elige la Opcion Tarjeta Bancaria</p>
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