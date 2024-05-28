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
            header("Location: equipos/athleticClub/athleticClub.php");
            break;
        case 'atleticoDeMadrid':
            header("Location: equipos/atleticoDeMadrid/atleticoDeMadrid.php");
            break;
        case 'barcelona':
            header("Location: equipos/barcelona/barcelona.php");
            break;
        case 'betis':
            header("Location: equipos/betis/betis.php");
            break;
        case 'cadiz':
            header("Location: equipos/cadiz/cadiz.php");
            break;
        case 'celtaDeVigo':
            header("Location: equipos/celtaDeVigo/celtaDeVigo.php");
            break;
        case 'getafe':
            header("Location: equipos/getafe/getafe.php");
            break;
        case 'girona':
            header("Location: equipos/girona/girona.php");
            break;
        case 'granada':
            header("Location: equipos/granada/granada.php");
            break;
        case 'lasPalmas':
            header("Location: equipos/lasPalmas/lasPalmas.php");
            break;
        case 'mallorca':
            header("Location: equipos/mallorca/mallorca.php");
            break;
        case 'osasuna':
            header("Location: equipos/osasuna/osasuna.php");
            break;
        case 'rayo':
            header("Location: equipos/rayo/rayo.php");
            break;
        case 'realMadrid':
            header("Location: equipos/realMadrid/realMadrid.php");
            break;
        case 'realSociedad':
            header("Location: equipos/realSociedad/realSociedad.php");
            break;
        case 'sevilla':
            header("Location: equipos/sevilla/sevilla.php");
            break;
        case 'valencia':
            header("Location: equipos/valencia/valencia.php");
            break;
        case 'villareal':
            header("Location: equipos/villareal/villareal.php");
            break;
        default:
            echo "El equipo seleccionado no es válido.";
            break;
    }
    exit; // Asegúrate de salir del script después de redirigir al usuario
}
?>
