<?php
include('config.php');
$foto           = $_FILES['foto']['name'];
$fotoTmp        = $_FILES['foto']['tmp_name'];
$pais           = $_REQUEST['pais'];
$tipo_destino   = "Internacional";
$city           = $_REQUEST['city'];
$precio         = $_REQUEST['precio'];


date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$nuewNameFoto   = date('h_i_s_a', time());

$explode        = explode('.', $foto);
$extension_arch = array_pop($explode);
$namelogoevento = $nuewNameFoto.'.'.$extension_arch;



$rutaBannerBD   = "FotosDestinos/Internacionales/".$namelogoevento;
$dir            = opendir('FotosDestinos/Internacionales/');


if(move_uploaded_file($fotoTmp, $rutaBannerBD)){
    $query = "INSERT INTO destinos(
    tipo_destino,
    pais,
    city,
    precio,
    foto
    )
VALUES (
    '" .$tipo_destino. "',
    '" .$pais. "',
    '" .$city. "',
    '". $precio."',
    '" .$rutaBannerBD. "'
)";
$result = mysqli_query($con, $query);
}
closedir($dir);

header("Location:destino_internacional.php?di=di");
?>