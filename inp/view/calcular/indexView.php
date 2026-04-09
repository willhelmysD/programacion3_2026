<?php 
require_once "public/plantilla.html";
startblock('article');
?>

<form action="<?php echo BASE_URL?>calcular/calculo/" method="POST" id="form_calculo">
    <label>Altura</label>
    <input name="altura" id="altura">
    <label>Ancho</label>
    <input name="ancho" id="ancho">
    <label>Tipo</label>
    <select name="tipo" id="tipo">
        <option value="0">Seleccionar</option>
        <option value="1">Pared</option>
        <option value="2">Piso</option>
        <option value="3">Pintura interior</option>
        <option value="4">Pintura exterior</option>
    </select>

    <button type="button" class="btn btn-info" id="btn_enviar" onclick="enviarForm()">Enviar</button>
</form>


<?php  endblock();?>
<script>
    function enviarForm(){
        
        let altura = $('#altura').val();
        let ancho = $('#ancho').val();
        let tipo = $('#tipo').val();

        if(altura == "" || ancho=="" || tipo==0){ //or
            Swal.fire({
            title: 'Error!',
            text: 'todos los datos son requeridos!!!',
            icon: 'error'
            })            
            return false;
            //.submit
        }else{
            $('#form_calculo').submit();
        }
    }

</script>



