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
            <img src="../../img/sevilla.png" alt="" width="40px">
            <h4 class="text-white ms-2 mt-1">Sevilla</h4>

            <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="sevilla.html">Plantilla</a>
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
                <img class="rounded-circle" width="140" height="140" src="../../entrenadores/imgEntrenadores/entrenadorSevilla.png">
                </img>

                <h2>Quique Sánchez Flores</h2>
                <h5>Entrenador</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar entrenador</button>
            </div><!-- /.col-lg-4 -->




        </div><!-- /.row -->


        <!-- PORTEROS -->

        <h1 class="mt-5">PORTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/markoDimitrovic.png">
                </img>

                <h2>Marko Dmitrovic</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/orjanNyland.png">
                </img>

                <h2>Ørjan Nyland</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- DEFENSAS -->

        <h1 class="mt-5">DEFENSAS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="defensa">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/kikeSalas.png">
                </img>

                <h2>Kike Salas</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/adriaPedrosa.png">
                </img>

                <h2>Adriá Pedrosa</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/sergioRamos.png">
                </img>

                <h2>Sergio Ramos</h2>
                <h5>5 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DEFENSAS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/tanguyNianzou.png">
                </img>

                <h2>Tanguy Nianzou</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/jesusNavas.png">
                </img>

                <h2>Jesús Navas</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/marcosAcuña.png">
                </img>

                <h2>Marcos Acuña</h2>
                <h5>4 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/loicBade.png">
                </img>

                <h2>Loïc Badé</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/marcao.png">
                </img>

                <h2>Marcão</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->


        </div><!-- /.row -->




        <h1 class="mt-5">MEDIOCENTROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="mediocentros">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/lucasOcampos.png">
                </img>

                <h2>Lucas Ocampos</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/nemanjaGudelj.png">
                </img>

                <h2>Nemanja Gudelj</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/suso.png">
                </img>

                <h2>Suso</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->



            <!-- MEDIOCENTROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/joanJordan.png">
                </img>

                <h2>Joan Jordán</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/erikLamela.png">
                </img>

                <h2>Érik Lamela</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/djibrilSow.png">
                </img>

                <h2>Djibril Sow</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/oliverTorres.png">
                </img>

                <h2>Óliver Torres</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/boubakarySoumare.png">
                </img>

                <h2>Boubakary Soumaré</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/adnanJanuzaj.png">
                </img>

                <h2>Adnan Januzaj</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/juanluSanchez.png">
                </img>

                <h2>Juanlu Sanchez</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            
        </div><!-- /.row -->



        <!-- DELANTEROS -->

        <h1 class="mt-5">DELANTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="delantero">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/rafaMir.png">
                </img>

                <h2>Rafa Mir</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/dodiLukebalio.png">
                </img>

                <h2>Dodi Lukébakio</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/youssefEnNesyri.png">
                </img>

                <h2>Youssef En-Nesyri</h2>
                <h5>3 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DELANTEROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/sevilla/isaacRomero.png">
                </img>

                <h2>Isaac Romero</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->



    </div>

    <div class="bg-primary">
        <footer class="py-3">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="sevilla.html" class="nav-link text-white">Plantilla</a></li>
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