<?php

    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $imc = $peso / ($altura * $altura);
//

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cal imc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">   
    <link href="css/style.css">
    <style>
        body{
            background:  #efefef;;
        }
        main{
            margin: 0 20%;
            max-width: 80%;
            padding: 20px;
            background: aquamarine;            
        }
        header{
            text-align: center;
            height: 140px;
            background: antiquewhite;
            padding: 5%;
        }
        h1{
            color: #802ec9;
        }
    </style>
</head>
<body>
    <header>
        <h1>Calculadora IMC:</h1>  
        <h6>By Will Duran</h6>          
    </header>
    <main>
        <div class="card">
            <h5 class="card-header">Resultado IMC</h5>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <h6>Datos captura:</h6>
                        <p>
                            <?php

                                echo "Altura:".$altura.'<br>';
                                echo "Peso:".$peso.'<br>';
                                echo "IMC:".round($imc,2).'<br>';
                            
                            ?>
                        </p><br>
                        <p>
                            Datos Persona
                        </p>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <h6>Diagnostico IMC:</h6>
                    </div>                    
                </div>
                
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>