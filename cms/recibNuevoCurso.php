<?php
include('config.php');
$foto           = $_FILES['imgCurso']['name'];
$fotoTmp        = $_FILES['imgCurso']['tmp_name'];
$title          = $_REQUEST['title'];
$description    = $_REQUEST['description'];


date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$nuewNameFoto   = date('h_i_s_a', time());

$explode        = explode('.', $foto);
$extension_arch = array_pop($explode);
$namelogoevento = $nuewNameFoto.'.'.$extension_arch;



$rutaBannerBD   = "FotosCursos/".$namelogoevento;
$dir            = opendir('FotosCursos/');


if(move_uploaded_file($fotoTmp, $rutaBannerBD)){
    $query = "INSERT INTO cursos(
    title,
    description,
    imgCurso
    )
VALUES (
    '" .$title. "',
    '" .$description. "',
    '" .$rutaBannerBD. "'
)";
$result = mysqli_query($con, $query);
}
closedir($dir);

header("Location:cursos.php?cr=cr");
?>