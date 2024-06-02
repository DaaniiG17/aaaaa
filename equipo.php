<?php
$equipoId = isset($_GET['id']) ? $_GET['id'] : '';

if (empty($equipoId)) {
    echo "No se ha seleccionado ningún equipo.";
    exit();
}

$nombresEquipos = [
    'alaves' => 'Alavés',
    'almeria' => 'Almería',
    'athleticClub' => 'Athletic Club',
    'atleticoDeMadrid' => 'Atlético de Madrid',
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

$nombreEquipo = isset($nombresEquipos[$equipoId]) ? $nombresEquipos[$equipoId] : 'Equipo desconocido';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombreEquipo; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>


    <?php include 'encabezado.php'; ?>
    <?php include 'insertarJugador.php'?>
    <?php include 'insertarPorteros.php'?>
    <?php include 'insertarDefensas.php'?>
    <?php include 'insertarMediocentros.php'?>
    <?php include 'insertarDelanteros.php'?>


    <?php
        include 'footer.php';
    ?>

<script src="script.js?v=<?php echo time(); ?>"></script>

</body>
</html>
