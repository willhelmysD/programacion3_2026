<?php 
    
    $turno = $_POST['turno'];
    $horas_trabajadas = $_POST['horas'];

    $total = 0; //salario_total;
    $base = 0;//salario_base;
    $pension = 0; //salario_pension;
    $salud = 0; //salario_salud;

    define("MAN",20);
    define("TAR",25);
    define("NOC",40);

    switch ($turno) {
        case '1':
            $base = $horas_trabajadas * MAN;
            break;
        case '2':
            $base = $horas_trabajadas * TAR;
            break;
        case '3':
            $base = $horas_trabajadas * NOC;
            break;                                
        default:
            # code...
            break;
    }

    $salud = $base * 0.08;
    $pension = $base * 0.12;
    $total = $base + $salud + $pension;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">   
    <style>
        body{
            background: ffffff;
        }
        main{
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    
        <main>

            <div class="card">
            <h5 class="card-header">Resultado calculo:</h5>
            <div class="card-body">
                <h5 class="card-title">Resumen</h5>
                <p class="card-text">
                    <?php 
            echo "El total de ganado fue: $total <br> 
            la salud fue $salud <br> 
            la pension fue $pension <br>
            y el salario base $base";            
                    ?>                    
                </p>
                <a href="index.php" class="btn btn-primary">Otro calculo!</a>
            </div>
            </div>

            
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>    
</body>
</html>