<?php
session_start();
include('config.php');
if (isset($_SESSION['email']) != "") {
    $nameUser   = $_SESSION['fullName'];
    $email      = $_SESSION['email'];
    $privilegio = $_SESSION['rol'];
    $idUser     = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Holiday Palace :: Panel</title>
  <?php include('css.html'); ?>
  <style type="text/css" media="screen">
    .sidebar ul li a{
      color: #606060 !important;
      font-weight: 600 !important;
    }
    ul li a:hover{
      color: #333 !important;
    }


input[type="file"] {
    display: none;
}
.custom-file-upload {
    display: inline-block;
    padding: 10px 30px;
    cursor: pointer;
    color: #fff !important;
}
.custom-file-upload  span{
  color: #fff;
  padding: 10px;
}
.zmdi-plus-circle{
  color: #fff;
}
</style>

</head>
<body>
  <?php include('cargando.html'); ?>

  <div class="container-scroller">

     <?php include('menuHorizontal.php'); ?>

    <div class="container-fluid page-body-wrapper">

    <?php include('menuVertical.php'); ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
  <?php include('msj.php'); 


  /**Sql Banner */
  $sqlBanner   = ("SELECT * FROM banner WHERE id='1' LIMIT 1");
  $queryBanner = mysqli_query($con, $sqlBanner);
  $DataBanner  = mysqli_fetch_array($queryBanner);

  ?>

        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">IMÁGENES DE BANNER</h4>
                  
                  <!----- Banner 1 -->
                  <div class="row text-center mt-5">
                    <div class="col-12 col-md-4">
                        <div class="form-group" id="marcoborder">
                          <h5 class="text-center" id="titleLogo">Banner 1</h5>
                          <img src="<?php echo $DataBanner['bannerOne']; ?>" alt="Banner 1" id="imgLogo">

                          <form id="MiformbannerOne" method="post" enctype="multipart/form-data">
                              <label class="btn btn-info custom-file-upload" id="subirBannerOne">
                                <i class="zmdi zmdi-plus-circle"></i> 
                                 <span>Actualizar</span>
                                  <div class="xyz">
                                <input type="file" name="bannerOne" id="bannerOne"  accept="image/*" title="Mi Banner 1"/>
                              </div>
                            </label>
                          </form>
                        </div>
                    </div>
                  <!-- fin banner 1 -->

                  <!---- Banner 2 --->
                     <div class="col-12 col-md-4">
                        <div class="form-group" id="marcoborder">
                          <h5 class="text-center" id="titleLogo">Banner 2</h5>
                          <img src="<?php echo $DataBanner['bannerTwo']; ?>" alt="Banner 2" id="imgLogo">

                          <form id="MiformbannerTwo" method="post" enctype="multipart/form-data">
                              <label class="btn btn-info custom-file-upload" id="subirBannerTwo">
                                <i class="zmdi zmdi-plus-circle"></i> 
                                 <span>Actualizar</span>
                                  <div class="xyz">
                                <input type="file" name="bannerTwo" id="bannerTwo"  accept="image/*" title="Mi Banner 2"/>
                              </div>
                            </label>
                          </form>

                        </div>
                      </div>
                    <!---- Fin banner 2 -->

                     <!---- Banner 3 --->
                     <div class="col-12 col-md-4">
                        <div class="form-group" id="marcoborder">
                          <h5 class="text-center" id="titleLogo">Banner 3</h5>
                          <img src="<?php echo $DataBanner['bannerThree']; ?>" alt="Banner 3" id="imgLogo">
                          <form id="MiformbannerThree" method="post" enctype="multipart/form-data">
                              <label class="btn btn-info custom-file-upload" id="subirBannerThree">
                                <i class="zmdi zmdi-plus-circle"></i> 
                                 <span>Actualizar</span>
                                <input type="file" name="bannerThree" id="bannerThree"  accept="image/*" title="Mi Banner 3"/>
                            </label>
                          </form>
                        </div>
                      </div>
                    <!---- Fin banner 2 -->


              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('js.html'); ?>

</body>
</html>

<?php 
} else { ?>
<script type="text/javascript">
    location.href="cerrar.php";
</script>
<?php }   
?>
