<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_5</title>
</head>
<body>
    <?php
    
      $cali1=$_GET["Calificacion1"];
      $cali2=$_GET["Calificacion2"];
      $cali3=$_GET["Calificacion3"];
      $cali4=$_GET["Calificacion4"];
      $cali5=$_GET["Calificacion5"];
      $nombre=$_GET["Nombre"];

      $promedio = ($cali1 + $cali2+ $cali3+ $cali4+ $cali5) / 5;
      echo "El nombre del Estudiante es :\n".$nombre;
      echo "<br>El promedio del Estudiante es :\n".$promedio;

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>