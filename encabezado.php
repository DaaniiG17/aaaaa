<?php
echo '
<nav class="navbar navbar-expand-sm navbar-dark bg-dark container" aria-label="Third navbar example">
    <div class="container-fluid">
        <img src="../../img/alaves.png" alt="" width="40px">
        <h4 class="text-white ms-2 mt-1">Alavés</h4>

        <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="alaves.php">Plantilla</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="estadio.php">Estadio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="dropdown03"
                        data-bs-toggle="dropdown">Estadisticas</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                        <li><a class="dropdown-item" href="partidosJugados.php">Partidos Jugados</a></li>
                        <li><a class="dropdown-item" href="goles.php">Goles</a></li>
                        <li><a class="dropdown-item" href="asistencias.php">Asistencias</a></li>
                        <li><a class="dropdown-item" href="amarillas.php">Tarjetas amarillas</a></li>
                        <li><a class="dropdown-item" href="rojas.php">Tarjetas rojas</a></li>
                        <li><a class="dropdown-item" href="temporadas.php">Temporadas en el club</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
';
?>