<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Sesión</title></head>
<body>
    <h2>Hola, <?php echo $_SESSION['nombre']; ?>!</h2>
    <a href="salir.php">Cerrar sesión</a>
    <a href="otra_pagina.php">ir a otra pagina</a>
</body>
</html>
