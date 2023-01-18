<?php
include('config.php');
$idPdf         = $_REQUEST['idPdf'];
$miPdf         = $_FILES['url_pdf']['name'];
$fotoTmp       = $_FILES['url_pdf']['tmp_name'];
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$nuewName       = date('h_i_s_a', time()); 


$explode        = explode('.', $miPdf);
$extension_arch = array_pop($explode);
$namelogoevento = $nuewName.'.'.$extension_arch;


$rutaPdf       = "ServiciosPdf/".$namelogoevento;
$dir = opendir('ServiciosPdf');

if(move_uploaded_file($fotoTmp, $rutaPdf)){
    $Updatelogo = ("UPDATE pdfs SET url_pdf='$rutaPdf' WHERE id='$idPdf' ");
    $resultado = mysqli_query($con, $Updatelogo);
}
closedir($dir);


header("Location:pdfs.php?pdfa=pdfa");
?>