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
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Celular</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $cont = 0;
                    foreach($lista_empleado as $empleado){
                        $cont++;
                        ?>
                    <tr>
                        <th scope="row"><?php echo $cont?></th>
                        <td><?php echo $empleado->getNombre();?></td>
                        <td><?php echo $empleado->getCargo();?></td>
                        <td><?php echo $empleado->getCelular();?></td>
                        <td><a href="<?php echo BASE_URL?>/empleado/detalle/<?php echo $empleado->getEmpleado_id()?>" class="btn btn-info btn-xs">detalles</a></td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>                
            </div>
        </div>
    </div>
</div>
<?php  endblock();?>