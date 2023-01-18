<?php
include('config.php');
$idRegistro     = $_REQUEST['idRegistro'];
$title          = $_REQUEST['title'];
$description    = $_REQUEST['description'];


if(!empty($_FILES['imgCurso']['name'])){
$foto           = $_FILES['imgCurso']['name'];
$fotoTmp        = $_FILES['imgCurso']['tmp_name'];

date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$nuewNameFoto   = date('h_i_s_a', time());


$explode        = explode('.', $foto);
$extension_arch = array_pop($explode);
$namelogoevento = $nuewNameFoto.'.'.$extension_arch;

$rutaBannerBD   = "FotosCursos/".$namelogoevento;
$dir            = opendir('FotosCursos/');

if(move_uploaded_file($fotoTmp, $rutaBannerBD)){
    $UpdateCurso = ("UPDATE cursos SET title='$title', description='$description', imgCurso='$rutaBannerBD'  WHERE id='".$idRegistro."' ");
    $resultadoCurso = mysqli_query($con, $UpdateCurso);
    }
closedir($dir);

}else{
$UpdateCursos    = ("UPDATE cursos SET title='$title', description='$description' WHERE id='".$idRegistro."' ");
$resultadoCurso = mysqli_query($con, $UpdateCursos);
}

header("Location:cursos.php?dia=dia");

?>