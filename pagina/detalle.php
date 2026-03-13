<?php
include_once 'datos.php';
$id = $_GET['ID'];
?>

<form id="form" action="action/nuevo.php" method="post" style="width:50%">
    <input type="hidden" value="<?php echo $id?>">
    <div class="mb-3">
        <label for="inputNombre">Nombre:</label>
        <input type="text" name="nombre" id="inputNombre" class="form-control" value="<?php echo $array[$id][0];?>">
    </div>                
    <div class="mb-3">
        <label for="inputApellido">Apellido:</label>
        <input type="text" name="apellido" id="inputApellido" class="form-control" value="<?php echo $array[$id][1];?>">
    </div>                
    <button type="submit" class="btn btn-success">Enviar</button>
</form>
