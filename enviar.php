<?php
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    
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
   