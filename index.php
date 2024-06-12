<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/styles2.css">
    <link rel="stylesheet" href="phps/assets/css/styles.css">
</head>

<body>
    <div class="">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none ms-5">
                <img src="img/logo.png" alt="" width="50px">
                <span class="fs-4">INFOFUTBOL</span>
            </div>
            <ul class="nav nav-pills me-5">
                <li class="nav-item"><a href="phps/logout.php" class="nav-link active bg-success" aria-current="page">Cerrar sesion</a></li>
            </ul>
        </header>
    </div>

    <form action="equipo.php" method="GET" class="container">
        <div class="mb-3">
            <label for="equipoId" class="form-label">Selecciona un equipo:</label>
            <select class="form-select" id="equipoId" name="id">
                <option value="alaves">Alavés</option>
                <option value="almeria">Almería</option>
                <option value="athleticClub">Athletic Club</option>
                <option value="atleticoDeMadrid">Atlético de Madrid</option>
                <option value="barcelona">FC Barcelona</option>
                <option value="betis">Betis</option>
                <option value="cadiz">Cádiz</option>
                <option value="celtaDeVigo">Celta de Vigo</option>
                <option value="getafe">Getafe</option>
                <option value="girona">Girona</option>
                <option value="granada">Granada</option>
                <option value="lasPalmas">Las Palmas</option>
                <option value="mallorca">Mallorca</option>
                <option value="osasuna">Osasuna</option>
                <option value="rayo">Rayo Vallecano</option>
                <option value="realMadrid">Real Madrid</option>
                <option value="realSociedad">Real Sociedad</option>
                <option value="sevilla">Sevilla</option>
                <option value="valencia">Valencia</option>
                <option value="villareal">Villarreal</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ver equipo</button>
    </form>
    
    <?php
    $sql = "
    SELECT nombre, goles, equipo
    FROM equipos
    WHERE equipo IN ('Alavés', 'Almería', 'Bilbao', 'Atleti', 'Barca', 'Betis', 'Cádiz', 'Celta', 'Getafe', 'Girona', 'LasPalmas', 'Mallorca', 'Osasuna', 'Rayo', 'RealMadrid', 'RealSociedad', 'Sevilla', 'Valencia', 'Villarreal')
    ORDER BY goles DESC
    LIMIT 5
    ";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {

    echo "<h2>Top 5 Pichichi</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Goles</th><th>Equipo</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nombre"]. "</td><td>" . $row["goles"]. "</td><td>" . $row["equipo"]. "</td></tr>";
    }
    echo "</table>";
    } else {
    echo "0 resultados";
    }

    SELECT nombre, goles, equipo
    FROM equipos
    WHERE equipo IN ('Alavés', 'Almería', 'Bilbao', 'Atleti', 'Barca', 'Betis', 'Cádiz', 'Celta', 'Getafe', 'Girona', 'LasPalmas', 'Mallorca', 'Osasuna', 'Rayo', 'RealMadrid', 'RealSociedad', 'Sevilla', 'Valencia', 'Villarreal')
    ORDER BY goles DESC
    LIMIT 5;
    
</body>
</html>
