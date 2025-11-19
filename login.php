<?php
session_start();
include("conexion.php");

// Verificar que el formulario haya sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Tomar datos del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $consulta = "SELECT * FROM usuarios WHERE correo='$correo'";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        $usuario = mysqli_fetch_assoc($resultado);

        if (password_verify($contrasena, $usuario['contrasena'])) {

            $_SESSION['nombre'] = $usuario['nombre'];
            header("Location: index.php");
            exit;

        } else {
            echo "❌ Contraseña incorrecta.";
        }

    } else {
        echo "❌ No existe una cuenta con ese correo.";
    }

} else {
    header("Location: from_login.php");
    exit;
}
?>
