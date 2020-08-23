<?php
    $destino= rossetteismael@gmail.com;
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $contenido = "GACETIS" . "Nombre: " . $nombre . "\nCorreo" . $correo . "Mensaje" . $mensaje;
    mail($destino, "Gaceta" ,$contenido);
    header("location:tanks.html");
?>
