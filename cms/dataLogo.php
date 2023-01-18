<?php
include('config.php');
$miLogo         = $_FILES['logo']['name'];
$fotoTmp        = $_FILES['logo']['tmp_name'];
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$nuewName       = date('h_i_s_a', time()); 


$explode        = explode('.', $miLogo);
$extension_arch = array_pop($explode);
$namelogoevento = $nuewName.'.'.$extension_arch;


$rutaLogo       = "logoWeb/".$namelogoevento;

if (!file_exists('logoWeb')) {
    mkdir('logoWeb', 0777, true);
}
$dir = opendir('logoWeb');


if(move_uploaded_file($fotoTmp, $rutaLogo)){
    $Updatelogo = ("UPDATE logo SET logo='$rutaLogo' WHERE id='1' ");
    $resultado = mysqli_query($con, $Updatelogo);
}
closedir($dir);

?>