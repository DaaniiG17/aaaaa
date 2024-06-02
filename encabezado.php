<?php
// Obtener el ID del equipo desde el parámetro de consulta
$equipoId = isset($_GET['id']) ? $_GET['id'] : '';
$equipoId = isset($_GET['id']) ? $_GET['id'] : '';

// Verificar si el ID del equipo está vacío
if (empty($equipoId)) {
    echo "No se ha seleccionado ningún equipo.";
    exit();
}

// Array de nombres de equipos
$nombresEquipos = [
    'alaves' => 'Alavés',
    'almeria' => 'Almería',
    'athleticClub' => 'Athletic Club',
    'atleticoDeMadrid' => 'Atletico de Madrid',
    'barcelona' => 'FC Barcelona',
    'betis' => 'Betis',
    'cadiz' => 'Cádiz',
    'celtaDeVigo' => 'Celta de Vigo',
    'getafe' => 'Getafe',
    'girona' => 'Girona',
    'granada' => 'Granada',
    'lasPalmas' => 'Las Palmas',
    'mallorca' => 'Mallorca',
    'osasuna' => 'Osasuna',
    'rayo' => 'Rayo Vallecano',
    'realMadrid' => 'Real Madrid',
    'realSociedad' => 'Real Sociedad',
    'sevilla' => 'Sevilla',
    'valencia' => 'Valencia',
    'villareal' => 'Villarreal'
];

// Obtener el nombre del equipo
$nombreEquipo = isset($nombresEquipos[$equipoId]) ? $nombresEquipos[$equipoId] : 'Equipo desconocido';

// Generar el nombre de archivo de imagen
$nombreArchivoImagen = strtolower(str_replace(' ', '_', $nombreEquipo)) . '.png';

echo '

<nav class="navbar navbar-expand-sm navbar-dark bg-dark container" aria-label="Third navbar example">
    <div class="container-fluid">
        <img src="img/' . $nombreArchivoImagen . '" alt="' . $nombreEquipo . '" width="40px">
        <h4 class="text-white ms-2 mt-1">' . $nombreEquipo . '</h4>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0 d-flex">
                <li class="nav-item">
                
                <a class="nav-link active" aria-current="page" href="equipo.php?id=' . $equipoId . '">Plantilla</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="estadios.php?id=' . $equipoId .'">Estadio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="dropdown03" data-bs-toggle="dropdown">Estadísticas</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                        <li><a class="dropdown-item" href="partidosJugados.php?id='. $equipoId .'">Partidos Jugados</a></li>
                        <li><a class="dropdown-item" href="goles.php?id='. $equipoId .'">Goles</a></li>
                        <li><a class="dropdown-item" href="asistencias.php?id='. $equipoId .'">Asistencias</a></li>
                        <li><a class="dropdown-item" href="amarillas.php?id='. $equipoId .'">Tarjetas amarillas</a></li>
                        <li><a class="dropdown-item" href="rojas.php?id='. $equipoId .'">Tarjetas rojas</a></li>
                        <li><a class="dropdown-item" href="temporadas.php?id='. $equipoId .'">Temporadas en el club</a></li>
                    </ul>
                </li>
                <li class="ms-auto">
                    <a class="nav-link active" href="index.php">Inicio</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



';
?>
