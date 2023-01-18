<?php
require_once('config.php');

$id    			= $_REQUEST['id'];
$tipoDestino	= $_REQUEST['tipoDestino'];

if ($tipoDestino =='Nacional') {

	$sqlDeleteDestNacional = ("DELETE FROM destinos WHERE  id='".$id."' ");
	$resultDestNacional    = mysqli_query($con, $sqlDeleteDestNacional);

	header("Location:destino_nacional.php?dnb=dnb");
	exit();
}else{

	$sqlDeleteInternacional = ("DELETE FROM destinos WHERE  id='".$id."'");
	$resultInternacional    = mysqli_query($con, $sqlDeleteInternacional);

	header("Location:destino_internacional.php?dib=dib");
	exit();
}


?>
  