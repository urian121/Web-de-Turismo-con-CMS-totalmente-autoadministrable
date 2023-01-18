<div class="footer">
	<div class="container">
		<div class="col-md-4 col-lg-4">
			<h6 class="footer__title">Contáctanos</h6>
			<hr>
			
			<div class="widget_list">
			    <li>
					<i class="zmdi zmdi-pin zmdi-hc-lg"></i>
			        Calle 20 #82 52 Centro comercial Hayuelos local 144 primer piso
			    </li>
			    
				<li>
					<i class="zmdi zmdi-pin zmdi-hc-lg"></i>
					<a target="_blank" href="https://www.google.com/maps/place/Hayuelos+Centro+Comercial/@4.6637321,-74.1552507,13z/data=!4m9!1m2!2m1!1sCalle+20+%2382+52+Centro+comercial+Hayuelos+local+144!3m5!1s0x8e3f9c7c183b5caf:0xac7d29a15cf82ed1!8m2!3d4.6637321!4d-74.1304886!15sCjNDYWxsZSAyMCAjODIgNTIgQ2VudHJvIGNvbWVyY2lhbCBIYXl1ZWxvcyBsb2NhbCAxNDRaagozY2FsbGUgMjAgIzgyIDUyIGNlbnRybyBjb21lcmNpYWwgaGF5dWVsb3MgbG9jYWwgMTQ0IjNjYWxsZSAyMCAjODIgNTIgY2VudHJvIGNvbWVyY2lhbCBoYXl1ZWxvcyBsb2NhbCAxNDSSAQ9zaG9wcGluZ19jZW50ZXKaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVUkRla2t5TkVwM0VBRQ">
					Sede multiplaza Calle 19 A N° 72-57 Av Boyacá – Calle 13 Sentido norte 
					– sur Local C 132 Tercer piso.
				</a>
				</li>
				<li>
					<i class="zmdi zmdi-phone zmdi-hc-lg"></i>
					<a href="tel:+573005460490">300-5460490</a>
				</li>

				<li>
					<i class="zmdi zmdi-phone-end zmdi-hc-lg"></i>
					<a href="tel:+573005460490">301-3641637</a>
				</li>
				<li>
					<i class="zmdi zmdi-email zmdi-hc-lg"></i>
					<a href="mailto:info@holiday.com">info@holiday.com</a>
				</li>
				<li>
					<i class="zmdi zmdi-email zmdi-hc-lg"></i>
					<a href="mailto:reservas@holidaytys.com">reservas@holidaytys.com</a>
				</li>
			</div>
			
		</div>

	<?php
	//sql para servicios
    	$sqlPdf    = ("SELECT * FROM pdfs WHERE id='1' ");
    	$queryPdf  = mysqli_query($con, $sqlPdf);
    	$DataPdf   = mysqli_fetch_array($queryPdf);

    	//sql precio de los destinos
    	$sqlPrecioDest    = ("SELECT * FROM pdfs WHERE id='2' ");
    	$queryPrecioDest  = mysqli_query($con, $sqlPrecioDest);
    	$DataPdfPrecioDesti  = mysqli_fetch_array($queryPrecioDest);

    	//sql precio de los Asociados
    	$sqlPrecioAsociado     = ("SELECT * FROM pdfs WHERE id='3' ");
    	$queryPrecioAsociado   = mysqli_query($con, $sqlPrecioAsociado);
    	$DataPdfPrecioAsociado  = mysqli_fetch_array($queryPrecioAsociado);
    ?>
		<div class="col-md-4 col-lg-4">
			<h6 class="footer__title">Conócenos</h6>
			<hr>
			
			<div class="widget_list">
				<li>
					<a target="_blank" href="pdfPoliticaPrivacidad/mision_vision.pdf">Misión y Visión </a>
				</li>
				<li>
					<a target="_blank" href="<?php echo 'cms/'.$DataPdf['url_pdf']; ?>">
						<?php echo $DataPdf['namePDF']; ?></a>
					</li>
				<li>
					<a target="_blank" href="<?php echo 'cms/'.$DataPdfPrecioDesti['url_pdf']; ?>">
					<?php echo $DataPdfPrecioDesti['namePDF']; ?></a>
				</li>
				<li>
					<a target="_blank" href="<?php echo 'cms/'.$DataPdfPrecioAsociado['url_pdf']; ?>">
					<?php echo $DataPdfPrecioAsociado['namePDF']; ?></a>
				</li>
			</div>

			<br>
			<hr>
			<div class="widget_list column-3">
				<li><a target="_blank" href="pdfPoliticaPrivacidad/Politicas_y_privacidad_Holiday_Palace.pdf">Politica de privacidad - Términos y condiciones</a>
				</li>
			</div>			
		</div>

		<div class="col-md-4 col-lg-4">
		<h6 class="footer__title text-center">REGISTRE AQUI  SUS DATOS</h6>
		<hr>
			<form name="formulario" id="formulario" method="post" action="recibMsjAsociado.php" autocomplete="off">
			<div class="form-group">
		    	<label for="inputAddress2">Nombre Y Apellido</label>
		    	<input type="text" name="name_apellido" class="form-control"  placeholder="Nombre y Apellido" required="true">
		  	</div>
		  	<div class="form-group">
		    	<label for="inputAddress2">Teléfono</label>
		    	<input type="number" name="phone" class="form-control"  placeholder="Teléfono" required="true">
		  	</div>
			<div class="form-group">
			   <label for="inputAddress2">Email</label>
			   <input type="email" name="email" class="form-control" placeholder="Email" required="true">
			</div>
		  	<div class="form-group mb-5">
		    	<label for="inputAddress2">Mensaje</label>
		    	<textarea class="form-control" name="msj" rows="3" required="true"> </textarea>
		  	</div>

		  <div class="text-center">
              <input type="submit" class="btnEnviar" id="btnEnviar" name="btnEnviar" value="Enviar Mensaje" >
           </div>
		</form>

		<div id="respuestaMsj" style="display: none; background: green; padding: 10px 5px; text-align: center;"> </div>

		</div>
		
	</div>
	<br>
</div>