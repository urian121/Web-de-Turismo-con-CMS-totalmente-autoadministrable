<?php
include('config.php');
$idRegistro     = $_REQUEST['idRegistro'];
$pais           = $_REQUEST['pais'];
$city           = $_REQUEST['city'];
$precio         = $_REQUEST['precio'];


if(!empty($_FILES['foto']['name'])){
$foto           = $_FILES['foto']['name'];
$fotoTmp        = $_FILES['foto']['tmp_name'];

date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$nuewNameFoto   = date('h_i_s_a', time());


$explode        = explode('.', $foto);
$extension_arch = array_pop($explode);
$namelogoevento = $nuewNameFoto.'.'.$extension_arch;

$rutaBannerBD   = "FotosDestinos/Internacionales/".$namelogoevento;
$dir            = opendir('FotosDestinos/Internacionales/');

if(move_uploaded_file($fotoTmp, $rutaBannerBD)){
    $Updatelogo = ("UPDATE destinos SET pais='$pais', city='$city', precio='$precio', foto='$rutaBannerBD'  WHERE id='".$idRegistro."' ");
    $resultado = mysqli_query($con, $Updatelogo);
    }
closedir($dir);

}else{
$UpdateDestino    = ("UPDATE destinos SET pais='$pais', city='$city', precio='$precio'  WHERE id='".$idRegistro."' ");
$resultadoDestino = mysqli_query($con, $UpdateDestino);
}

header("Location:destino_internacional.php?dia=dia");

?>