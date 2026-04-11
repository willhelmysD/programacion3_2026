<?php 
require_once "public/plantilla.html";
startblock('article');
?>
    <h1>Insignias:</h1>
    <form action="" method="post">
        <label>csv:</label>
        <input name="csv" type="file">
        <hr>
        <button>Enviar</button>
    </form>
<?php  endblock();?>
