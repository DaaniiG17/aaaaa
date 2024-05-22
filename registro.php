<?php
    require_once 'db_conn.php';

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST["nombre"]) && isset($_POST["passw"])){
            try {
                $query = 'INSERT INTO users (nick, password) VALUES (?, ?)';
                $stmt = $db->prepare($query);
                $_POST['nombre'] = htmlspecialchars($_POST['nombre']);
                $stmt->bind_param('ss', $_POST['nombre'], $_POST["passw"]);
                $stmt->execute();

                if($stmt->insert_id <= 0) {
                    throw new Exception('Error');
                }
                session_start();
                $_SESSION['id'] = $stmt->insert_id;
                $_SESSION['user'] = $_POST['nombre'];
                header('Location: privada.php');
                die();
            } catch (Exception $e) {
                $error = 'Registro incorrecto';
            }
        }
        else {
            $error = 'Faltan datos';
        }
    }

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
    </head>
    <body>
        <form action="registro.php" method="POST">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" required>
            <br>
            <label for="pass">Contraseña: </label>
            <input type="text" name="passw" id="pass" required>
            <br>
            <input type="submit" value="Registro">
        </form>
        <?php
            if($error){
                echo '<h2>' . $error . '</h2>';
            }
        ?>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>