<?php 
require "plantilla.html";
startblock('article');
?> 

<h1>Home</h1>

<form action="accion/proceso.php" method="POST">
    <div class="mb-3">
        <label for="tipo" class="form-label">tipo</label>
        <select class="form-control" name="tipo">
            <option value="">Seleccionar tipo</option>
            <option value="1">Bicicleta</option>
            <option value="2">Moto</option>
            <option value="3">Carro</option>
        </select>
    </div>    

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button class="btn btn-info" type="submit">Enviar</button>
</form>



<?php  endblock();?>