<?php
// Verifica si se proporcionó un ID de equipo en la URL
if (isset($_GET['id'])) {
    // Obtener el ID del equipo
    $equipoId = $_GET['id'];

    // Redirigir al usuario a la página del equipo correspondiente
    switch ($equipoId) {
        case 'alaves':
            header("Location: equipos/alaves/alaves.php");
            break;
        case 'almeria':
            header("Location: equipos/almeria/almeria.php");
            break;
        case 'athleticClub':
            header("Location: equipos/athleticClub/athleticClub.html");
            break;
        case 'atleticoDeMadrid':
            header("Location: equipos/atleticoDeMadrid/atleticoDeMadrid.html");
            break;
        case 'barcelona':
            header("Location: equipos/barcelona/barcelona.html");
            break;
        case 'betis':
            header("Location: equipos/betis/betis.html");
            break;
        case 'cadiz':
            header("Location: equipos/cadiz/cadiz.html");
            break;
        case 'celtaDeVigo':
            header("Location: equipos/celtaDeVigo/celtaDeVigo.html");
            break;
        case 'getafe':
            header("Location: equipos/getafe/getafe.html");
            break;
        case 'girona':
            header("Location: equipos/girona/girona.html");
            break;
        case 'granada':
            header("Location: equipos/granada/granada.html");
            break;
        case 'lasPalmas':
            header("Location: equipos/lasPalmas/lasPalmas.html");
            break;
        case 'mallorca':
            header("Location: equipos/mallorca/mallorca.html");
            break;
        case 'osasuna':
            header("Location: equipos/osasuna/osasuna.html");
            break;
        case 'rayo':
            header("Location: equipos/rayo/rayo.html");
            break;
        case 'realMadrid':
            header("Location: equipos/realMadrid/realMadrid.html");
            break;
        case 'realSociedad':
            header("Location: equipos/realSociedad/realSociedad.html");
            break;
        case 'sevilla':
            header("Location: equipos/sevilla/sevilla.html");
            break;
        case 'valencia':
            header("Location: equipos/valencia/valencia.html");
            break;
        case 'villareal':
            header("Location: equipos/villareal/villareal.html");
            break;
        default:
            echo "El equipo seleccionado no es válido.";
            break;
    }
    exit; // Asegúrate de salir del script después de redirigir al usuario
}
?>
