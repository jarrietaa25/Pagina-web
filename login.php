<?php
include("conexion.php");

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$consulta = "SELECT * FROM usuarios WHERE correo='$correo'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) == 1) {
    $usuario = mysqli_fetch_assoc($resultado);

    if (password_verify($contrasena, $usuario['contrasena'])) {
        echo "✔️ Bienvenido, " . $usuario['nombre'] . "!";
    } else {
        echo "❌ Contraseña incorrecta.";
    }
} else {
    echo "❌ No existe una cuenta con ese correo.";
}
?>