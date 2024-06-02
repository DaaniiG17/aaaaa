<?php
include 'phps/database.php';

if(isset($_GET['id'])) {
    $equipo = $_GET['id'];

    $sql = "SELECT * FROM $equipo WHERE posicion = 'Portero'";

    $resultado = $conn->query($sql);

    if ($resultado && $resultado->rowCount() > 0) {
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
            echo '</div>';
        }
        echo '</div><!-- /.row -->';
        echo '</div>';
    } else {
        echo '<div class="container">No se encontraron porteros en el equipo seleccionado.</div>';
    }
} else {
    echo "No se ha seleccionado un equipo.";
}



?>
