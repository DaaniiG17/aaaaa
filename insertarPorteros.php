<?php
// Incluir el archivo de conexión a la base de datos
include 'phps/database.php';

// Consulta SQL para seleccionar los porteros
$sql = "SELECT * FROM alaves WHERE posicion = 'Portero'";

// Ejecutar la consulta
$resultado = $conn->query($sql);

// Verificar si se encontraron porteros
if ($resultado && $resultado->rowCount() > 0) {
    // Mostrar los porteros encontrados
    echo '<div class="container marketing">';
    echo '<h1 class="mt-5">PORTEROS</h1>';
    echo '<hr class="mb-5">';
    echo '<div class="row text-center">';
    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-lg-4 mb-5">';
        echo '<img class="rounded-circle" width="140" height="140" src="' . $fila['imagen'] . '">';
        echo '<h2>' . $fila['nombre'] . '</h2>';
        echo '<h5>' . $fila['posicion'] . '</h5>';
        echo '<button class="btn btn-secondary bg-primary eliminarPorteros">Eliminar jugador</button>';
        echo '</div><!-- /.col-lg-4 -->';
    }
    echo '</div><!-- /.row -->';
    echo '</div>';
} else {
    echo "No se encontraron porteros en el equipo.";
}
?>
