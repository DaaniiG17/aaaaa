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



    <!-- AÑADIR JUGADOR -->


    <div id="formulario"></div>


    <!-- PLANTILLA -->

    <div class="container marketing">

        <!-- ENTRENADOR -->
        <h1 class="mt-5">ENTRENADOR</h1>
        <hr>
        <div class="row mt-5 d-flex justify-content-center">

            <div class="col-lg-4 text-center">
                <img class="rounded-circle" width="140" height="140" src="../../entrenadores/imgEntrenadores/entrenadorValencia.png">
                </img>

                <h2>Rubén Baraja</h2>
                <h5>Entrenador</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroAmarillas">Eliminar entrenador</button>
            </div><!-- /.col-lg-4 -->




        </div><!-- /.row -->


        <!-- PORTEROS -->

        <h1 class="mt-5">PORTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/giorgiMamardashvili.png">
                </img>

                <h2>Giorgi Mamardashvili</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/jaumeDomenech.png">
                </img>

                <h2>Jaume Domènech</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- DEFENSAS -->

        <h1 class="mt-5">DEFENSAS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="defensa">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/cristhianMosquera.png">
                </img>

                <h2>Cristhian Mosquera</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/mouctarDiakhaby.png">
                </img>

                <h2>Mouctar Diakhaby</h2>
                <h5>5 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/thierryCorreia.png">
                </img>

                <h2>Thierry Correia</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DEFENSAS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/joseGaya.png">
                </img>

                <h2>José Gayá</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/cenkOzkacar.png">
                </img>

                <h2>Cenk Özkacar</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/DimitriFoulquier.png">
                </img>

                <h2>Dimitri Foulquier</h2>
                <h5>4 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/jesusVazquez.png">
                </img>

                <h2>Jesús Vázquez</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/romanYaremchuk.png">
                </img>

                <h2>Yarek Gasiorowski</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->




        <h1 class="mt-5">MEDIOCENTROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="mediocentros">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/sergiCanos.png">
                </img>

                <h2>Sergi Canós</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/javiGuerra.png">
                </img>

                <h2>Javi Guerra</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/andreAlmeida.png">
                </img>

                <h2>André Almeida</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->



            <!-- MEDIOCENTROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/pepelu.png">
                </img>

                <h2>Pepelu</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/selimAmallah.png">
                </img>

                <h2>Selim Amallah</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/franPerez.png">
                </img>

                <h2>Fran Pérez</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            
        </div><!-- /.row -->



        <!-- DELANTEROS -->

        <h1 class="mt-5">DELANTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="delantero">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/hugoDuro.png">
                </img>

                <h2>Hugo Duro</h2>
                <h5>2 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/romanYaremchuk.png">
                </img>

                <h2>Roman Yaremchuk</h2>
                <h5>1 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/diegoLopez.png">
                </img>

                <h2>Diego López</h2>
                <h5>4 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DELANTEROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="../../jugadores/valencia/albertoMari.png">
                </img>

                <h2>Alberto Marí</h2>
                <h5>0 rojas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de rojas</button>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->



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