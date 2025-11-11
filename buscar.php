<?php

if (isset($_GET['palabra'] ) && $_GET['palabra'] !== '') {
    $busqueda = $_GET['palabra'];

    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "tienda");

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Consulta SQL con LIKE para buscar coincidencias
    $sql = "SELECT * FROM artistas WHERE nombre LIKE '%$busqueda%'";
    $resultado = mysqli_query($conexion, $sql);

    echo "<h2>Resultados de búsqueda para: '$busqueda'</h2>";

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<p><strong>" . $fila['nombre'] . "</strong> - $" . $fila['anos'] . " (" . $fila['categoria'] . ") (" . $fila['imagen'] . ") </p>";
        }
    } else {
        echo "<p>No se encontraron resultados.</p>";
    }

    // Cerrar conexión
    mysqli_free_result($resultado);
    mysqli_close($conexion);
} else {
    echo "No se ingresó ninguna palabra de búsqueda.";
}
?>