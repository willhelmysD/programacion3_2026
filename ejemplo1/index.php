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
            <h5 class="card-header">Calculadora de IMC</h5>
            <div class="card-body">

                <form method="post" action="resultado.php">
                    <div class="mb-3">
                        <label for="altura" class="form-label">Altura:</label>
                        <input type="text" class="form-control" id="altura" placeholder="digite su altura en metros" name="altura">
                    </div>
                    <div class="mb-3">
                        <label for="peso" class="form-label">Peso:</label>
                        <input type="text" class="form-control" id="peso" placeholder="digite su peso en kg" name="peso">
                    </div> 
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha Nacio:</label>
                        <input type="date" class="form-control" id="fecha"name="fecha">
                    </div>                                    
                    <div class="mb-3">
                        <button class="btn btn btn-outline-primary btn-sm" type="submit">Calcular</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>