<?php 
if(!empty($_POST)){
    $cont = 0;
    foreach($_POST as $fila){
        if($fila==null || $fila==0 || $fila="0000-00-00"){
            $cont++;
        }
    }
    if($cont==0){
        echo "proceso";        
    }else{
        echo "Todos los campos son requeridos";
    }
}else{
    echo "no datos";
}
