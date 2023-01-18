<div class="col-md-12 col-lg-12">
<div class="grid-css grid-css--masonry" data-col-lg="4" data-col-md="3" data-col-sm="2" data-col-xs="1" data-gap="30">
<div class="grid__inner destinos">
	<div class="grid-sizer"></div>

	<?php
    while ($destinoNacional = mysqli_fetch_array($queryDestNacional)) { ?>
	<div class="grid-item">
		<div class="grid-item__inner">
			<div class="grid-item__content-wrapper">
			<div class="box-image">
				<div>
					<section class="box-image__bg" style="background-image: url('cms/<?php echo $destinoNacional['foto']; ?>');" data-effect="mfp-zoom-in">
						<div class="box-image__info">
						<p class="box-image2__ciudad"><?php echo $destinoNacional['city']; ?></p>
						<p class="box-image2__country">$<?php echo $destinoNacional['precio']; ?></p>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
</div>
</div>
</div>
</div>


		<br><br>
		<div class="row mt-5 mb-5">
		<div class="col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 ">
			<div class="title">
				<h2 class="title__title">
				 	Destinos Internacionales <br /> 
				 <hr>
				</h2>
			</div>
		</div>
		</div>
	<br>

<div class="col-md-12 col-lg-12 mt-5">
<div class="grid-css grid-css--masonry" data-col-lg="4" data-col-md="3" data-col-sm="2" data-col-xs="1" data-gap="30">
<div class="grid__inner destinos">
	<div class="grid-sizer"></div>

<?php
while ($destinoInternacional = mysqli_fetch_array($queryDestInternacional)) { ?>
<div class="grid-item">
<div class="grid-item__inner">
	<div class="grid-item__content-wrapper">
		<div class="box-image">
			<div>
				<section class="box-image__bg" style="background-image: url('cms/<?php echo $destinoInternacional['foto']; ?>');" data-effect="mfp-zoom-in">
					<div class="box-image__info">
						<h4 class="box-image__country"><?php echo $destinoInternacional['pais']; ?></h4>
						<p class="box-image2__ciudad"><?php echo $destinoInternacional['city']; ?></p>
						<p class="box-image2__country">$ <?php echo $destinoInternacional['precio']; ?></p>
					</div>
					</section>
				</div>
		</div>
	</div>
</div>
</div>
<?php } ?>

</div>
</div>
</div>
