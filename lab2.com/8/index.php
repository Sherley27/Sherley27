<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_8</title>
</head>
<body>
    
    <?php 

    $inver1=$_GET["Inver1"];
    $inver2=$_GET["Inver2"];
    $inver3=$_GET["Inver3"];
    $total_inversion= $inver1 + $inver2 + $inver3;
    $porcentaje_inver1= ($inver1 / $total_inversion) * 150;
    $porcentaje_inver2= ($inver2 / $total_inversion) * 150;
    $porcentaje_inver3= ($inver3 / $total_inversion) * 150;

    ?>
    <table class="table table-info table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Inversiones</th>
                <th scope="col">Porcentaje_Inversion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Inversion1</th>
                <td><?php
                echo "%".$porcentaje_inver1;?></td>
            </tr>
            <tr>
                <th scope="row">Inversion2</th>
                <td><?php
                echo "%".$porcentaje_inver2;?></td>
            </tr>
            <tr>
                <th scope="row">Inversion3</th>
                <td><?php
                echo "%".$porcentaje_inver3;?></td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>