<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <title>Iniciar Sesión</title>
</head>
<body class="fondo">>
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="POST">
        <label class="box">Correo:</label>
        <input type="email" name="correo" required><br><br>

        <label class="box">Contraseña:</label>
        <input type="password" name="contrasena" required><br><br>

        <button type="submit" class="box">Ingresar</button>
    </form>

    <p class="texto">¿No tienes cuenta? <a href="from_registro.php">Regístrate</a></p>
    <p class="texto">Volver a la home <a href="index.php">Home</a></p>
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