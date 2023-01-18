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


  $sqlCursos   = ("SELECT * FROM cursos ");
  $queryCursos = mysqli_query($con, $sqlCursos);
  ?>

<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title text-center">LISTA DE CURSOS</h4>
      <p>
        <a href="#" data-toggle="modal" data-target="#editChildres" class="btn btn-danger" style="float: right;">
        <i class="zmdi zmdi-crop-free" style='color: black; font-size: 20px;'></i>
        Agregar Curso</a>
      </p>
      <br>

              <div class="row text-center mt-5">
                <?php
                while ($dataCurso = mysqli_fetch_array($queryCursos)) { ?>
                    <div class="col-12 col-md-4">
                        <div class="form-group" id="marcoborder">
                          <h5 class="text-center" id="titleLogo">
                          Curso: <?php echo  $dataCurso['title']; ?>
                        </h5>
                          <hr>
                            <p style='float:right;'><?php echo $dataCurso['description']; ?></p>
                        
                          <img src="<?php echo $dataCurso['imgCurso']; ?>" id="imgLogo">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificar<?php echo $dataCurso['id']; ?>">
                              Modificar  
                            </button>
                            <a href="deleteCurso.php?id=<?php echo $dataCurso['id']; ?>" class="btn btn-danger" onclick="return confirm('Estás seguro que desea eliminar el Curso ?');">Borrar</a>
                        </div>
                    </div>


            <!--- ventana modal para editar Registro --->
            <div class="modal fade" id="modificar<?php echo $dataCurso['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color: #0190e0  !important;">
                      <h6 class="modal-title" style="color: #fff; text-align: center;">
                          Modificar información del Curso
                      </h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>


                    <form method="POST" action="recibUpdateCurso.php" enctype="multipart/form-data">
                      <input type="hidden" name="idRegistro" value="<?php echo $dataCurso['id']; ?>">
                          <div class="modal-body" id="cont_modal">
                              <div class="form-group">
                                <label for="recipient-name">Titulo del Curso</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $dataCurso['title']; ?>">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripción del Curso</label>
                                <textarea class="form-control" name="description" rows="8">
                                  <?php echo $dataCurso['description']; ?>
                                </textarea>
                              </div>
                              <div class="form-group">
                                <label for="imgCurso" style="float:left;">Foto</label>
                                <br>
                                <img src="<?php echo $dataCurso['imgCurso']; ?>" style="width: 100%; width:150px; border-radius: 5px;">
                                <br><br>

                                <label style="float:left;">Cambiar Foto</label>
                                <br>
                                <input type="file" name="imgCurso" accept="image/*">
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar Modificación</button>
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
                          Registrar nuevo Curso
                      </h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>


                    <form method="POST" action="recibNuevoCurso.php" enctype="multipart/form-data">
                          <div class="modal-body" id="cont_modal">
                              <div class="form-group">
                                <label for="recipient-name">Titulo del Curso</label>
                                <input type="text" name="title" class="form-control" required="true">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripción del Curso</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="foto">Foto</label>
                                <br>
                                <input type="file" name="imgCurso" accept="image/*" required="true">
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Registrar Curso</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
