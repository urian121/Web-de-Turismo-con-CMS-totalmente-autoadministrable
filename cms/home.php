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
  <link rel="stylesheet" type="text/css" href="css/picnic.min.css">
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
          <?php include('msj.php'); ?> 
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                 
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
