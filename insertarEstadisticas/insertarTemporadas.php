<?php
// Incluir el archivo de conexión a la base de datos
include 'phps/database.php';

try {
    // Obtener el equipo seleccionado desde la URL
    $equipo = isset($_GET['id']) ? $_GET['id'] : '';

    if ($equipo) {
        // Consulta para obtener los jugadores del equipo seleccionado
        $sql = "SELECT nombre, posicion, temporadas, imagen FROM $equipo";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) > 0) {
            echo '<div class="container">';
            echo '<h1 class="mt-5">' . strtoupper($equipo) . '</h1>';
            echo '<hr class="mb-5">';
            echo '<div class="row text-center">';
            
            foreach($result as $row) {
                echo '<div class="col-lg-4 mb-5">';
                echo '<img class="rounded-circle" width="140" height="140" src="' . $row["imagen"] . '"></img>';
                echo '<h2>' . $row["nombre"] . '</h2>';
                echo '<br>';
                echo '<h5>' . $row["posicion"] . '<br> Temporadas: ' . $row["temporadas"] . '</h5>';
                echo '<button class="btn btn-secondary bg-primary cambiarTemporadas">Cambiar temporadas</button>';
                echo '</div><!-- /.col-lg-4 -->';
            }

             echo '</div>';
            echo '</div><!-- /.row -->';
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
