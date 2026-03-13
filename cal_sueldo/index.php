<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Sueldo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">   
</head>
<body>
    <main>
        <h1>Calcular sueldo</h1>
            <form method="post" action="calcular.php">
                
                <div class="mb-3">
                    <label for="txt_horas" class="form-label">Horas:</label>
                    <input type="text" class="form-control" id="txt_horas" placeholder="digite la cantidad de horas trabajadas" name="horas">
                </div>

                <div class="mb-3">
                    <label for="txt_turno" class="form-label">Turno:</label>
                    <input type="text" class="form-control" id="txt_turno" placeholder="digite el tipo de turno" name="turno">
                    <small>1 para mañana, 2 para tarde y 3 para noche</small>
                </div>   

                <button type="submit" class="btn btn-primary">Calcular</button>
                
            </form>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>    
</body>
</html>