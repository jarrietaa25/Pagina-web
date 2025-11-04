<?php
include("db.php");

$nombre   = $_POST['nombre'];
$email    = $_POST['email'];
$password = $_POST['password'];
// Hasheamos la contraseña antes de guardar
$hash = password_hash($password, PASSWORD_DEFAULT);

// Insertar el nuevo usuario
$sql = "INSERT INTO usuarios (nombre, email, password_hash) VALUES ('$nombre', '$email', '$hash')";

if (mysqli_query($conexion, $sql)) {

    echo "Usuario registrado correctamente. <a href='login.php'>Iniciar sesión</a>";

} else {
    
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
