<?php
require_once('config.php');

$idVideo    		= $_REQUEST['idVideo']; 

$sqlDeleteProd = ("DELETE FROM videos WHERE  id='" .$idVideo. "'");
$resultProd = mysqli_query($con, $sqlDeleteProd);


/**vbc = video borrado correctamente**/
header("Location:addYoutube.php?vbc=vbc");
exit();

?>
  