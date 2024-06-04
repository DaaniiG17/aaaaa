<?php

require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
    // Verificar si las contraseñas coinciden
    if ($_POST['password'] !== $_POST['confirm_password']) {
        $message = 'Las contraseñas no coinciden.';
    } else {
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            $message = 'Usuario creado correctamente';
        } else {
            $message = 'Lo siento, hubo un problema al crear su cuenta';
        }
    }
} else {
    $message = 'Por favor, complete todos los campos.';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<h1>Registrate</h1>
<span>o <a href="login.php">inicia sesion</a></span>

<form action="signup.php" method="POST">
    <input name="email" type="text" placeholder="Introduce tu email">
    <input name="password" type="password" placeholder="Introduce tu contraseña">
    <input name="confirm_password" type="password" placeholder="Introduce de nuevo tu contraseña">
    <input type="submit" value="Submit">
</form>

</body>
</html>
