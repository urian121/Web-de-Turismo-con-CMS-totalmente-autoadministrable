<?php
require("config.php");

$idUser = $_REQUEST['idUser'];
$UpdateUser = ("UPDATE users SET
	fullName	='".$_POST['fullName']."',
	email		='".$_POST['email']."',
	password	='".$_POST['password']."'

WHERE id='".$idUser."'");
$ResultadoUpdate = mysqli_query($con, $UpdateUser);

header("Location:misDatos.php?du=du");
?>