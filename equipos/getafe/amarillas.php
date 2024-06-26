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
            <img src="../../img/getafe.png" alt="" width="40px">
            <h4 class="text-white ms-2 mt-1">Getafe</h4>

            <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="getafe.html">Plantilla</a>
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
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/davidSoria.png">
                </img>

                <h2>David Soria</h2>
                <h5>2 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/danielFuzato.png">
                </img>

                <h2>Daniel Futazo</h2>
                <h5>0 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- DEFENSAS -->

        <h1 class="mt-5">DEFENSAS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="defensa">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/djeneDakoman.png">
                </img>

                <h2>Djené Dakonam</h2>
                <h5>16 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/fabrizioAngeleri.png">
                </img>

                <h2>Fabrizio Angileri</h2>
                <h5>7 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/gastonAlvarez.png">
                </img>

                <h2>Gastón Álvaraz</h2>
                <h5>5 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DEFENSAS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/DomingosDuarte.png">
                </img>

                <h2>Domingos Duarte</h2>
                <h5>2 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/omarAlderete.png">
                </img>

                <h2>Omar Alderete</h2>
                <h5>4 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/joseCarmona.png">
                </img>

                <h2>José Ángel Carmona</h2>
                <h5>1 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/juanIglesias.png">
                </img>

                <h2>Juan Iglesias</h2>
                <h5>2 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/gorkaRivera.png">
                </img>

                <h2>Gorka Rivera</h2>
                <h5>0 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->


        </div><!-- /.row -->




        <h1 class="mt-5">MEDIOCENTROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="mediocentros">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/luisMilla.png">
                </img>

                <h2>Luis Milla</h2>
                <h5>7 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/mauroArrambarri.png">
                </img>

                <h2>Mauro Arambarri</h2>
                <h5>1 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/oscarRodriguez.png">
                </img>

                <h2>Óscar Rodríguez</h2>
                <h5>4 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->



            <!-- MEDIOCENTROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/carlesAleña.png">
                </img>

                <h2>Carles Aleñá</h2>
                <h5>2 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/nemanjaMaksimovic.png">
                </img>

                <h2>Nemanja Maksimovic</h2>
                <h5>11 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/johnPatrick.png">
                </img>

                <h2>John Patrick</h2>
                <h5>2 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/santiagoGarcia.png">
                </img>

                <h2>Santiago García</h2>
                <h5>0 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->


        </div><!-- /.row -->



        <!-- DELANTEROS -->

        <h1 class="mt-5">DELANTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="delantero">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/jaimeMata.png">
                </img>

                <h2>Jaime Mata</h2>
                <h5>9 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/masonGreenwood.png">
                </img>

                <h2>Mason Greenwood</h2>
                <h5>12 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/juanmiLatasa.png">
                </img>

                <h2>Juanmi Latasa</h2>
                <h5>2 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DELANTEROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/getafe/borjaMayoral.png">
                </img>

                <h2>Borja Mayoral</h2>
                <h5>8 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->

            
        </div><!-- /.row -->



    </div>

    <div class="bg-primary">
        <footer class="py-3">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="getafe.html" class="nav-link text-white">Plantilla</a></li>
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