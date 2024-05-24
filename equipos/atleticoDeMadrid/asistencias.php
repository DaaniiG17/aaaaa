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
            <img src="../../img/atleticoMadrid.png" alt="" width="40px">
            <h4 class="text-white ms-2 mt-1">Atletico de Madrid</h4>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03"
                aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="atleticoDeMadrid.html">Plantilla</a>
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
                            <li><a class="dropdown-item" href="amarillas.html">Tarjetas asistencias</a></li>
                            <li><a class="dropdown-item" href="rojas.html">Tarjetas rojas</a></li>
                            <li><a class="dropdown-item" href="temporadas.html">Temporadas en el club</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="formulario"></div>

    <div class="container marketing">

        <!-- ENTRENADOR -->
        <h1 class="mt-5">ENTRENADOR</h1>
        <hr>
        <div class="row mt-5 d-flex justify-content-center">

            <div class="col-lg-4 text-center">
                <img class="rounded-circle" width="140" height="140" src="../../entrenadores/imgEntrenadores/entrenadorAtleti.png">
                </img>

                <h2>Diego Simeone</h2>
                <h5>Entrenador</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroasistencias">Eliminar entrenador</button>
            </div><!-- /.col-lg-4 -->




        </div><!-- /.row -->


        <!-- PORTEROS -->

        <h1 class="mt-5">PORTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/janOblak.png">
                </img>

                <h2>Jan Oblak</h2>
                <h5>1 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/antonioGomis.png">
                </img>

                <h2>Antonio Gomis</h2>
                <h5>0 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
        </div><!-- /.row -->


        <!-- DEFENSAS -->

        <h1 class="mt-5">DEFENSAS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="defensa">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/joseGimenez.png">
                </img>

                <h2>José Giménez</h2>
                <h5>0 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/cesarAzpilicueta.png">
                </img>

                <h2>César Azpilicueta</h2>
                <h5>3 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/stefanSavic.png">
                </img>

                <h2>Stefan Savic</h2>
                <h5>1 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->



            <!-- DEFENSAS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/nahuelMolina.png">
                </img>

                <h2>Nahuel Molina</h2>
                <h5>5 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/marioHermoso.png">
                </img>

                <h2>Mario Hermoso</h2>
                <h5>0 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/reinildo.png">
                </img>

                <h2>Reinildo</h2>
                <h5>3 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->




            

        </div><!-- /.row -->




        <h1 class="mt-5">MEDIOCENTROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="mediocentros">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/rodrigoDePaul.png">
                </img>

                <h2>Rodrigo De Paul</h2>
                <h5>6 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/koke.png">
                </img>

                <h2>Koke</h2>
                <h5>12 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/saulÑiguez.png">
                </img>

                <h2>Saúl Ñíguez</h2>
                <h5>3 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->



            <!-- MEDIOCENTROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/thomasLemar.png">
                </img>

                <h2>Thomas Lemar</h2>
                <h5>0 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/marcosLlorente.png">
                </img>

                <h2>Marcos Llorente</h2>
                <h5>3 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/rodrigoRiquelme.png">
                </img>

                <h2>Rodrigo Riquelme</h2>
                <h5>5 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/axelWitsel.png">
                </img>

                <h2>Axel Witsel</h2>
                <h5>2 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/pabloBarrios.png">
                </img>

                <h2>Pablo Barrios</h2>
                <h5>7 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->



        <!-- DELANTEROS -->

        <h1 class="mt-5">DELANTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="delantero">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/antoineGrizzman.png">
                </img>

                <h2>Antoine Griezmann</h2>
                <h5>15 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/memphisDepay.png">
                </img>

                <h2>Memphis Depay</h2>
                <h5>2 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/angelCorrea.png">
                </img>

                <h2>Angel Correa</h2>
                <h5>3 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->



            <!-- DELANTEROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/samuLino.png">
                </img>

                <h2>Samuel Lino</h2>
                <h5>7 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/atleti/alvaroMorata.png">
                </img>

                <h2>Álvaro Morata</h2>
                <h5>3 asistencias</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de asistencias</button>
            </div><!-- /.col-lg-4 -->
            
        </div><!-- /.row -->



    </div>

    <div class="bg-primary">
        <footer class="py-3">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="atleticoDeMadrid.html" class="nav-link text-white">Plantilla</a></li>
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


            const botonCambiarPartidos = document.querySelectorAll('.cambiarNumeroasistencias');

            let formulario = document.getElementById('formulario');

            botonCambiarPartidos.forEach(boton => {
                boton.addEventListener('click', cambiarPartidos);

            });

            function cambiarPartidos(e) {

                formulario.innerHTML = '';

                const divContenido = document.createElement('div');
                divContenido.className = 'mt-3 mb-3 container';



                divContenido.innerHTML = `
        <label for="posicionJugador" class="form-label">Escribe la cantidad de asistencias</label>
        <input type="text" class="form-control mb-3" id="cantidadPartidosNueva" style="width: 250px;" required>

        <button type="submit" class="btn btn-primary">Cambiar asistencias</button>
        `;

                formulario.appendChild(divContenido);

                let nuevosPartidos = e.target.parentNode.querySelector('h5');
                let boton = formulario.querySelector('button');

                boton.addEventListener('click', cambiarNumeroPartidos)

                function cambiarNumeroPartidos(e){
                    let numeroPartidosNuevo = formulario.querySelector('#cantidadPartidosNueva').value;
                    nuevosPartidos.innerHTML = `
                    ${numeroPartidosNuevo} asistencias
                    `
                }

            }

        })


    </script>
    
</body>

</html>