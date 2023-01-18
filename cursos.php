<?php
	$sqlCursos   = ("SELECT * FROM cursos ");
	$queryCursos = mysqli_query($con, $sqlCursos);
?>

<section class="awe-section">
	<div class="container">
		
		<div class="title title__style-02">
			<h2 class="title__title text-center">Nuestros Cursos</h2>
			<hr>
		</div>
		
		<div class="grid-css grid_css_style_02 grid-css--masonry" data-col-lg="2" data-col-md="2" data-col-sm="1" data-col-xs="1" data-gap="30">
			
			<div class="grid__inner">
				<div class="grid-sizer"></div>
				
		<?php
    		while ($dataCurso = mysqli_fetch_array($queryCursos)) { ?>
				<div class="grid-item">
					<div class="grid-item__inner">
						<div class="grid-item__content-wrapper">
							<div class="box-image3">
								<div class="box-image3__box">
									<section class="box-image3__bg" style="background-image: url('<?php echo 'cms/'.$dataCurso['imgCurso']; ?>');">
									</section>
								</div>

								<div class="box-image3__info_right">
									<h4 class="box-image3__tour"><?php echo $dataCurso['title']; ?></h4>
									<p class="box-image3__text">
										<?php echo $dataCurso['description']; ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

			</div>
		</div>
	</div>
</section>