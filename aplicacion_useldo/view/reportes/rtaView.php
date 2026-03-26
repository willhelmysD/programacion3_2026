<?php 
require_once "public/plantilla.html";
startblock('article');
?> 
<nav aria-label="breadcrumb">
<ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
    <li class="breadcrumb-item"><a href="#"><?php echo APP_NAME ?></a></li>
    <li class="breadcrumb-item active"><a href="#">calcular</a></li>
</ol>
</nav> 
<div class="card">
  <div class="card-header">
    <h2>Resultado:</h2>
  </div>
  <div class="card-body">
    <h5 class="card-title text-success">Te ganaste:</h5>
    <h2 class="text-danger text-center"><?php echo "El total ganado fue: ".$total;?></h2>
  </div>
</div>





<?php  endblock();?>