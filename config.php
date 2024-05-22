<!DOCTYPE html>
<html>
  <body>

  <h1>Ejemplo Procedimiento con parametro IN y parametro OUT</h1>
  <?php 

    // enable error reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    //connect to database
    $con = mysqli_connect("localhost", "root", "joyfe", "sakila", 3309);

    $anno = 2006;

    $storedProc = "CALL AlquileresDelAnno(?,@total)";

    $stmt = mysqli_prepare($con, $storedProc);
    $stmt->bind_param('i', $anno);
    $stmt->execute();

    $param_out = $con->query("SELECT @total");
    
    while ($row = $param_out->fetch_row()) {
        echo $row[0];
    }

    $stmt->close();
  ?>

  </body>
</html>