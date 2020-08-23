<?php
    $destino= rossetteismael@gmail.com;
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo" . $correo . "Mensaje" . $mensaje;
    mail($destino, "Gaceta" ,$contenido);
    header("location:tanks.html")
?>