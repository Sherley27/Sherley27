<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_4</title>
</head>

<body>
    <?php
    
    $hrs_trabajadas=$_GET["horas_trabajadas"];
    $pag_trabajadas=$_GET["pago_por_trabajadas"];
    define ("Descuento", 0.20);
    $Salario_Bruto = $horas_trabajadas * $pag_trabajadas;
    $Descuento = Descuento * $Salario_Bruto;
    $Salario_Neto = $Salario_Bruto - $Descuento;

    echo "El Salario Bruto del Trabajador es de :\n" . $Salario_Bruto;
    echo "<br>El Descuento del %20 del Trabajador es de :\n" . $Descuento;
    echo "<br>El Salario Neto del Trabajador es de :\n" . $Salario_Neto;
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>