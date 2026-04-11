<?php 
require_once "public/plantilla.html";
startblock('article');
?>
<div class="row">
    <div class="col-md-4" style="text-align: center;">
        <img src="<?php echo BASE_URL?>public/img/pared.png" style="width:60%">
    </div>
    <div class="col-md-8">
        <table class="table table-hover">
            <tr>
                <th>#</th>
                <th>Item</th>
                <th>valor unidad</th>
                <th>Cantidad</th>
                <th>valor total</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Ladrillo</td>
                <td><?php echo $precio_ladrillo?></td>
                <td><?php echo $total_ladrillo?></td>
                <td><?php echo $total_precio_ladrillo?></td>                
            </tr>

            <tr>
                <td>2</td>
                <td>Cemento</td>
                <td><?php echo $precio_cemento?></td>
                <td><?php echo $total_cemento?></td>
                <td><?php echo $total_precio_cemento?></td>                                
            </tr>

            <tr>
                <td>3</td>
                <td>Arena</td>
                <td><?php echo $precio_arena?></td>
                <td><?php echo $total_arena?></td>
                <td><?php echo $total_precio_arena?></td>                                
            </tr>
            
            <tr>
                <td col="3">Total:</td>
                <td><?php echo "$".number_format($total, 2, '.','.'), PHP_EOL;?></td>
            </tr>

        </table>

        <button type="button" onclick="guardarDatos('<?php echo $total?>',<?php echo $area?>)"></button>
    </div>
</div>
<?php  endblock();?>
<script>
    function  GuardarDatos(total, area){
        let total = total;
        let area = area;
         $.ajax({
            url: 'controller/calcular/guardar',
            type: 'POST',
            data: ['total':total, 'area':area]
            contentType: false,
            processData: false,
            success: function(respuesta) {
                alert('Datos enviados: ' + respuesta);
            }
        });
    }

</script>