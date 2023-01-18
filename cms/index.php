<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Holiday Palace :: Login </title>
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="../assets/img/favicon.ico"/>
  <style type="text/css">
  .fondo{
    margin: 0;
    padding: 0;
    background: url('img/login.jpg') no-repeat center top;
    background-size: cover;
    height: 100vh;  
  }
  </style>
</head>

<body class="fondo">

 <?php include('msj.php'); ?> 

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background: transparent !important">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo text-center">
                <img src="../assets/img/logo.jpg" alt="logo" style="border-radius: 50%">
              </div>
              
              <form class="pt-3" action="verificar_sesion.php" method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg"  placeholder="Email" required="true">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg"  placeholder="Clave" required="true">
                </div>
                <div class="mt-3">
                  <input type="submit" value="ENTRAR AHORA" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>


  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/miJs.js"></script>

</body>
</html>
