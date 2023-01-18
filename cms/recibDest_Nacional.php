<?php
include('config.php');
$foto           = $_FILES['foto']['name'];
$fotoTmp        = $_FILES['foto']['tmp_name'];
$pais           = "Colombia";
$tipo_destino   = "Nacional";
$city           = $_REQUEST['city'];
$precio         = $_REQUEST['precio'];


date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$nuewNameFoto   = date('h_i_s_a', time());

$explode        = explode('.', $foto);
$extension_arch = array_pop($explode);
$namelogoevento = $nuewNameFoto.'.'.$extension_arch;



$rutaBannerBD   = "FotosDestinos/Nacionales/".$namelogoevento;
$dir            = opendir('FotosDestinos/Nacionales/');


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

header("Location:destino_nacional.php?dn=dn");
?>