<?php
// Incluir el archivo de configuración de la base de datos
require_once 'phps/database.php';

    // Obtener el ID del equipo desde el parámetro de consulta
    $equipoId = isset($_GET['id']) ? $_GET['id'] : '';

    // Preparar la consulta SQL para obtener el estadio según el equipo seleccionado
    $stmt = $conn->prepare("SELECT nombre, url FROM estadios WHERE id = :equipoId");
    $stmt->bindParam(':equipoId', $equipoId);
    $stmt->execute();

    // Obtener los detalles del estadio
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $nombreEstadio = $row['nombre'] ?? 'Nombre del Estadio';
    $urlImagenEstadio = $row['url'] ?? 'URL de la Imagen del Estadio';

    // Imprimir el formulario y el contenedor del estadio con los datos obtenidos de la base de datos
    echo '
    <form id="jugadorForm" class="container mt-5">
        
    </form>

    <div class="container marketing mb-5">
        <!-- ENTRENADOR -->
        <h1 class="mt-5">ESTADIO</h1>
        <hr>
        <div class="row mt-5 d-flex justify-content-center" id="estadio">
            <div class="col-lg-4 text-center">
                <h2 id="nombreEstadio">' . $nombreEstadio . '</h2>
                <button class="btn btn-secondary bg-primary cambiarEstadio mt-3">Cambiar estadio</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <div class="d-flex  justify-content-center mt-5">
            <img src="' . $urlImagenEstadio . '" id="imagenEstadio" alt="" class="rounded-4" style="width: 100%;">
        </div>
    </div>
    ';

?>
