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

  /**Sql Destinos Internacionales */
  $sqlDestInternacionales   = ("SELECT * FROM destinos WHERE tipo_destino='Internacional'");
  $queryDestInternacionales = mysqli_query($con, $sqlDestInternacionales);
  ?>

<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title text-center">Destinos Internacionales</h4>
      <p>
        <a href="#" data-toggle="modal" data-target="#editChildres" class="btn btn-danger" style="float: right;">
        <i class="mdi mdi-map-marker-plus" style='color: black; font-size: 20px;'></i>
        Agregar Destino</a>
      </p>
      <br>

              <div class="row text-center mt-5">
                <?php
                while ($dataDestInternacional = mysqli_fetch_array($queryDestInternacionales)) { ?>
                    <div class="col-12 col-md-4">
                        <div class="form-group" id="marcoborder">
                          <h5 class="text-center" id="titleLogo"><?php echo $dataDestInternacional['city']; ?>
                            <span style='float:right;'><?php echo '$: ' .$dataDestInternacional['precio']; ?></span>
                          </h5>
                          <hr>
                          <img src="<?php echo $dataDestInternacional['foto']; ?>" id="imgLogo">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificar<?php echo $dataDestInternacional['id']; ?>">
                              Modificar  
                            </button>
                            <a href="borrarDestino.php?id=<?php echo $dataDestInternacional['id']; ?>&tipoDestino=Internacional" class="btn btn-danger" onclick="return confirm('Est??s seguro que desea eliminar el Destino Internacional?');">Borrar</a>
                        </div>
                    </div>


            <!--- ventana modal para editar Registro --->
            <div class="modal fade" id="modificar<?php echo $dataDestInternacional['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color: #0190e0  !important;">
                      <h6 class="modal-title" style="color: #fff; text-align: center;">
                          Modificar informaci??n del Destino Internacional
                      </h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>


                    <form method="POST" action="editarDestInternacional.php" enctype="multipart/form-data">
                      <input type="hidden" name="idRegistro" value="<?php echo $dataDestInternacional['id']; ?>">
                          <div class="modal-body" id="cont_modal">
                            <div class="form-group">
                                <label for="recipient-name" style="float:left;">Pais</label>
                                <input type="text" name="pais" class="form-control" value="<?php echo $dataDestInternacional['pais']; ?>">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" style="float:left;">Ciudad</label>
                                <input type="text" name="city" class="form-control" required="true" value="<?php echo $dataDestInternacional['city']; ?>">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" style="float:left;">Precio</label>
                                <input type="text" name="precio" class="form-control" required="true" value="<?php echo $dataDestInternacional['precio']; ?>">
                              </div>
                              <div class="form-group">
                                <label for="foto" style="float:left;">Foto</label>
                                <br>
                                <img src="<?php echo $dataDestInternacional['foto']; ?>" style="width: 100%; width:150px; border-radius: 5px;">
                                <br><br>

                                <label style="float:left;">Cambiar Foto</label>
                                <br>
                                <input type="file" name="foto" accept="image/*">
                              </div>
                           
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar Modificaci??n</button>
                          </div>
                     </form>

                  </div>
                </div>
              </div>
              <!-- fin de editar en ventana modal -->


            <?php } ?>
          </div> 



              <!--ventana Modal Nuevo Destino--->
              <div class="modal fade" id="editChildres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color: #0190e0  !important;">
                      <h6 class="modal-title" style="color: #fff; text-align: center;">
                          Registrar nuevo Destino Internacional
                      </h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>


                    <form method="POST" action="recibDest_internacional.php" enctype="multipart/form-data">
                          <div class="modal-body" id="cont_modal">
                            <div class="form-group">
                                <label for="recipient-name">Pais</label>
                                <input type="text" name="pais" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name">Ciudad</label>
                                <input type="text" name="city" class="form-control" required="true">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name">Precio</label>
                                <input type="text" name="precio" class="form-control" required="true">
                              </div>
                              <div class="form-group">
                                <label for="foto">Foto</label>
                                <br>
                                <input type="file" name="foto" accept="image/*" required="true">
                              </div>
                           
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                          </div>
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
