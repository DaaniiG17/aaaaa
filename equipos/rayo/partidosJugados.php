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
            <img src="../../img/rayo.png" alt="" width="40px">
            <h4 class="text-white ms-2 mt-1">Rayo Vallecano</h4>

            <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="rayo.html">Plantilla</a>
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
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/stoleDimitrievski.png">
                </img>

                <h2>Stole Dimitrievski</h2>
                <h5>Portero</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/daniCardenas.png">
                </img>

                <h2>Dani Cardenas</h2>
                <h5>Portero</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- DEFENSAS -->

        <h1 class="mt-5">DEFENSAS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="defensa">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/pepChavariia.png">
                </img>

                <h2>Pep Chavarría</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/martinPascual.png">
                </img>

                <h2>Martín Pascual</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/aridaneHernandez.png">
                </img>

                <h2>Aridane Hernández</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->



            <!-- DEFENSAS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/alfonsoEspino.png">
                </img>

                <h2>Alfonso Espino</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/abdulMumin.png">
                </img>

                <h2>Abdul Mumin</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/ivanBalliu.png">
                </img>

                <h2>Iván Balliu</h2>
                <h5>Lateral</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/florianLejeune.png">
                </img>

                <h2>Florian Lejeune</h2>
                <h5>Defensa central</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->




        <h1 class="mt-5">MEDIOCENTROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="mediocentros">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/josePozo.png">
                </img>

                <h2>José Pozo</h2>
                <h5>Mediocentro ofensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/isipalazon.png">
                </img>

                <h2>Isi Palazón</h2>
                <h5>Mediocentro ofensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/oscarTtrejo.png">
                </img>

                <h2>Óscar Trejo</h2>
                <h5>Mediocentro ofensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->



            <!-- MEDIOCENTROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/randyNteka.png">
                </img>

                <h2>Randy Nteka</h2>
                <h5>Mediocentro ofensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/kikePerez.png">
                </img>

                <h2>Kike Pérez</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/unaiLopez.png">
                </img>

                <h2>Unai López</h2>
                <h5>Mediocentro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/alvaroGarcia.png">
                </img>

                <h2>Alvaro García</h2>
                <h5>Extremo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/patheCiss.png">
                </img>

                <h2>Pathé Ciss</h2>
                <h5>Mediocentro defensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/oscarValentin.png">
                </img>

                <h2>Óscar Valentin</h2>
                <h5>Mediocentro ofensivo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            
        </div><!-- /.row -->



        <!-- DELANTEROS -->

        <h1 class="mt-5">DELANTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="delantero">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/radamelFalcao.png">
                </img>

                <h2>Radamel Falcao</h2>
                <h5>Delantero centro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/bebe.png">
                </img>

                <h2>Bebé</h2>
                <h5>Extremo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/jorgeDeFrutos.png">
                </img>

                <h2>Jorge de Frutos</h2>
                <h5>Extremo</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->



            <!-- DELANTEROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/raulDeTomas.png">
                </img>

                <h2>Raúl de Tomas</h2>
                <h5>Delantero centro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/rayoVallecano/sergioCamello.png">
                </img>

                <h2>Sergio Camello</h2>
                <h5>Delantero centro</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar partidos</button>
            </div><!-- /.col-lg-4 -->

            
        </div><!-- /.row -->



    </div>

    <div class="bg-primary">
        <footer class="py-3">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="rayo.html" class="nav-link text-white">Plantilla</a></li>
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


            const botonCambiarPartidos = document.querySelectorAll('.cambiarNumeroPartidos');

            let formulario = document.getElementById('formulario');

            botonCambiarPartidos.forEach(boton => {
                boton.addEventListener('click', cambiarPartidos);

            });

            function cambiarPartidos(e) {

                formulario.innerHTML = '';

                const divContenido = document.createElement('div');
                divContenido.className = 'mt-3 mb-3 container';



                divContenido.innerHTML = `
        <label for="posicionJugador" class="form-label">Escribe la cantidad de partidos</label>
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