let botonCambiarEstadio = document.getElementById('cambiarEstadio');

        botonCambiarEstadio.addEventListener('click', cambiarEstadio);
        
        let nombreEstadio = document.getElementById('nombreEstadio');
        let fotoEstadio = document.getElementById('imagenEstadio').src;


        function cambiarEstadio(e){

            let formulario = document.getElementsByClassName('formularioEstadio')[0];
            let divFormulario = document.createElement('div');

            divFormulario.innerHTML = `
            <form id="jugadorForm" class="mt-5">
            <div class="mb-3">
                <label for="nombreEstadio" class="form-label">Escribe el nombre del Estadio</label>
                <input type="text"  id="nuevoNombreEstadio" style="width: 250px;" required>
            </div>
            <div class="mb-3">
                <label for="urlEstadio" class="form-label">Escribe la url de la imagen del estadio</label>
                <input type="text" id="nuevaUrlEstadio" style="width: 250px;" required>
            </div>
            <button type="submit" class="btn btn-primary">Cambiar estadio</button>

            </form>

            `

            formulario.appendChild(divFormulario);

            let nuevoEstadio = divFormulario.getElementById('nuevoNombreEstadio').value;
            let nuevaurl = divFormulario.getElementById('nuevaUrlEstadio').value;

            nombreEstadio.innerHTML = nuevoEstadio;
            fotoEstadio.innerHTML = nuevaurl;


        }