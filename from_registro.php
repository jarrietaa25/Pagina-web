<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="registro.php" method="POST">  #A DONDE VAN LOS DADOS  Y COMO VAN A SER GUARDADOS 
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Correo:</label>
        <input type="email" name="correo" required><br><br>

        <label>Contraseña:</label>
        <input type="password" name="contrasena" required><br><br>

        <button type="submit">Registrarse</button>
    </form>

    <p>¿Ya tienes cuenta? <a href="form_login.php">Inicia sesión</a></p>
</body>
</html>
