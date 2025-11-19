<?php
include("../conexion.php");
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: ../from_login.php");
    exit;
}
?>  
<style>
@import url('https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap');
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fotos.css">
    <title>CONSTRUCTIVISMO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="icon" href="../imagenes/icono.png">     
</head>
<body class="fondo">
    <main>
        <div> 
             <h1 class="texto1">CONSTRUCTIVISMO</h1>
     <nav>
        <ul class="navbar">
          <li><a class="menubar texto3" href="index.php">INICIO</a></li>
          <li><a class="menubar texto3" href="Programacion/php/artistas.php">ARTISTAS</a></li>
          <li><a class="menubar texto3" href="Programacion/php/obras.php">OBRAS</a></li>
          <li><a class="menubar texto3" href="Programacion/php/historia.php">HISTORIA</a></li>
          <li><a class="menubar texto3" href="Programacion/php/galeria.php">GALERIA</a></li>
          <li><a class="menubar texto3" href="Programacion/php/contacto.php">CONTACTO</a></li>
          <li><a class="menubar texto3" href="Programacion/salir.php">CERRAR SESIÓN</a></li>
        </ul>
    </nav> 
      </div>  

     <div class="galeria">
    <img src="../imagenes/14.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/2.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/3.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/4.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/5.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/6.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/9.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/11.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/17.jpeg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/18.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/12.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/40ae4583b899966ad1cc50e8bbb70853.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/a0dd7477f48643b79bb4020f76499a8a.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/index2.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/index3.jpg" class="img-fluid" alt="imagenes">
    <img src="../imagenes/index5.jpg" class="img-fluid" alt="imagenes">
  </div>

<div class="footer-basic">
        <footer>
          <div >
            <img src="../imagenes/forma-abstracta.png" class="img-fluid2" alt="icon" >
            <img src="../imagenes/logos-wta-up-top-ch.png" class="img-fluid3" alt="icon" >
          </div>
            <p class="Nombre">JUANA ARRIETA © 2025</p>
          
           
        </footer>
    </div>   

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>