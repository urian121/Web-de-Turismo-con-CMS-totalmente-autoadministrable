<?php
include('config.php');
$miBanner       = $_FILES['bannerTwo']['name'];
$fotoTmp        = $_FILES['bannerTwo']['tmp_name'];

date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$nuewName       = date('h_i_s_a', time());

$explode        = explode('.', $miBanner);
$extension_arch = array_pop($explode);
$namelogoevento = $nuewName.'.'.$extension_arch;



$rutaBannerBD       = "bannerWeb/".$namelogoevento;
if (!file_exists('bannerWeb')) {
    mkdir('bannerWeb', 0777, true);
}
$dir = opendir('bannerWeb');


if(move_uploaded_file($fotoTmp, $rutaBannerBD)){
    $Updatelogo = ("UPDATE banner SET bannerTwo='$rutaBannerBD' WHERE id='1' ");
    $resultado = mysqli_query($con, $Updatelogo);
    print_r($Updatelogo);
}
closedir($dir);

?>