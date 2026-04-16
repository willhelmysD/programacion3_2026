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

        <button type="button" onclick="GuardarDatos('<?php echo $total?>','<?php echo $area?>')">enviar</button>
    </div>
</div>
<?php  endblock();?>
<script>
    const ruta = "<?php echo BASE_URL?>";
    function  GuardarDatos(total, area){
        let valor_total = total;
        let valor_area = area;
         $.ajax({
            url: ruta + 'calcular/guardar',
            type: 'POST',
            data: {'total':valor_total, 'area':valor_area},
            success: function(respuesta) {
                alert('Datos enviados: ' + respuesta);
                let rta = JSON.parse(respuesta);                    
                Swal.fire({
                    icon: rta['tipo'],
                    title: rta['titulo'],
                    text: rta['msg'],
                    confirmButtonText: 'OK'
                }).then(() => {
                    if(rta['tipo']=="success"){
                        location.reload();
                    }
                });                
            }

            
        });
    }

</script>