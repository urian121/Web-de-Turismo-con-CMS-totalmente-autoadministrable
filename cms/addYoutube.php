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

      <div class="main-panel">
        <div class="content-wrapper">
          <?php include('msj.php'); ?>

          <?php 
          $sqlVideo   = ("SELECT * FROM videos");
          $queryVideo = mysqli_query($con, $sqlVideo);

          ?>

        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
              <form action="reciVideoYoutube.php" method="post">
                <input type="hidden" name="cliente_id" id="cliente_id" value="<?php echo $idUser; ?>">
                <div class="row mt-5" style="background-color: #fff5fc; border: 1px dashed #888;">
                  <div class="col-12 col-md-12">
                    <h4 class="text-center mt-4 mb-5">AGREGAR VIDEO EN MI WEB</h4>
                  </div> 

                  <div class="col-9 col-md-9">
                    <div class="form-group">
                      <label for="urlVideo">Pegar url de Youtube</label>
                      <input type="text" name="urlVideo" placeholder="Pegar url de Youtube aqui ..!" class="form-control" require="true"/>
                    </div>
                  </div>

                <div class="col-3 col-md-3">
                  <div class="form-group">
                  <label for="seccion">Sección donde aparecerá el Video</label>
                  <select name="seccion" class="form-control">
                    <option value="Experiencias">Experiencias</option>
                    <option value="Pagina Principal">Página Principal</option>
                  </select>
                </div>
              </div>
                  

                  <div class="col-md-12 text-center mb-2">
                    <button type="submit" class="btn btn-success mr-2">Registrar Video</button>
                  </div>

                  </div>
                </form>


              <h2 class="text-center mt-5 mb-3">Videos de mi Web</h2>
              <hr>
                <div class="table-responsive">
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>Video</th>
                        <th>Sección donde se mostrara el Video</th>
                         <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      while ($dataVideo = mysqli_fetch_array($queryVideo)) { ?>
                      <tr>
                        <td>
                          <iframe width="253" height="200" src="<?php echo $dataVideo['urlVideo']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </td>
                        <td><?php echo $dataVideo['seccion'];  ?></td>
                        <td>
                          <a href="deleteVideoYoutube.php?idVideo=<?php echo $dataVideo['id']; ?>" class="btn btn-danger" onclick="return confirm('Estás seguro que deseas eliminar el Video?');">Borrar video</a>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>                               

            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>
</div>


<?php include('js.html'); ?>
<script src="js/edit_menu.js"></script>

</body>
</html>

<?php 
} else { ?>
<script type="text/javascript">
    location.href="cerrar.php";
</script>
<?php }   
?>
