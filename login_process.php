<?php
session_start();
include("db.php"); #??

$email = $_POST['email'];
$password = $_POST['password'];

// Buscar usuario por email
$sql = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result) > 0) {
    $usuario = mysqli_fetch_assoc($result);
    // Verificamos el hash
    if (password_verify($password, $usuario['password_hash'])) {
        // Guardamos el nombre en la sesión 
        $_SESSION['nombre'] = $usuario['nombre'];
        header("Location: index.php"); #salida a la home
        exit;
    } else {
        echo "Email o contraseña incorrectos.";
    }
} else {
    echo "Email o contraseña incorrectos.";
}

mysqli_close($conexion);
?>
