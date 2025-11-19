<?php

$conexion = mysqli_connect("sql100.infinityfree.com", "if0_39849574", "nD5DbQBzRVW5", "if0_39849574_prueba02");

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// No cerrar la conexión aquí, se cerrará al final del script PHP
?>
