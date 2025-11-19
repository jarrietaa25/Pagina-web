<?php

$conexion = mysqli_connect("sql100.infinityfree.com", " if0_40456842 ", "8me0xQ4CL80dU", "if0_40456842_laboratorio2");

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// No cerrar la conexión aquí, se cerrará al final del script PHP
?>
