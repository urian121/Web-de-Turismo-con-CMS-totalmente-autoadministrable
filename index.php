<!DOCTYPE html>
<html lang="es">
	<head>
	<title>Turismo S.A.S</title>
	  <meta charset="UTF-8">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
		<link type="text/css" rel="shortcut icon" href="assets/img/favicon.ico"/>
		
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/grid.css">

		<!--
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		-->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,400;1,400&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" id="app-stylesheet" href="assets/css/main.css">

		<link rel="stylesheet" type="text/css" href="assets/css/cargando.css">
		<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
		<link rel="stylesheet" type="text/css" href="assets/css/micss.css">

		<!----css banner --->
		<link rel="stylesheet"  href="banner/dist/zoomslider.css"/>
		<script type="text/javascript" src="banner/js/modernizr-2.6.2.min.js"></script>
		<link rel="stylesheet" href="banner/cssbanner.css">

		<link rel="stylesheet" type="text/css" href="assets/css/slider_marcas.css">
		<link rel="stylesheet" type="text/css" href="assets/css/ol_li.css">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>

	<!-- cargando -->
	
	<div class="cargando">
	    <div class="loader-outter"></div>
	    <div class="loader-inner"></div>
	</div>
	


		<div class="page-wrap" id="root">
			
		<?php
	    include('cms/config.php');
	    
		include('header.php'); 
		?>

			
		<div class="md-content">
			<div class="hero" id="id-1">
				<div class="hero__wrapper">
					
				<?php

					$sqlBanner   = ("SELECT * FROM banner");
					$queryBanner = mysqli_query($con, $sqlBanner);
					$DataBanner  = mysqli_fetch_array($queryBanner);


					include('banner.php'); 

					include('barraRedes.php'); 

				?>
				</div>
			</div>
				
				<?php
					include('servicios.php'); 
				?>


		<section class="awe-section bg-gray">
			<div class="container">
				<div class="row">
					<?php	
					$sqlVideoYoutube   = ("SELECT * FROM videos WHERE seccion='Pagina Principal' ORDER BY id DESC LIMIT 1 ");
					$queryVideoYoutube = mysqli_query($con, $sqlVideoYoutube);
					$totalVideo        = mysqli_num_rows($queryVideoYoutube);
					$DataVideoYoutube  = mysqli_fetch_array($queryVideoYoutube);

					if ($totalVideo >0) { ?>

					<div class="video-responsive" style="text-align:center;">
					    
					<center>
						<iframe src="<?php echo $DataVideoYoutube['urlVideo']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
					</center>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>


				<section class="awe-section bg-gray">
					<div class="container">
						<div class="row">
						<div class="col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 ">
							<div class="title">
								<h2 class="title__title">
								 	Destinos Nacionales <br /> 
								 <hr>
								</h2>
							</div>
						</div>

					<?php
						$sqlDestNacional   = ("SELECT * FROM destinos WHERE tipo_destino='Nacional' ");
	    				$queryDestNacional = mysqli_query($con, $sqlDestNacional);

	    				$sqlDestInternacional   = ("SELECT * FROM destinos WHERE tipo_destino='Internacional' ");
	    				$queryDestInternacional = mysqli_query($con, $sqlDestInternacional);

	    				include('nuestrosDestinos.php');
	    			?>
						
						</div>
					</div>
				</section>


			<?php 
				include('foto.php'); 
				include('cursos.php'); 

				$sqlVideoExperiencia = ("SELECT * FROM videos WHERE seccion='Experiencias' ORDER BY id DESC LIMIT 1 ");
			    $queryVideoExperiencia = mysqli_query($con, $sqlVideoExperiencia);
			    $totalVideoExperiencia = mysqli_num_rows($queryVideoExperiencia);
			    $DataVideoExp  		   = mysqli_fetch_array($queryVideoExperiencia);

				include('experiencia_clientes.php');

			?>


			</div>
			<br><br>
			

		<?php 
			include('marcas.php');

			include('footer.php');
		?>
			
			
		</div>


		<script  src="https://code.jquery.com/jquery-2.2.4.js"></script>
		<!-- Vendors-->
		<script type="text/javascript" src="assets/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery-one-page/jquery.nav.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.easing/jquery.easing.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="assets/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/swiper/swiper.jquery.js"></script>
		<script type="text/javascript" src="assets/vendors/menu/menu.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.select2/select2.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>

	  	<script type="text/javascript" src="banner/dist/jquery.zoomslider.min.js"></script>

	  	<!---slider de Marcas -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
		<!-- App-->
		<script type="text/javascript" src="assets/js/main.js"></script>

		<script src="assets/js/scroll.js"></script>

<!--script para el slider de marcas -->
	<script type="text/javascript">
	$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
			        }]
			    });
			});

			$(document).ready(function(){
					setTimeout(function () {
			     $(".cargando").hide();
			    }, 100);
			});


			/* * * * * * * * *enviar form * * * * * * * * * * */
			 $(document).ready(function () {
                $("#formulario").bind("submit", function () {
                    var btnEnviar = $("#btnEnviar");
                    $.ajax({
                        type: $(this).attr("method"),
                        url:  $(this).attr("action"),
                        data: $(this).serialize(),
                        beforeSend: function () {
                            btnEnviar.val("Enviando Registro. . . ."); // Para input de tipo button
                            btnEnviar.attr("disabled", "disabled");
                        },
                        complete: function (data) {
                            btnEnviar.val("Registro Creado.");
                            btnEnviar.removeAttr("disabled");
                        },
                        success: function (data) {
                        	$("#respuestaMsj").show();
                            $("#respuestaMsj").html(data);

                        setTimeout(function () {
						        $("#respuestaMsj").fadeOut(1500);
						    }, 3000);
                        
                            document.getElementById("formulario").reset(); //para limpiar el formulario
                        },
                        error: function (data) {
                            alert("Problemas al tratar de enviar el formulario");
                        }
                    });
                    return false;
                });
            });
		</script>



		<!-- I AM WEB DEVELOPER ENGINEER URIAN VIERA ---->
		<!--- https://blogangular-c7858.web.app --->
		<!--- http://mywebsite.rf.gd --->
	</body>
</html>