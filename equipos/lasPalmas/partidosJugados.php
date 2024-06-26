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
            <img src="../../img/lasPalmas.png" alt="" width="40px">
            <h4 class="text-white ms-2 mt-1">Las palmas</h4>

            <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="lasPalmas.html">Plantilla</a>
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
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/alvaroValles.png">
                </img>

                <h2>Álvaro Valles</h2>
                <h5>Portero</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/aaronEscandell.png">
                </img>

                <h2>Aarón Escandell</h2>
                <h5>Portero</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- DEFENSAS -->

        <h1 class="mt-5">DEFENSAS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="defensa">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/marvinPark.png">
                </img>

                <h2>Marvin Park</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/sergiCardona.png">
                </img>

                <h2>Sergi Cardona</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/alexSuarez.png">
                </img>

                <h2>Álex Suarez</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->



            <!-- DEFENSAS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/ericCurbelo.png">
                </img>

                <h2>Eric Curbelo</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/alvaroLemos.png">
                </img>

                <h2>Álvaro Lemos</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/mikaMarmol.png">
                </img>

                <h2>Mika Mármol</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/daleySinkgraven.png">
                </img>

                <h2>Daley Sinkgraven</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/saulCoco.png">
                </img>

                <h2>Saúl Coco</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/julianAraujo.png">
                </img>

                <h2>Julián Araujo</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->




        <h1 class="mt-5">MEDIOCENTROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="mediocentros">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/javiMuñoz.png">
                </img>

                <h2>Javi Muñóz</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/albertoMoleiro.png">
                </img>

                <h2>Albeto Moleiro</h2>
                <h5>Mediocentro ofensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/benitoRamirez.png">
                </img>

                <h2>Benito Ramírez</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->



            <!-- MEDIOCENTROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/enzoLoiodice.png">
                </img>

                <h2>Enzo Loiodice</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/kirianRodriguez.png">
                </img>

                <h2>Kirian Rodríguez</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/omenukeMfulu.png">
                </img>

                <h2>Omenuke Mfulu</h2>
                <h5>Mediocentro defensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/pejiño.png">
                </img>

                <h2>Pejiño</h2>
                <h5>Extremo</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/fabioGonzalez.png">
                </img>

                <h2>Fabio González</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->


        </div><!-- /.row -->



        <!-- DELANTEROS -->

        <h1 class="mt-5">DELANTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="delantero">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/cristianHerrera.png">
                </img>

                <h2>Cristian Herrera</h2>
                <h5>Delantero centro</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/sandroRamirez.png">
                </img>

                <h2>Sandro Ramírez</h2>
                <h5>Delantero centro</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/munirElHaddadi.png">
                </img>

                <h2>Munir El Haddadi</h2>
                <h5>Extremo</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->



            <!-- DELANTEROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/lasPalmas/marcCardona.png">
                </img>

                <h2>Marc Cardona</h2>
                <h5>Delantero Centro</h5>
                <button class="btn btn-secondary bg-primary cambiarPartidosJugados">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->

            
        </div><!-- /.row -->



    </div>

    <div class="bg-primary">
        <footer class="py-3">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="lasPalmas.html" class="nav-link text-white">Plantilla</a></li>
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


            const botonCambiarPartidos = document.querySelectorAll('.cambiarPartidosJugados');

            let formulario = document.getElementById('formulario');

            botonCambiarPartidos.forEach(boton => {
                boton.addEventListener('click', cambiarPartidos);

            });

            function cambiarPartidos(e) {

                formulario.innerHTML = '';

                const divContenido = document.createElement('div');
                divContenido.className = 'mt-3 mb-3 container';



                divContenido.innerHTML = `
        <label for="posicionJugador" class="form-label">Escribe la cantidad de partidos jugados</label>
        <input type="text" class="form-control mb-3" id="cantidadPartidosNueva" style="width: 250px;" required>

        <button type="submit" class="btn btn-primary">Cambiar partidos</button>
        `;

                formulario.appendChild(divContenido);

                let nuevosPartidos = e.target.parentNode.querySelector('h5');
                let boton = formulario.querySelector('button');

                boton.addEventListener('click', cambiarNumeroPartidos)

                function cambiarNumeroPartidos(e){
                    let numeroPartidosNuevo = formulario.querySelector('#cantidadPartidosNueva').value;
                    nuevosPartidos.innerHTML = `
                    ${numeroPartidosNuevo} partidos
                    `
                }

            }

        })


    </script>

</body>

</html>