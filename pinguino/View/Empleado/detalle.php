<?php 
require_once "public/plantilla.html";
startblock('article');
?>
<div class="row">
    <div class="col-md-9">
        <h1>Lista de empleados</h1>
    </div>
    <div class="col-md-3 text-end">
        <a class="btn btn-sm btn-info" href="<?php echo BASE_URL?>/empleado/nuevo">Nuevo Empleado</a>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-title">

            </div>
            <div class="card-body">
               <?php  echo "Nombre: ".$datos->getNombre();?>            
            </div>
        </div>
    </div>
</div>
<?php  endblock();?>