<?php

$destino = "a.ottaviani@hotmail.com";
$nombre = $_POST["nombre"];
$Cerveceria = $_POST["Cerveceria"];
$Telefono = $_POST["Telefono"];
$Mail = $_POST["Mail"];
$Mensaje = $_POST["Mensaje"];

$contenido = "nombre: " . $nombre . "\nCerveceria:" . $Cerveceria . "\nTeléfono:" . $Telefono . "\nMensaje:" . $Mensaje;

mail($destino, "Contacto Vía Web", $contenido);
header("location:Index.html");

?>