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


    <form id="jugadorForm" class="container mt-5">
        
    </form>


    <div class="container marketing mb-5">

        <!-- ENTRENADOR -->
        <h1 class="mt-5">ESTADIO</h1>
        <hr>
        <div class="row mt-5 d-flex justify-content-center" id="estadio">
            <div class="col-lg-4 text-center">

                <h2 id="nombreEstadio">Estadio de Mendizorroza</h2>
                <button class="btn btn-secondary bg-primary cambiarEstadio mt-3">Cambiar estadio</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <div class="d-flex  justify-content-center mt-5">
            <img src="imgAlaves/estadioAlaves.jpg" id="imagenEstadio" alt="" class="rounded-4" style="width: 100%;">
        </div>
    </div>

    <?php
        include '../../footer.php';
    ?>

    <script>

        document.addEventListener('DOMContentLoaded', function(){

            const formulario = document.getElementById('jugadorForm');
            const botonCambiar = document.querySelector('.cambiarEstadio');

            botonCambiar.addEventListener('click', cambiarEstadio);

            function cambiarEstadio(e){

                event.preventDefault();

                formulario.innerHTML = `
                <div class="mb-3">
            <label class="form-label">Escribe el nombre del estadio</label>
            <input type="text" class="form-control" id="nombreEstadioNuevo" style="width: 250px;" required>
            </div>
            <div class="mb-3">
                <label for="urlJugador" class="form-label">Escribe la url del estadio</label>
                <input type="text" class="form-control" id="urlImagen" style="width: 250px;" required>
            </div>

            <button type="submit" class="btn btn-primary" id="botonCambiar">Cambiar estadio</button>
                `
            
            const botonCambiarEstadio = formulario.querySelector('#botonCambiar');
            const estadio = document.querySelector('#imagenEstadio');
            let nuevoEstadio = document.getElementById('nombreEstadio');
            let URL = document.querySelector('#imagenEstadio');

            botonCambiarEstadio.addEventListener('click', cambiarANuevoEstadio);

            function cambiarANuevoEstadio(e){
                const nombreEstadioNuevo = formulario.querySelector('#nombreEstadioNuevo').value;
                const nuevaURL = formulario.querySelector('#urlImagen').value;
                e.preventDefault();
            nuevoEstadio.innerHTML = `
                ${nombreEstadioNuevo}
            `
            
            URL.src = `
                ${nuevaURL}
            `

            }
            }

        })

    </script>

</body>

</html>