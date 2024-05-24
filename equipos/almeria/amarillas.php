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

    <div class="container marketing">


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark container" aria-label="Third navbar example">
        <div class="container-fluid">
            <img src="../../img/almeria.png" alt="" width="40px">
            <h4 class="text-white ms-2 mt-1">Almería</h4>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03"
                aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="almeria.html">Plantilla</a>
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

    <div id="formulario"></div>

    <h1 class="mt-5">PORTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/luisMaximiano.png">
                </img>

                <h2>Luís Maximiliano</h2>
                <h5>2 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/diegoMariño.png">
                </img>

                <h2>Fernando Martínez</h2>
                <h5>3 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- DEFENSAS -->

        <h1 class="mt-5">DEFENSAS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="defensa">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/edgarGonzalez.png">
                </img>

                <h2>Edgar Gonzaléz</h2>
                <h5>6 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/alexPozo.png">
                </img>

                <h2>Alex Pozo</h2>
                <h5>4 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/marcPubill.png">
                </img>

                <h2>Marc Pubill</h2>
                <h5>6 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DEFENSAS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/alexCentelles.png">
                </img>

                <h2>Álex Centelles</h2>
                <h5>8 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/chumi.png">
                </img>

                <h2>Chumi</h2>
                <h5>2 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/cesarMontes.png">
                </img>

                <h2>César Montes</h2>
                <h5>7 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->


        </div><!-- /.row -->




        <h1 class="mt-5">MEDIOCENTROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="mediocentros">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/iddrisuBaba.png">
                </img>

                <h2>Iddrisu Baba</h2>
                <h5>6 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/lucasRobertone.png">
                </img>

                <h2>Lucas Robertone</h2>
                <h5>2 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/dionLopy.png">
                </img>

                <h2>Dion Lopy</h2>
                <h5>4 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->



            <!-- MEDIOCENTROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/gonzaloMelero.png">
                </img>

                <h2>Gonzalo Melero</h2>
                <h5>6 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/sergioArribas.png">
                </img>

                <h2>Sergio Arribas</h2>
                <h5>0 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->



        <!-- DELANTEROS -->

        <h1 class="mt-5">DELANTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="delantero">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/largieRamazani.png">
                </img>

                <h2>Largie Ramazani</h2>
                <h5>4 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/luisSuarez.png">
                </img>

                <h2>Luis Suarez</h2>
                <h5>2 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/adriEmbarba.png">
                </img>

                <h2>Adri Embarba</h2>
                <h5>11 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DELANTEROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/leoBaptistao.png">
                </img>

                <h2>Léo Baptistao</h2>
                <h5>6 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/ibrahimaKone.png">
                </img>

                <h2>Ibrahima Koné</h2>
                <h5>1 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/almeria/marezi.png">
                </img>

                <h2>Marezi</h2>
                <h5>0 amarillas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Cambiar número de amarillas</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

    </div>

    <div class="bg-primary">
        <footer class="py-3">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="almeria.html" class="nav-link text-white">Plantilla</a></li>
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