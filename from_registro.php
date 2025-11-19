<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/registro.css">
    <title>Registro de Usuario</title>
</head>
<body class="fondo">
    <h2>Formulario de Registro</h2>
    <form action="registro.php" method="POST">  
        <label class="box">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label class="box">Correo:</label>
        <input type="email" name="correo" required><br><br>

        <label class="box">Contraseña:</label>
        <input type="password" name="contrasena" required><br><br>

        <button type="submit" class="texto">Registrarse</button>
    </form>

    <p class="texto">¿Ya tienes cuenta? <a href="form_login.php">Inicia sesión</a></p>
</body>

<div class="footer-basic">
        <footer>
          <div >
            <img src="../imagenes/forma-abstracta.png" class="img-fluid2" alt="icon" >
            <img src="../imagenes/logos-wta-up-top-ch.png" class="img-fluid3" alt="icon" >
          </div>
            <p class="Nombre">JUANA ARRIETA © 2025</p>
          
           
        </footer>
    </div>
</html>
