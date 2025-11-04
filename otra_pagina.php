<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Otra página</title></head>
<body>
    <h2>Seguís logueado, <?php echo $_SESSION['nombre']; ?>!</h2>
    <p>Esto demuestra que la sesión sigue activa aunque navegues por otra página.</p>
    <a href="sesion.php">Volver a Sesión</a><br>
    <a href="salir.php">Cerrar sesión</a>
</body>
</html>
