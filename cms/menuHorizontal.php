
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="navbar-brand-wrapper d-flex justify-content-center">
    <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
      <a class="navbar-brand brand-logo" href="home.php" style="color: #fff; font-weight: 700;">
        Holiday Palace
      </a>
      
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-sort-variant"></span>
      </button>
    </div>  
  </div>


  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
   
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="../assets/img/logo.jpg" alt="profile"/>
          <span class="nav-profile-name"><?php echo $email; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a href="misDatos.php" class="dropdown-item">
            <i class="mdi mdi-settings text-primary"></i>
            Perfil
          </a>
          <a href="cerrar.php" class="dropdown-item">
            <i class="mdi mdi-logout text-primary"></i>
            Salir
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>