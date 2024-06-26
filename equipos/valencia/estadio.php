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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark container" aria-label="Third navbar example">
        <div class="container-fluid">
            <img src="../../img/valencia.png" alt="" width="40px">
            <h4 class="text-white ms-2 mt-1">Valencia</h4>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03"
                aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="valencia.html">Plantilla</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="estadio.html">Estadio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="dropdown03"
                            data-bs-toggle="dropdown">Estadisticas</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="partidosJugados.html">Partidos Jugados</a></li>
                            <li><a class="dropdown-item" href="goles.html">Goles</a></li>
                            <li><a class="dropdown-item" href="asistencias.html">Asistencias</a></li>
                            <li><a class="dropdown-item" href="amarillas.html">Tarjetas amarillas</a></li>
                            <li><a class="dropdown-item" href="rojas.html">Tarjetas rojas</a></li>
                            <li><a class="dropdown-item" href="temporadas.html">Temporadas en el club</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <form id="jugadorForm" class="container mt-5">
        
    </form>


    <div class="container marketing mb-5">

        <!-- ENTRENADOR -->
        <h1 class="mt-5">ESTADIO</h1>
        <hr>
        <div class="row mt-5 d-flex justify-content-center" id="estadio">
            <div class="col-lg-4 text-center">

                <h2 id="nombreEstadio">Estadio de Mestalla</h2>
                <button class="btn btn-secondary bg-primary cambiarEstadio mt-3">Cambiar estadio</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <div class="d-flex  justify-content-center mt-5">
            <img src="../../estadios/imgestadios/estadiovalencia.jpg" id="imagenEstadio" alt="" class="rounded-4" style="width: 100%;">
        </div>
    </div>

    <div class="bg-primary">
        <footer class="py-3">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="valencia.html" class="nav-link text-white">Plantilla</a></li>
                <li class="nav-item"><a href="estadio.html" class="nav-link text-white">Estadio</a></li>
                <li class="nav-item"><a href="partidosJugados.html" class="nav-link text-white">Partidos jugados</a></li>
                <li class="nav-item"><a href="goles.html" class="nav-link text-white">Goles</a></li>
                <li class="nav-item"><a href="asistencias.html" class="nav-link text-white">Asistencias</a></li>
                <li class="nav-item"><a href="amarillas.html" class="nav-link text-white">Tarjetas amarillas</a></li>
                <li class="nav-item"><a href="rojas.html" class="nav-link text-white">Tarjetas rojas</a></li>
                <li class="nav-item"><a href="temporadas.html" class="nav-link text-white">Temporadas en el club</a></li>
            </ul>

            <p class="text-center text-white mt-3">&copy; INFOFUTBOL</p>
        </footer>
    </div>

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