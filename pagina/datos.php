<?php
$array = [];
$archivo = fopen("datos.csv", "r");
while (($datos = fgetcsv($archivo,null,";")) == true){
    $array[] = $datos; 
}
fclose($archivo);