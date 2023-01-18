<?php
require_once('config.php');
$id    			= $_REQUEST['id'];


$sqlDeleteCurso = ("DELETE FROM cursos WHERE  id='".$id."' ");
$resultCurso    = mysqli_query($con, $sqlDeleteCurso);

header("Location:cursos.php?cbe=cbe");

?>
  