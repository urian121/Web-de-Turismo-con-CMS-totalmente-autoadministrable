<?php
sleep(1);
require("cms/config.php");
$name_apellido   	= $_REQUEST['name_apellido'];
$phone              = $_REQUEST['phone'];
$email              = $_REQUEST['email'];
$msj                = $_REQUEST['msj'];

date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$fechaRegister = date(" d-m-Y h:i A");


$queryInsert = "INSERT INTO asociados(
    name_apellido,
    phone,
    email,
    msj,
    fechaRegister
    )
VALUES (
    '" .$name_apellido. "',
    '" .$phone. "',
    '" .$email. "',
    '" .$msj. "',
    '" .$fechaRegister. "'
)";
$result = mysqli_query($con, $queryInsert);

if($result >0){


$paraCliente    = "urian1213viera@gmail.com";
//reservas@holidaytys.com
$tituloCliente  = "Holiday Palaces S.A.S";
$mensajeCliente = "<html>".
        "<head><title>Email desde Holiday Palaces S.A.S</title>".
        "<style>* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
        body {
            font-family: 'Nunito', sans-serif;
            color: #333;
            font-size: 14px;
            
        }
        .contenedor{
            width: 90%;
            min-height:auto;
            text-align: center;
            margin: 0 auto;
            padding: 0px 5px 5px 5px;
            background: #ececec;
            border-top: 4px solid #E64A19;
        }
        .naranja{
            color:#ff663b;
          }
        </style>
        </head>".
            "<body>" .
                "<div class='contenedor'>".
                    "<p>&nbsp;</p>" .
                    "<span><strong class='naranja'>Holiday Palaces S.A.S </strong> el Cliente <strong class='hola'>" .$name_apellido. ", </strong> Correo: <strong class='hola'>" .$email. ", </strong> </span>" .
                    "<p>&nbsp;</p>" .
                    "<span>Telefono: <strong class='hola'>" .$phone. ", </strong> te ha enviado el siguiente mensaje; </span>" .
                    "<p>&nbsp;</p>" .
                    "<p>&nbsp;</p>" .
                    "<span>" .$msj. " </span>" .
                    "<p>&nbsp;</p>" .
                    "<p>&nbsp;</p>" .
            "</div>" .
            "</body>" .
        "</html>";
        
        $cabecerasCliente  = 'MIME-Version: 1.0' . "\r\n";
        $cabecerasCliente .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $cabecerasCliente .= 'From: holidaytys.com<reservas@holidaytys.com>';
        $enviadoCliente   = mail($paraCliente, $tituloCliente, $mensajeCliente, $cabecerasCliente);

echo "Registro exitoso, muy pronto nos comunicaremos.";

}

?>

