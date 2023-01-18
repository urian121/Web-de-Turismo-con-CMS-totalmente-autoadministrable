<?php
require("config.php");
$urlVideo   		= $_POST['urlVideo'];


$cantidad_url_video = strlen($urlVideo);
if ($cantidad_url_video == '28') {
    $cortar_url = str_replace ('https://youtu.be/','',$urlVideo);
    $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 
    
}elseif ($cantidad_url_video == '41') {
    $cortar_url = str_replace ('https://m.youtube.com/watch?v=','',$urlVideo);
    $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 
   
}elseif ($cantidad_url_video == '43') {
    $cortar_url = str_replace ('https://www.youtube.com/watch?v=','',$urlVideo);
    $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '58') {
    $cortar_url = str_replace ('https://m.youtube.com/watch?v=','',$urlVideo);
    $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 
	
}elseif ($cantidad_url_video == '60') {
    $cortar_url = str_replace ('https://www.youtube.com/watch?v=','',$urlVideo);
    $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 
	
}else{
    echo "URL INVALIDA";
}


$seccion = $_REQUEST['seccion'];
$queryInsert = "INSERT INTO videos(
    urlVideo,
    seccion
    )
VALUES (
    '" .$url_final_video. "',
    '" .$seccion. "'
)";
$result = mysqli_query($con, $queryInsert);


header("Location:addYoutube.php?vy=vy");

?>