<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_15</title>
</head>
<body>
    <?php

    $tarjeta=$_GET["Credito"];
    switch($tarjeta){
        case 1: 
            echo "El Aumento de la Tarjeta sera de un %25";
        break;
        case 2: 
            echo "El Aumento de la Tarjeta sera de un %35";
        break;
        case 3: 
            echo "El Aumento de la Tarjeta sera de un %40";
        break;

        default:
        echo "El Aumento de la Tarjeta sera de un %50";
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>