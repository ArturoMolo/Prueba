<?php
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $mensaje = $_GET["mensaje"];

    
    $para = "arthur_n09@hotmail.com";
    $asunto = "Nuevo mensaje de la web";
    
    $mensaje="
             De: ".$nombre."
             Mensaje: ".$mensaje."
             Email: ".$email."
             ";

    mail($para, $asunto, utf8_decode($mensaje), $header);
    header("location:index.html");
?>
   