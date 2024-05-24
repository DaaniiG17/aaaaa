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
            <img src="../../img/osasuna.png" alt="" width="40px">
            <h4 class="text-white ms-2 mt-1">Osasuna</h4>

            <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="osasuna.html">Plantilla</a>
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

    <div id="formulario"></div>


    <!-- PLANTILLA -->

    <div class="container marketing">

        <!-- PORTEROS -->

        <h1 class="mt-5">PORTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/sergioHerrera.png">
                </img>

                <h2>Sergio Herrera</h2>
                <h5>Portero</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/aitorFernandez.png">
                </img>

                <h2>Aitor Fernández</h2>
                <h5>Portero</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- DEFENSAS -->

        <h1 class="mt-5">DEFENSAS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="defensa">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/juanCruz.png">
                </img>

                <h2>Juan Cruz</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/unaiGarcia.png">
                </img>

                <h2>Unai García</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/davidGarcia.png">
                </img>

                <h2>David García</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DEFENSAS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/jesusAreso.png">
                </img>

                <h2>Jesús Areso</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/rubenPeña.png">
                </img>

                <h2>Rubén Peña</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/johanMojica.png">
                </img>

                <h2>Johan Mojica</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/alejandroCatena.png">
                </img>

                <h2>Alejandro Catena</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/jorgeHerrando.png">
                </img>

                <h2>Jorge Herrando</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->




        <h1 class="mt-5">MEDIOCENTROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="mediocentros">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/lucasTorro.png">
                </img>

                <h2>Lucas Torró</h2>
                <h5>Mediocentro defensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/jonMoncayola.png">
                </img>

                <h2>Jon Moncayola</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/aimarOroz.png">
                </img>

                <h2>Aimar Oroz</h2>
                <h5>Mediocentro ofensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->



            <!-- MEDIOCENTROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/rubenGarcia.png">
                </img>

                <h2>Rubén García</h2>
                <h5>Mediocentro ofensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/moiGomez.png">
                </img>

                <h2>Moi Gómez</h2>
                <h5>Extremo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/pabloIbañez.png">
                </img>

                <h2>Pablo Ibáñez</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/ikerMuñoz.png">
                </img>

                <h2>Iker Muñoz</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            
        </div><!-- /.row -->



        <!-- DELANTEROS -->

        <h1 class="mt-5">DELANTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="delantero">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/kikeBarja.png">
                </img>

                <h2>Kike Barja</h2>
                <h5>Delantero centro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/anteBudimir.png">
                </img>

                <h2>Ante Budimir</h2>
                <h5>Delantero centro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/osasuna/raulGarcia.png">
                </img>

                <h2>Raúl García</h2>
                <h5>Delantero centro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroTemporadas">Cambiar temporadas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DELANTEROS CON MARGEN -->

            
        </div><!-- /.row -->



    </div>

    <div class="bg-primary">
        <footer class="py-3">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="osasuna.html" class="nav-link text-white">Plantilla</a></li>
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

        document.addEventListener('DOMContentLoaded', function (e) {


            const botonCambiarPartidos = document.querySelectorAll('.cambiarNumeroTemporadas');

            let formulario = document.getElementById('formulario');

            botonCambiarPartidos.forEach(boton => {
                boton.addEventListener('click', cambiarPartidos);

            });

            function cambiarPartidos(e) {

                formulario.innerHTML = '';

                const divContenido = document.createElement('div');
                divContenido.className = 'mt-3 mb-3 container';



                divContenido.innerHTML = `
        <label for="posicionJugador" class="form-label">Escribe la cantidad de temporadas</label>
        <input type="text" class="form-control mb-3" id="cantidadTemporadasNueva" style="width: 250px;" required>

        <button type="submit" class="btn btn-primary">Cambiar temporadas</button>
        `;

                formulario.appendChild(divContenido);

                let nuevosPartidos = e.target.parentNode.querySelector('h5');
                let boton = formulario.querySelector('button');

                boton.addEventListener('click', cambiarNumeroPartidos)

                function cambiarNumeroPartidos(e){
                    let numeroPartidosNuevo = formulario.querySelector('#cantidadTemporadasNueva').value;
                    nuevosPartidos.innerHTML = `
                    ${numeroPartidosNuevo} temporadas
                    `
                }

            }

        })


    </script>


</body>

</html>