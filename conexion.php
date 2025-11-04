<?php

$conexion = mysqli_connect("nombre hosting", "nombre usuario", "contrasena", "nombre de la base");

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}


mysqli_close($conexion);
?>
