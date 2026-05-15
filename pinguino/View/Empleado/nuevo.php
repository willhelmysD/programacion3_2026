<?php 
require_once "public/plantilla.html";
startblock('article');
?>
<div class="row">
    <div class="col-md-9">
        <h1>Nuevo de empleado</h1>
    </div>
    <div class="col-md-3 text-end">
        <a class="btn btn-sm btn-warning" href="<?php echo BASE_URL?>/empleado/inicio">Regresar Empleado</a>
    </div>
</div>

<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h5>Formulario Nuevo Empleado:</h5>
                <form id="nuevo_empleado">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" name="nombre" id="nombre" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="cargo">Cargo</label>
                                <select name="cargo" class="form-control" id="cargo">
                                    <option value="">Seleccionar cargo</option>
                                    <option value="Domiciliario">Domiciliario</option>
                                    <option value="Cajero">Cajero</option>
                                    <option value="Mesero">Mesero</option>
                                </select>                        
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="celular">Celuar</label>
                                <input class="form-control" name="celular" id="celular" type="text">
                            </div>
                        </div>                                                
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
    
<?php  endblock();?>