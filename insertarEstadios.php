<?php
// Incluir el archivo de configuración de la base de datos
require_once 'phps/database.php';


// Obtener el ID del equipo desde el parámetro de consulta
$equipoId = isset($_GET['id']) ? $_GET['id'] : '';

// Preparar la consulta SQL para obtener el estadio según el equipo seleccionado
$stmt = $conn->prepare("SELECT Estadio, Url FROM estadios WHERE Equipo = :equipoId");
$stmt->bindParam(':equipoId', $equipoId);
$stmt->execute();

// Obtener los detalles del estadio
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$nombreEstadio = $row['Estadio'] ?? 'Nombre del Estadio';
$urlImagenEstadio = $row['Url'] ?? 'URL de la Imagen del Estadio';

// Imprimir el formulario y el contenedor del estadio con los datos obtenidos de la base de datos
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/styles2.css">
    <link rel="stylesheet" href="phps/assets/css/styles.css">
</head>
<body>
    <div class="container marketing mb-5" id = >
        <div class = "formularioEstadio"></div>
        <h1 class="mt-5">ESTADIO</h1>
        <hr>
        <div class="row mt-5 d-flex justify-content-center" id="estadio">
            <div class="col-lg-4 text-center">
                <h2 id="nombreEstadio">' . htmlspecialchars($nombreEstadio) . '</h2>
                <button class="btn btn-secondary bg-primary cambiarEstadio mt-3">Cambiar estadio</button>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <img src="' . htmlspecialchars($urlImagenEstadio) . '" id="imagenEstadio" alt="Imagen del Estadio" class="rounded-4" style="width: 100%;">
        </div>
    </div>
</body>
</html>
';
?>
