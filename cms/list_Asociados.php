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
  $sqlAsociado   = ("SELECT * FROM asociados ORDER BY id");
  $queryAsociado = mysqli_query($con, $sqlAsociado);


  ?>

        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">LISTA DE ASOCIADOS</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre Y Apellido</th>
                          <th>Telefono</th>
                          <th>Email</th>
                          <th>Mensaje</th>
                          <th>Fecha</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $i = 1;
                        while ($dataAsociado = mysqli_fetch_array($queryAsociado)) { ?>
                        <tr>
                          <td><?php echo $i ++; ?></td>
                          <td><?php echo $dataAsociado['name_apellido']; ?></td>
                          <td><?php echo $dataAsociado['phone']; ?></td>
                          <td><?php echo $dataAsociado['email']; ?></td>
                          <td><?php echo $dataAsociado['msj']; ?></td>
                          <td><?php echo $dataAsociado['fechaRegister']; ?></td>
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

</body>
</html>

<?php 
} else { ?>
<script type="text/javascript">
    location.href="cerrar.php";
</script>
<?php }   
?>
