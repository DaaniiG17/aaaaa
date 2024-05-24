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
    <?php
        include '../../encabezado.php';
    

    //AÑADIR JUGADOR 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar los datos del formulario
    $nombreJugador = $_POST['nombreJugador'];
    $posicionJugador = $_POST['posicionJugador'];
    $urlJugador = $_POST['urlJugador'];

    // Aquí puedes realizar cualquier acción con los datos recibidos, como almacenarlos en una base de datos
    // o mostrarlos en otra página.
}
?>


    <div id="formulario">

    </div>


    <div class="container marketing">

        <!-- PORTEROS -->

        <h1 class="mt-5">PORTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/antonioSivera.png">
                </img>

                <h2>Antonio Sivera</h2>
                <h5>13 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/jesusOwono.png">
                </img>

                <h2>Jesús Owono</h2>
                <h5>1 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- DEFENSAS -->

        <h1 class="mt-5">DEFENSAS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="defensa">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/andoniGorosabel.png">
                </img>

                <h2>Andoni Gorosabel</h2>
                <h5>5 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/rubenDuarte.png">
                </img>

                <h2>Rubén Duarte</h2>
                <h5>6 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/sedlar.png">
                </img>

                <h2>Aleksandar Sedlar</h2>
                <h5>4 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DEFENSAS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/nahuelTenaglia.png">
                </img>

                <h2>Nahuel Tenaglia</h2>
                <h5>3 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/rafaMarín.png">
                </img>

                <h2>Rafa Marín</h2>
                <h5>2 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/josedaAlvarez.png">
                </img>

                <h2>Joseda Álconstez</h2>
                <h5>4 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->




            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/javiLopez.png">
                </img>

                <h2>Javi Lopez</h2>
                <h5>2 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->




        <h1 class="mt-5">MEDIOCENTROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="mediocentros">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/anderGuevara.png">
                </img>

                <h2>Ander Guevara</h2>
                <h5>3 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/antonioBlanco.png">
                </img>

                <h2>Antonio Blanco</h2>
                <h5>4 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/hagi.png">
                </img>

                <h2>Ianis Hagi</h2>
                <h5>2 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->



            <!-- MEDIOCENTROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/guridi.png">
                </img>

                <h2>Jon Guridi</h2>
                <h5>3 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/carlosBenavidez.png">
                </img>

                <h2>Carlos Benavídez</h2>
                <h5>3 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->



        <!-- DELANTEROS -->

        <h1 class="mt-5">DELANTEROS</h1>
        <hr class="mb-5">


        <div class="row text-center" id="delantero">
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/luisRioja.png">
                </img>

                <h2>Luis Rioja</h2>
                <h5>8 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/kikeGarcia.png">
                </img>

                <h2>Kike García</h2>
                <h5>4 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/alkain.png">
                </img>

                <h2>Xeber Alkain</h2>
                <h5>2 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->



            <!-- DELANTEROS CON MARGEN -->



            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/abde.png">
                </img>

                <h2>Abde Rebbach</h2>
                <h5>6 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/carlosVicente.png">
                </img>

                <h2>Carlos Vicente</h2>
                <h5>4 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mb-5">
                <img class="rounded-circle" width="140" height="140" src="imgAlaves/unaiRopero.png">
                </img>

                <h2>Unai Ropero</h2>
                <h5>1 temporadas</h5>
                <button class="btn btn-secondary bg-primary cambiarNumeroPartidos">Cambiar numero de temporadas</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->



    </div>

    <?php
        include '../../footer.php';
    ?>

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
        <label for="posicionJugador" class="form-label">Escribe la cantidad de temporadas</label>
        <input type="text" class="form-control mb-3" id="cantidadPartidosNueva" style="width: 250px;" required>

        <button type="submit" class="btn btn-primary">Cambiar temporadas</button>
        `;

                formulario.appendChild(divContenido);

                let nuevosPartidos = e.target.parentNode.querySelector('h5');
                let boton = formulario.querySelector('button');

                boton.addEventListener('click', cambiarNumeroPartidos)

                function cambiarNumeroPartidos(e){
                    let numeroPartidosNuevo = formulario.querySelector('#cantidadPartidosNueva').value;
                    nuevosPartidos.innerHTML = `
                    ${numeroPartidosNuevo} temporadas
                    `
                }

            }

        })


    </script>
    
</body>

</html>