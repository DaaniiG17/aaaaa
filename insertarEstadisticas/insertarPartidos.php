<?php
// Incluir el archivo de conexión a la base de datos
include 'phps/database.php';

function formatTeamName($teamName) {
    // Añadir un espacio antes de cada letra mayúscula que sigue a una letra minúscula
    $formattedName = preg_replace('/([a-z])([A-Z])/', '$1 $2', $teamName);

    // Convertir todo a mayúsculas
    return strtoupper($formattedName);
}

try {
    // Obtener el equipo seleccionado desde la URL
    $equipo = isset($_GET['id']) ? $_GET['id'] : '';

    if ($equipo) {
        // Consulta para obtener los jugadores del equipo seleccionado
        $sql = "SELECT nombre, posicion, partidosJugados, imagen FROM $equipo";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) > 0) {
            echo '<div class="container">';
            echo '<h1 class="mt-5">' . formatTeamName($equipo) . '</h1>';
            echo '<hr class="mb-5">';
            echo '<div class="row text-center">';
            
            foreach($result as $row) {
                echo '<div class="col-lg-4 mb-5">';
                echo '<img class="rounded-circle" width="140" height="140" src="' . $row["imagen"] . '"></img>';
                echo '<h2>' . $row["nombre"] . '</h2>';
                echo '<h5>' . $row["posicion"] . '</h5>';
                echo '<h5>Partidos jugados: ' . $row["partidosJugados"] . '</h5>';
                echo '</div>';
            }

            echo '</div>';
            echo '</div>';
        } else {
            echo '<h1 class="mt-5">No se encontraron jugadores para el equipo seleccionado.</h1>';
        }
    } else {
        echo '<h1 class="mt-5">No se ha seleccionado ningún equipo.</h1>';
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cierra la conexión
$conn = null;
?>
