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
            <img src="../../img/alaves.png" alt="" width="40px">
            <h4 class="text-white ms-2 mt-1">Alavés</h4>

            <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="alaves.html">Plantilla</a>
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

    <!-- AÑADIR JUGADOR -->

    <form id="jugadorForm" class="container mt-5">
        <div class="mb-3">
            <label for="nombreJugador" class="form-label">Escribe el nombre del Jugador</label>
            <input type="text" class="form-control" id="nombreJugador" style="width: 250px;" required>
        </div>
        <div class="mb-3">
            <label for="posicionJugador" class="form-label">Escribe la posicion del jugador</label>
            <input type="text" class="form-control" id="posicionJugador" style="width: 250px;" required>
        </div>
        <div class="mb-3">
            <label for="urlJugador" class="form-label">Escribe la url de la imagen del jugador</label>
            <input type="text" class="form-control" id="urlJugador" style="width: 250px;" required>
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
            <?php include 'insertarPorteros.php'; ?>
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

    <div class="bg-primary">
        <footer class="py-3">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="alaves.html" class="nav-link text-white">Plantilla</a></li>
                <li class="nav-item"><a href="estadio.html" class="nav-link text-white">Estadio</a></li>
                <li class="nav-item"><a href
                    ="partidosJugados.html" class="nav-link text-white">Partidos jugados</a></li>
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
            document.addEventListener('DOMContentLoaded', function (e) {
    
                // ELIMINAR ENTRENADORES
    
                const eliminarEntrenadores = document.querySelector('.eliminarEntrenador');
    
                eliminarEntrenadores.addEventListener('click', eliminarEntrenador);
    
                function eliminarEntrenador(e) {
                    e.preventDefault();
                    const contenido = e.target.parentNode;
                    contenido.remove();
                }
    
                // ELIMINAR PORTEROS
    
                const eliminarPorteros = document.querySelectorAll('.eliminarPorteros');
    
                eliminarPorteros.forEach(porteros => {
                    porteros.addEventListener('click', eliminarPortero);
                })
    
                function eliminarPortero(e) {
                    e.preventDefault();
                    const contenido = e.target.parentNode;
                    contenido.remove();
                }
    
                // ELIMINAR DEFENSAS
    
    
                const eliminarDefensas = document.querySelectorAll('.eliminarDefensas')
    
                eliminarDefensas.forEach(defensas => {
                    defensas.addEventListener('click', eliminarDefensa);
                });
    
                function eliminarDefensa(e) {
                    e.preventDefault();
                    const contenido = e.target.parentNode;
                    contenido.remove();
                }
    
    
                // ELIMINAR MEDIOCENTROS
    
                const eliminarMediocentros = document.querySelectorAll('.eliminarMediocentros');
    
                eliminarMediocentros.forEach(mediocentros => {
                    mediocentros.addEventListener('click', eliminarMediocentro);
                })
    
                function eliminarMediocentro(e) {
                    e.preventDefault();
                    const contenido = e.target.parentNode;
                    contenido.remove();
                }
    
    
                // ELIMINAR DELANTEROS
    
    
                const eliminarDelanteros = document.querySelectorAll('.eliminarDelanteros');
    
                eliminarDelanteros.forEach(delanteros => {
                    delanteros.addEventListener('click', eliminarDelantero);
                })
    
                function eliminarDelantero(e) {
                    e.preventDefault();
                    const contenido = e.target.parentNode;
                    contenido.remove();
                }
    
    
                // AÑADIR JUGADORES
    
    
                const formulario = document.querySelector('#jugadorForm');
    
                formulario.addEventListener('submit', añadirJugador);
    
                function añadirJugador(e) {
                    e.preventDefault();
                    const nombreJugador = document.querySelector('#nombreJugador').value;
                    const posicionJugador = document.querySelector('#posicionJugador').value;
                    const imagenJugador = document.querySelector('#urlJugador').value;
    
                    // AÑADIR PORTEROS
    
                    if (posicionJugador.toLowerCase() == "portero") {
                        const divJugador = document.createElement('div');
                        divJugador.classList.add('col-lg-4') //
                        divJugador.innerHTML = `
      <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
          <h2>${nombreJugador}</h2>
          <h5>${posicionJugador}</h5>
          <button class="btn btn-secondary bg-primary eliminarPorteros">Eliminar jugador</button>
      `
    
                        const encontrar = document.querySelector('.row.text-center');
    
                        encontrar.appendChild(divJugador);
    
                        const botonEliminar = divJugador.querySelector('.eliminarPorteros');
    
                        botonEliminar.addEventListener('click', eliminarPortero);
    
                    } else if (posicionJugador.toLowerCase() == "defensa central" || posicionJugador.toLowerCase() == "lateral") {
    
                        // AÑADIR DEFENSA
    
                        const filaDefensa = document.querySelector('#defensa');
                        const nuevoDivDefensa = document.createElement('div');
    
                        nuevoDivDefensa.className = 'col-lg-4 mb-5'
    
                        nuevoDivDefensa.innerHTML = `
                            <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
                            <h2>${nombreJugador}</h2>
                            <h5>${posicionJugador}</h5>
                            <button class="btn btn-secondary bg-primary eliminarDefensas">Eliminar jugador</button>
                            `
    
                        filaDefensa.appendChild(nuevoDivDefensa);
    
                        const botonEliminarDefensa = nuevoDivDefensa.querySelector('.eliminarDefensas');
    
                        botonEliminarDefensa.addEventListener('click', eliminarDefensa);
    
    
                    } else if (posicionJugador.toLowerCase() == "mediocentro" || posicionJugador.toLowerCase() == "mediocentro defensivo" || posicionJugador.toLowerCase() == "extremo (mediocentro)" || posicionJugador.toLowerCase() == "mediocentro ofensivo") {
    
                        let comprobador = 0;
    
                        let posicionMostrada = posicionJugador.toLowerCase();
                        if (posicionMostrada === "extremo (mediocentro)") {
                            posicionMostrada = "extremo";
                            comprobador = 1;
                        }
    
                        const mediocentros = document.querySelector('#mediocentros');
    
                        const divMediocentros = document.createElement('div');
    
                        divMediocentros.className = 'col-lg-4 mb-5';
    
                        if (comprobador == 1) {
                            divMediocentros.innerHTML = `
                        <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
                            <h2>${nombreJugador}</h2>
                            <h5>${posicionMostrada}</h5>
                            <button class="btn btn-secondary bg-primary eliminarMediocentros">Eliminar jugador</button>
     
                        `
                        } else {
                            divMediocentros.innerHTML = `
                            <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
                            <h2>${nombreJugador}</h2>
                            <h5>${posicionJugador}</h5>
                            <button class="btn btn-secondary bg-primary eliminarMediocentros">Eliminar jugador</button>
     
                        `
                        }
    
    
                        mediocentros.appendChild(divMediocentros);
    
                        const botonEliminarMediocentros = divMediocentros.querySelector('.eliminarMediocentros');
    
                        botonEliminarMediocentros.addEventListener('click', eliminarMediocentro);
    
                    } else if (posicionJugador.toLowerCase() == 'delantero centro' || posicionJugador.toLowerCase() == 'extremo (delantero)') {
    
                        const contenido = document.querySelector('#delantero');
    
                        const divDelanteros = document.createElement('div');
    
                        let comprobador = 0;
    
                        let posicionMostrada;
    
                        if (posicionJugador.toLowerCase() == 'extremo (delantero)') {
                            posicionMostrada = 'extremo';
                            comprobador = 1;
                        }
    
                        if (comprobador == 1) {
                            divDelanteros.innerHTML = `
                            <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
                            <h2>${nombreJugador}</h2>
                            <h5>${posicionMostrada}</h5>
                            <button class="btn btn-secondary bg-primary eliminarDelanteros">Eliminar jugador</button>
     
                        `
                        } else {
    
                            divDelanteros.innerHTML = `
                            <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
                            <h2>${nombreJugador}</h2>
                            <h5>${posicionJugador}</h5>
                            <button class="btn btn-secondary bg-primary eliminarDelanteros">Eliminar jugador</button>
     
                        `
                        }
    
    
    
                        divDelanteros.className = 'col-lg-4 mb-5';
    
                        contenido.appendChild(divDelanteros);
    
                        const botonEliminarDelanteros = divDelanteros.querySelector('.eliminarDelanteros')
    
                        botonEliminarDelanteros.addEventListener('click', eliminarDelantero);
    
                    }
                    else {
                        alert('Elige una de estas posiciones: Portero, Defensa Central, Lateral,  Mediocentro, Mediocentro Defensivo , extremo (mediocentro), extremo (delantero) o Delantero Centro');
                    }
    
                }
    
            });
    
    
        </script>
    </body>
    </html>
    