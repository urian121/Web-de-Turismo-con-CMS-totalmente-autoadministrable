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


  $sqlPdf   = ("SELECT * FROM pdfs");
  $queryPdf = mysqli_query($con, $sqlPdf);

?>

        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">LISTA DE PDF</h4>
                  

        <div class="row text-center mt-5">
          <?php
          while ($dataPdf = mysqli_fetch_array($queryPdf)) { ?>
            <div class="col-12 col-md-4">
              <div class="form-group" id="marcoborder">
                <h5 class="text-center" id="titleLogo"><?php echo $dataPdf['namePDF']; ?></h5>
                <embed src="<?php echo $dataPdf['url_pdf']; ?>" type="application/pdf" style="width: 95% !important;" height="400px"/>

                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificarpdf<?php echo $dataPdf['id']; ?>">
                    <i class="mdi mdi-file-pdf menu-icon"></i>
                      Cambiar PDF  
                    </button>
              </div>
            </div>


          <!-- modal para cambiar pdf -->
          <div class="modal fade" id="modificarpdf<?php echo $dataPdf['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color: #0190e0  !important;">
                      <h6 class="modal-title" style="color: #fff; text-align: center;">
                          Modificar PDF
                      </h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>


                    <form method="POST" action="update_pdf.php" enctype="multipart/form-data">
                      <input type="hidden" name="idPdf" value="<?php echo $dataPdf['id']; ?>">
                          <div class="modal-body" id="cont_modal">
                              <div class="form-group">
                                <label for="foto" style="float:left;">Cambiar PDF</label>
                                <br><br>
                                <input type="file" name="url_pdf" id="url_pdf" accept="application/pdf">
                              </div>
                           
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar nuevo PDF</button>
                          </div>
                     </form>

                  </div>
                </div>
              </div>


        <?php } ?>


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
