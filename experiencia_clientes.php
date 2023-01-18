
<div class="container">
    
  <div class="row">
    <div class="col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
      <div class="title">
        <div class="title title__style-02">
          <h2 class="title__title text-center">EXPERIENCIAS</h2>
        </div>
         <hr>
      </div>
    </div>
    <?php
    $sqlExperiencia   = ("SELECT * FROM experiencias");
    $queryExperiencia = mysqli_query($con, $sqlExperiencia);
    ?>

    <section class="contFlebox">
      <?php 
      while ($dataExperiencia = mysqli_fetch_array($queryExperiencia)) { ?>
      <div class="col-sm-4 col-md-2">
        <img src="<?php echo $dataExperiencia['fotoCliente']  ;?>" id="imgPerfilExperiencias">
      </div>

    <?php } ?>
    </section>

</div>
<br>

<?php
if($totalVideoExperiencia >0){ ?>

<div class="row">
  <div class="col-md-12">
  <div class="video-responsive">
    <iframe src="<?php echo $DataVideoExp['urlVideo']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>
</div>
</div>
<?php } ?>


</div>
