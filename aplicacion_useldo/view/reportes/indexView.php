<?php 
require_once "public/plantilla.html";
startblock('article');
?> 
<nav aria-label="breadcrumb">
<ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
    <li class="breadcrumb-item"><a href="#"><?php echo APP_NAME?></a></li>
    <li class="breadcrumb-item active"><a href="#">calcular</a></li>
</ol>
</nav> 
<div class="card">
  <div class="card-header">
    <h2>Formulario de calculo:</h2>
  </div>
  <div class="card-body">
    <h5 class="card-title">Formulario:</h5>
    <form method="POST" action="<?php echo BASE_URL?>reportes/calcular/">

        <select name="tipo" id="tipo">
            <option value="0">Seleccionar tipo</option>
            <option value="1">Tecnico</option>
            <option value="2">Tecnologo</option>
            <option value="3">Ingeniero</option>
        </select>

        <input type="text" name="horas" placeholder="digite las horas trabajadas" class="form-control">

        <button type="submit">Ingresar</button>

    </form>
  </div>
</div>





<?php  endblock();?>