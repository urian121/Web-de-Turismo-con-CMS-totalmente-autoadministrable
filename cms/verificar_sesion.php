<?php
error_reporting(0);
session_start();
include('config.php');
if (isset($_SESSION['email']) != "") {
    header("Location: home.php");
}


$correo 		= $_REQUEST['email'];
$clave  		= $_REQUEST['password'];
//$cucc  		    = isset($_POST['cucc']) ? $_POST['cucc'] : $_GET['cucc']; //cuenta de Usuario creada Correctamente.

$sqlVerificando = ("SELECT * FROM users WHERE email='".$correo."' AND password='".$clave."' ");
$QueryResul     = mysqli_query($con,$sqlVerificando);
$cantidadUser   = mysqli_num_rows($QueryResul);
if ($cantidadUser >0) {
$row = mysqli_fetch_assoc($QueryResul);
	 $_SESSION['fullName']	= $row['fullName'];
	 $_SESSION['email'] 	= $row['email'];
	 $_SESSION['id']		= $row['id'];
	 $_SESSION['rol']		= $row['rol'];
	
	//Msj sc: sesion iniciada correctamente
	echo '<meta http-equiv="refresh" content="0;url=home.php?sc=sc">';
}else{
	//dui: datos del usuario incorrectos
	echo '<meta http-equiv="refresh" content="0;url=index.php?dui=dui">';
}
?>