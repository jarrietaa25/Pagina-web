<?php
include("conexion.php");

$nombre = $_POST['nombre']; #_POST ES UN ARRAY ASOCIATIVO QUE CONTIENE LOS DATOS ENVIADOS DESDE EL FORMULARIO
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

// Verificar si el correo ya existe
$consulta = "SELECT * FROM usuarios WHERE correo='$correo'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    echo "❌ Este correo ya está registrado. <a href='form_login.php'>Inicia sesión</a>;" 
} else {
    $insertar = "INSERT INTO usuarios (nombre, correo, contrasena)
                 VALUES ('$nombre', '$correo', '$contrasena')";
    if (mysqli_query($conexion, $insertar)) {
        echo "✅ Registro exitoso. <a href='form_login.php'>Inicia sesión</a>;"
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}
?>


