<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../estilos/styles2.css">
</head>

<body>
    <?php
        include '../../encabezado.php';

    //AÑADIR JUGADOR 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar los datos del formulario
    $nombreJugador = $_POST['nombreJugador'];
    $posicionJugador = $_POST['posicionJugador'];
    $urlJugador = $_POST['urlJugador'];

    // Aquí puedes realizar cualquier acción con los datos recibidos, como almacenarlos en una base de datos
    // o mostrarlos en otra página.
}
?>

<form id="jugadorForm" class="container mt-5" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="mb-3">
        <label for="nombreJugador" class="form-label">Escribe el nombre del Jugador</label>
        <input type="text" class="form-control" id="nombreJugador" name="nombreJugador" style="width: 250px;" required>
    </div>
    <div class="mb-3">
        <label for="posicionJugador" class="form-label">Escribe la posición del jugador</label>
        <input type="text" class="form-control" id="posicionJugador" name="posicionJugador" style="width: 250px;" required>
    </div>
    <div class="mb-3">
        <label for="urlJugador" class="form-label">Escribe la URL de la imagen del jugador</label>
        <input type="text" class="form-control" id="urlJugador" name="urlJugador" style="width: 250px;" required>
    </div>

    <button type="submit" class="btn btn-primary">Añadir jugador</button>
</form>


    <!-- PLANTILLA -->

    <div class="container marketing">
        <!-- ENTRENADOR -->
        <h1 class="mt-5">ENTRENADOR</h1>
        <hr>
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-lg-4 text-center">
                <img class="rounded-circle" width="140" height="140"
                    src="../../entrenadores/imgEntrenadores/entrenadorAlaves.png">
                </img>
                <h2>Luis Garcia Plaza</h2>
                <h5>Entrenador</h5>
                <button class="btn btn-secondary bg-primary eliminarEntrenador">Eliminar entrenador</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <!-- PORTEROS -->
        <h1 class="mt-5">PORTEROS</h1>
        <hr class="mb-5">
        <div class="row text-center">
            <!-- PHP INSERTION FOR PORTEROS -->
            <?php include '../../insertarPorteros.php'; ?>
        </div><!-- /.row -->
        <!-- DEFENSAS -->
        <h1 class="mt-5">DEFENSAS</h1>
        <hr class="mb-5">
        <div class="row text-center" id="defensa">
            <!-- PHP INSERTION FOR DEFENSAS -->
            <?php include 'insertarDefensas.php'; ?>
        </div><!-- /.row -->
        <!-- MEDIOCENTROS -->
        <h1 class="mt-5">MEDIOCENTROS</h1>
        <hr class="mb-5">
        <div class="row text-center" id="mediocentros">
            <!-- PHP INSERTION FOR MEDIOCENTROS -->
            <?php include 'insertarMediocentros.php'; ?>
        </div><!-- /.row -->
        <!-- DELANTEROS -->
        <h1 class="mt-5">DELANTEROS</h1>
        <hr class="mb-5">
        <div class="row text-center" id="delantero">
            <!-- PHP INSERTION FOR DELANTEROS -->
            <?php include 'insertarDelanteros.php'; ?>
        </div><!-- /.row -->
    </div>

    <?php
        include '../../footer.php';
    ?>
    <script src="../../script.js"></script>

    </body>
    </html>
    