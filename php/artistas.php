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

.resultados-busqueda img {
    max-width: 300px;
    max-height: 300px;
    width: auto;
    height: auto;
    object-fit: cover;
    margin-bottom: 10px;
}

.resultados-busqueda > div {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personas.css">
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
          <li><a class="menubar" class="texto3" href="index.php">INICIO</a></li>
          <li><a class="menubar" class="texto3" href="../php/artistas.php">ARTISTAS</a></li>
          <li><a class="menubar" class="texto3" href="../php/obras.php">OBRAS</a></li>
          <li><a class="menubar" class="texto3" href="../php/historia.php">HISTORIA</a></li>
          <li><a class="menubar" class="texto3" href="../php/galeria.php">GALERIA</a></li>
          <li><a class="menubar" class="texto3" href="../php/contacto.php">CONTACTO</a></li>
          <li><a class="menubar" class="texto3" href="../salir.php">CERRAR SESIÓN</a></li>
        </ul>
       </nav>  
        </div>

        <!-- BUSCADOR -->
        <div class="cajabuscar">
            <form method="get" id="buscarform">
                <fieldset>
                    <input type="text" id="s" name="palabra" 
                           value="<?php echo isset($_GET['palabra']) ? htmlspecialchars($_GET['palabra']) : ''; ?>" 
                           placeholder="Buscar" />
                    <input class="button" type="submit" value="" />
                    <i class="search"></i>
                </fieldset>
            </form>
        </div>

<?php

// SI HAY BÚSQUEDA
if (isset($_GET['palabra']) && $_GET['palabra'] !== '') {

    $busqueda = mysqli_real_escape_string($conexion, $_GET['palabra']);

    $sql = "SELECT * FROM artistas WHERE nombre LIKE '%$busqueda%'";
    $resultado = mysqli_query($conexion, $sql);

    echo "<h2>Resultados de búsqueda para: '$busqueda'</h2>";

    if (mysqli_num_rows($resultado) > 0) {
        echo "<div class='resultados-busqueda'>";
        while ($fila = mysqli_fetch_assoc($resultado)) {

            echo "<div>";
            echo "<img src='" . htmlspecialchars($fila['imagen']) . "' alt='" . htmlspecialchars($fila['nombre']) . "'>";
            echo "<p><strong>" . htmlspecialchars($fila['nombre']) . "</strong> - " .
            htmlspecialchars($fila['anos']) . " (" .
            htmlspecialchars($fila['categoria']) . ")</p>";
            echo "</div>";

        }
        echo "</div>";
    } else {
        echo "<p>No se encontraron resultados.</p>";
    }

    mysqli_free_result($resultado);
    

} else {

    // SI NO HAY BUSQUEDA → MOSTRAR TODOS LOS ARTISTAS

    $sql = "SELECT * FROM artistas";
    $resultado = mysqli_query($conexion, $sql);

    echo "<h2>Todos los artistas</h2>";

    if (mysqli_num_rows($resultado) > 0) {
        echo "<div class='resultados-busqueda'>";
        while ($fila = mysqli_fetch_assoc($resultado)) {

            echo "<div>";
            echo "<img src='" . htmlspecialchars($fila['imagen']) . "' alt='" . htmlspecialchars($fila['nombre']) . "'>";
            echo "<p><strong>" . htmlspecialchars($fila['nombre']) . "</strong> - " .
            htmlspecialchars($fila['anos']) . " (" .
            htmlspecialchars($fila['categoria']) . ")</p>";
            echo "</div>";

        }
        echo "</div>";
    } else {
        echo "<p>No hay artistas cargados en la base de datos.</p>";
    }

    mysqli_free_result($resultado);
    
}

?>

        <div class="footer-basic">
            <footer>
                <div>
                    <img src="../imagenes/forma-abstracta.png" class="img-fluid2" alt="icon" >
                    <img src="../imagenes/logos-wta-up-top-ch.png" class="img-fluid3" alt="icon" >
                </div>
                <p class="Nombre">JUANA ARRIETA © 2025</p>
            </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </main>
</body>

</html>
