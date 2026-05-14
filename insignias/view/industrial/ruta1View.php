<?php 
require_once "public/plantilla.html";
startblock('article');
?>
    <h1>Industrial - Ruta I:</h1>
    <form action="<?php echo BASE_URL?>industrial/csv1" method="post" enctype="multipart/form-data">
        <label>csv:</label>
        <input name="csv" type="file">
        <hr>
        <button>Enviar</button>
    </form>
<?php  endblock();?>
