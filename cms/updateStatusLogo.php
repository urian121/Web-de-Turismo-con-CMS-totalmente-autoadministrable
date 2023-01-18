<?php
include('config.php');
$estatus      = $_REQUEST['estatus'];
$idLogo       = ($_REQUEST['idLogo']);


$Update = ("UPDATE logo SET statuslogo='" .$estatus. "' WHERE id='".$idLogo."' ");
$resultado = mysqli_query($con, $Update);

if($estatus ==0){
	echo "<p style='color:crimson; font-weight:600'>Logotipo Inactivo</p>";
}else{
	echo "<p style='color:green; font-weight:600'>Logotipo Activo</p>";
}
?>