<?php 
require_once "public/plantilla.html";
startblock('article');
?> 
<h2>Login</h2>

<form method="POST" action="/mvc_php/auth/validar/">

<input type="text" name="usuario" placeholder="usuario">

<input type="password" name="password" placeholder="password">

<button type="submit">Ingresar</button>

</form>

<?php  endblock();?>