<?php
$sqlLogo   = ("SELECT * FROM logo WHERE id='1' ");
$queryLogo = mysqli_query($con, $sqlLogo);
$DataLogo  = mysqli_fetch_array($queryLogo);
?>

<header class="header">
  <ul id="fleboxUl">
    <li style="margin: 0px 50px;">
      <i class="zmdi zmdi-email zmdi-hc-lg" style="color: #333;"></i>
      <strong>reservas@xyz.com</strong>
    </li>
    <li>
     <i class="zmdi zmdi-whatsapp zmdi-hc-lg" style="color: green;"></i>
     <strong>+57 (200 345 04 60) </strong>
   </li>
  </ul>

  <a href="" class="logo">
  	<img src="<?php echo 'cms/'.$DataLogo['logo']; ?>" alt="Logo">
  </a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a href="index.php">INICIO</a></li>
    <li><a id="turismo" href="#">TURISMO</a></li>
    <li><a href="#about">EVENTOS</a></li>
    <li><a href="#about">ESTUDIOS EN EL EXTERIOR</a></li>
  </ul>
</header>