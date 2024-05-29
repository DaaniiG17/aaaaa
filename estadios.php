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

        <?php include 'insertarEstadios.php'?>
    </div>
    </body>
</html>

