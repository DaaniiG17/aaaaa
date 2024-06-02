<?php
session_start();

// ESTE CODIGO TE ENVIA A LA PAGINA QUE PONGAS EN CASO DE INICIAR SESION BIEN

if (isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
    exit(); 
}
require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if ($results && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        header("Location: login.php"); 
        exit(); 
    } else {
        $message = 'Lo siento, el usuario o la contraseña son incorrectos';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <?php if (!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <h1>Inicia sesion</h1>
    <span>o <a href="signup.php">Registrate</a></span>

    <form action="login.php" method="POST">
        <input name="email" type="text" placeholder="Introduce tu email">
        <input name="password" type="password" placeholder="Introduce tu contraseña">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
