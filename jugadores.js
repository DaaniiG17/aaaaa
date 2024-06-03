document.addEventListener('DOMContentLoaded', function (e) {

    // ELIMINAR ENTRENADORES

    const eliminarEntrenadores = document.getElementsByClassName('eliminarEntrenador');
    for (let item of eliminarEntrenadores) {
        item.addEventListener('click', eliminarEntrenador);
    }


    function eliminarEntrenador(e) {
        e.preventDefault();
        const contenido = e.target.parentNode;
        contenido.remove();
    }

    // ELIMINAR PORTEROS

    const eliminarPorteros = document.querySelectorAll('.eliminarPorteros');

    eliminarPorteros.forEach(porteros => {
        porteros.addEventListener('click', eliminarPortero);
    })

    function eliminarPortero(e) {
        e.preventDefault();
        const contenido = e.target.parentNode;
        contenido.remove();
    }

    // ELIMINAR DEFENSAS


    const eliminarDefensas = document.querySelectorAll('.eliminarDefensas')

    eliminarDefensas.forEach(defensas => {
        defensas.addEventListener('click', eliminarDefensa);
    });

    function eliminarDefensa(e) {
        e.preventDefault();
        const contenido = e.target.parentNode;
        contenido.remove();
    }


    // ELIMINAR MEDIOCENTROS

    const eliminarMediocentros = document.querySelectorAll('.eliminarMediocentros');

    eliminarMediocentros.forEach(mediocentros => {
        mediocentros.addEventListener('click', eliminarMediocentro);
    })

    function eliminarMediocentro(e) {
        e.preventDefault();
        const contenido = e.target.parentNode;
        contenido.remove();
    }


    // ELIMINAR DELANTEROS


    const eliminarDelanteros = document.querySelectorAll('.eliminarDelanteros');

    eliminarDelanteros.forEach(delanteros => {
        delanteros.addEventListener('click', eliminarDelantero);
    })

    function eliminarDelantero(e) {
        e.preventDefault();
        const contenido = e.target.parentNode;
        contenido.remove();
    }


    // AÑADIR JUGADORES

    let botonAñadirJugador = document.getElementById('botonAñadirJugador');
    const formulario = document.querySelector('#jugadorForm');

    botonAñadirJugador.addEventListener('click', añadirJugador);

    function añadirJugador(e) {
        e.preventDefault();
        const nombreJugador = document.querySelector('#nombreJugador').value;
        const posicionJugador = document.querySelector('#posicionJugador').value;
        const imagenJugador = document.querySelector('#urlJugador').value;

        // AÑADIR PORTEROS
        if (posicionJugador.toLowerCase() == "portero") {
            const divJugador = document.createElement('div');
            divJugador.classList.add('col-lg-4');
            divJugador.innerHTML = `
        <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
        <h2>${nombreJugador}</h2>
        <h5>${posicionJugador}</h5>
        <button class="btn btn-secondary bg-primary eliminarPorteros">Eliminar jugador</button>
    `;

            const encontrar = document.querySelector('.row.text-center');
            encontrar.appendChild(divJugador);

            const botonEliminar = divJugador.querySelector('.eliminarPorteros');
            botonEliminar.addEventListener('click', eliminarPortero);



        } else if (posicionJugador.toLowerCase() == "defensa central" || posicionJugador.toLowerCase() == "lateral") {

            // AÑADIR DEFENSA

            const filaDefensa = document.querySelector('#defensa');
            const nuevoDivDefensa = document.createElement('div');

            nuevoDivDefensa.className = 'col-lg-4 mb-5';

            nuevoDivDefensa.innerHTML = `
                        <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
                        <h2>${nombreJugador}</h2>
                        <h5>${posicionJugador}</h5>
                        <button class="btn btn-secondary bg-primary eliminarDefensas">Eliminar jugador</button>
                        `

            filaDefensa.appendChild(nuevoDivDefensa);

            const botonEliminarDefensa = nuevoDivDefensa.querySelector('.eliminarDefensas');

            botonEliminarDefensa.addEventListener('click', eliminarDefensa);

                // añadir mediocentro
        } else if (posicionJugador.toLowerCase() == "mediocentro" || posicionJugador.toLowerCase() == "mediocentro defensivo" || posicionJugador.toLowerCase() == "extremo (mediocentro)" || posicionJugador.toLowerCase() == "mediocentro ofensivo") {

            let comprobador = 0;

            let posicionMostrada = posicionJugador.toLowerCase();
            if (posicionMostrada === "extremo (mediocentro)") {
                posicionMostrada = "extremo";
                comprobador = 1;
            }

            const mediocentros = document.querySelector('#mediocentro');

            const divMediocentros = document.createElement('div');

            divMediocentros.className = 'col-lg-4 mb-5';

            if (comprobador == 1) {
                divMediocentros.innerHTML = `
                    <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
                        <h2>${nombreJugador}</h2>
                        <h5>${posicionMostrada}</h5>
                        <button class="btn btn-secondary bg-primary eliminarMediocentros">Eliminar jugador</button>
                    `
            } else {
                divMediocentros.innerHTML = `
                        <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
                        <h2>${nombreJugador}</h2>
                        <h5>${posicionJugador}</h5>
                        <button class="btn btn-secondary bg-primary eliminarMediocentros">Eliminar jugador</button>
 
                    `
            }


            mediocentros.appendChild(divMediocentros);

            const botonEliminarMediocentros = divMediocentros.querySelector('.eliminarMediocentros');

            botonEliminarMediocentros.addEventListener('click', eliminarMediocentro);

            //añadir delantero

        } else if (posicionJugador.toLowerCase() == 'delantero centro' || posicionJugador.toLowerCase() == 'extremo (delantero)') {

            const contenido = document.querySelector('#delantero');

            const divDelanteros = document.createElement('div');

            let comprobador = 0;

            let posicionMostrada;

            if (posicionJugador.toLowerCase() == 'extremo (delantero)') {
                posicionMostrada = 'extremo';
                comprobador = 1;
            }

            if (comprobador == 1) {
                divDelanteros.innerHTML = `
                        <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
                        <h2>${nombreJugador}</h2>
                        <h5>${posicionMostrada}</h5>
                        <button class="btn btn-secondary bg-primary eliminarDelanteros">Eliminar jugador</button>
 
                    `
            } else {

                divDelanteros.innerHTML = `
                        <img src="${imagenJugador}" class="rounded-circle" width="140" height="140">
                        <h2>${nombreJugador}</h2>
                        <h5>${posicionJugador}</h5>
                        <button class="btn btn-secondary bg-primary eliminarDelanteros">Eliminar jugador</button>
 
                    `
            }



            divDelanteros.className = 'col-lg-4 mb-5';

            contenido.appendChild(divDelanteros);

            const botonEliminarDelanteros = divDelanteros.querySelector('.eliminarDelanteros')

            botonEliminarDelanteros.addEventListener('click', eliminarDelantero);

        }
        else {
            alert('Elige una de estas posiciones: Portero, Defensa Central, Lateral,  Mediocentro, Mediocentro Defensivo , extremo (mediocentro), extremo (delantero) o Delantero Centro');
        }
        

    }

    

        



    });
