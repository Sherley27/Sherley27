<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_6</title>
</head>
<body>
    <?php
  
    $parcial1=$_GET["Parcial1"];
    $parcial2=$_GET["Parcial2"];
    $parcial3=$_GET["Parcial3"];
    $examen_final=$_GET["Examen_Final"];
    $trabajo_final=$_GET["Trabajo_Final"];
    $nombre=$_GET["Nombre"];
    $promedio_parcial = ($parcial1+$parcial2+$parcial3) / 3;
    $porcentaje_parcial =  $promedio_parcial * 0.55;
    $porcentaje_examen_final =  $examen_final * 0.30;
    $porcentaje_trabajo_final =  $trabajo_final * 0.15;
    $nota_final = $porcentaje_parcial + $porcentaje_examen_final + $porcentaje_trabajo_final;
    echo "<h1>Tabla con los resultados del estudiante </h1>";
    echo "";
    ?>
    <table class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Todos los trabajos</th>
                <th scope="col">Porcentaje_Obtenido</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Parciales</th>
                <td><?php
                echo "". number_format($porcentaje_parcial,2);?></td>
            </tr>
            <tr>
                <th scope="row">Examen_Final</th>
                <td><?php
                echo "". number_format($porcentaje_examen_final,2);?></td>
            </tr>
            <tr>
                <th scope="row">Trabajo_Final</th>
                <td><?php
                echo "". number_format($porcentaje_trabajo_final,2);?></td>
            </tr>
            <tr>
                <th scope="row">Nota Final</th>
                <td><?php
                if($nota_final > 9.1 )
                    echo "A\n". number_format($nota_final,2);
                if($nota_final > 8.1 and $nota_final < 9.1)
                    echo "B\n". number_format($nota_final,2);
                if($nota_final >= 7.1 and $nota_final < 8.1)
                    echo "C\n". number_format($nota_final,2);
                if($nota_final < 7.1 )
                    echo "F\n". number_format($nota_final,2);
                
            ?></td>
            </tr>
        </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>