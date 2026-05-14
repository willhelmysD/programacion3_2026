<?php 
require_once "public/plantilla.html";
startblock('article');
?>
    <h1>Psicologia - Ruta III:</h1>
    <form action="<?php echo BASE_URL?>Psicologia/csv3" method="post" enctype="multipart/form-data">
        <label>csv:</label>
        <input name="csv" type="file">
        <hr>
        <button>Enviar</button>
    </form>
<?php  endblock();?>
