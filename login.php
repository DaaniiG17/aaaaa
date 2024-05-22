<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // print_r($_GET);
            if(isset($_GET['nombre'])){
                echo '<h1>Hola ' . htmlspecialchars($_GET['nombre']) . '</h1>';
            }
            else {
                echo '<h1>Hola Mundo</h1>';
            }

            include 'footer.php';
        ?>
    </body>
</html>