<?php
echo '<form id="jugadorForm" class="container mt-5">
<div class="mb-3">
    <label for="nombreJugador" class="form-label">Escribe el nombre del Jugador</label>
    <input type="text" class="form-control" id="nombreJugador" style="width: 250px;" required>
</div>
<div class="mb-3">
    <label for="posicionJugador" class="form-label">Escribe la posicion del jugador</label>
    <input type="text" class="form-control" id="posicionJugador" style="width: 250px;" required>
</div>
<div class="mb-3">
    <label for="urlJugador" class="form-label">Escribe la url de la imagen del jugador</label>
    <input type="text" class="form-control" id="urlJugador" style="width: 250px;" required>
</div>

<button type="submit" class="btn btn-primary" id = "botonAñadirJugador">Añadir jugador</button>
</form>'
?>