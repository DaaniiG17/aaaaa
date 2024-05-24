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
            <img src="../../img/realMadrid.png" alt="" width="40px">
            <h4 class="text-white ms-2 mt-1">Real Madrid</h4>

            <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="realMadrid.html">Plantilla</a>
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

        <!-- ENTRENADOR -->
        <h1 class="mt-5">ENTRENADOR</h1>
        <hr>
        <div class="row mt-5 d-flex justify-content-center">

            <div class="col-lg-4 text-center">
                <img class="rounded-circle" width="140" height="140" src="../../entrenadores/imgEntrenadores/entrenadorMadrid.png">
                </img>

                <h2>Carlo Ancelotti</h2>
                <h5>Entrenador</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar entrenador</button>
            </div><!-- /.col-lg-4 -->




        </div><!-- /.row -->


        <!-- PORTEROS -->

        <h1 class="mt-5">PORTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/thibautCourtois.png">
                </img>

                <h2>Thibaut Courtois</h2>
                <h5>Portero</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/andriyLunin.png">
                </img>

                <h2>Andriy Lunin</h2>
                <h5>Portero</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/kepa.png">
                </img>

                <h2>Kepa</h2>
                <h5>Portero</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- DEFENSAS -->

        <h1 class="mt-5">DEFENSAS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="defensa">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/daniCarvajal.png">
                </img>

                <h2>Dani Carvajal</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/ederMilitao.png">
                </img>

                <h2>Éder Militao</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/davidAlaba.png">
                </img>

                <h2>David Alaba</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->



            <!-- DEFENSAS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/nacho.png">
                </img>

                <h2>Nacho</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/franGarcia.png">
                </img>

                <h2>Fran García</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/antonioRudiger.png">
                </img>

                <h2>Antonio Rüdiger</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/ferlandMendy.png">
                </img>

                <h2>Ferlan Mendy</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->




        <h1 class="mt-5">MEDIOCENTROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="mediocentros">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/judeBellingham.png">
                </img>

                <h2>Jude Bellingham</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/lukaModric.png">
                </img>

                <h2>Luka Modric</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/eduardoCamavinga.png">
                </img>

                <h2>Eduardo Camavinga</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->



            <!-- MEDIOCENTROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/federicoValverde.png">
                </img>

                <h2>Federico Valverde</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/lucasVazquez.png">
                </img>

                <h2>Lucas Vázquez</h2>
                <h5>Extremo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/aurelienTchouameni.png">
                </img>

                <h2>Aurélien Tchouaméni</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/daniCeballos.png">
                </img>

                <h2>Dani Ceballos</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/brahimDiaz.png">
                </img>

                <h2>Brahim Díaz</h2>
                <h5>Mediocentro ofensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/ardaGuler.png">
                </img>

                <h2>Arda Güler</h2>
                <h5>Mediocentro ofensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            
        </div><!-- /.row -->



        <!-- DELANTEROS -->

        <h1 class="mt-5">DELANTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="delantero">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/viniciusJunior.png">
                </img>

                <h2>Vinícius Junior</h2>
                <h5>Extremo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/rodrygo.png">
                </img>

                <h2>Rodrygo</h2>
                <h5>Extremo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/realMadrid/joselu.png">
                </img>

                <h2>Joselu</h2>
                <h5>Delantero centro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar jugador</button>
            </div><!-- /.col-lg-4 -->
            
        </div><!-- /.row -->



    </div>

    <div class="bg-primary">
        <footer class="py-3">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="realMadrid.html" class="nav-link text-white">Plantilla</a></li>
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


            const botonCambiarPartidos = document.querySelectorAll('.cambiarNumeroAmarillas');

            let formulario = document.getElementById('formulario');

            botonCambiarPartidos.forEach(boton => {
                boton.addEventListener('click', cambiarPartidos);

            });

            function cambiarPartidos(e) {

                formulario.innerHTML = '';

                const divContenido = document.createElement('div');
                divContenido.className = 'mt-3 mb-3 container';



                divContenido.innerHTML = `
        <label for="posicionJugador" class="form-label">Escribe la cantidad de amarillas</label>
        <input type="text" class="form-control mb-3" id="cantidadPartidosNueva" style="width: 250px;" required>

        <button type="submit" class="btn btn-primary">Cambiar amarillas</button>
        `;

                formulario.appendChild(divContenido);

                let nuevosPartidos = e.target.parentNode.querySelector('h5');
                let boton = formulario.querySelector('button');

                boton.addEventListener('click', cambiarNumeroPartidos)

                function cambiarNumeroPartidos(e){
                    let numeroPartidosNuevo = formulario.querySelector('#cantidadPartidosNueva').value;
                    nuevosPartidos.innerHTML = `
                    ${numeroPartidosNuevo} amarillas
                    `
                }

            }

        })


    </script>


</body>

</html>