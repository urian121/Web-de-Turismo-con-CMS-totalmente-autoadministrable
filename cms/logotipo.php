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


  /*** SQL logo */
  $sqlLogo   = ("SELECT * FROM logo WHERE id='1' LIMIT 1 ");
  $queryLogo = mysqli_query($con, $sqlLogo);
  $DataLogo  = mysqli_fetch_array($queryLogo);

  /**Sql Banner */
  $sqlBanner   = ("SELECT * FROM banner WHERE id='1' LIMIT 1");
  $queryBanner = mysqli_query($con, $sqlBanner);
  $DataBanner  = mysqli_fetch_array($queryBanner);

  ?>

        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                 <div class="row text-center">
                  <div class="col-12 col-md-12 text-center mt-3 mb-3">
                    <h4 class="card-title text-center">Logo de la Empresa</h4>
                  </div>

                  <div class="col-2 col-md-4 text-center">
                  </div>

                    <div class="col-2 col-md-4 text-center">
                      <div class="form-group text-center" id="marcoborder">
                        <h5 class="text-center" id="titleLogo">Logotipo</h5>
                        <img src="<?php echo $DataLogo['logo']; ?>" alt="Logo" id="imgLogo">

                      <form id="Miform" method="post" enctype="multipart/form-data">
                          <label class="btn btn-info custom-file-upload" id="subirLogo">
                            <i class="zmdi zmdi-plus-circle"></i> 
                             <span>Actualizar</span>
                            <input type="file" name="logo" id="logo"  accept="image/*" title="Mi Logo"/>
                        </label>
                      </form>
                      </div>
                    </div>
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
