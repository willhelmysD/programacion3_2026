<?php

if(!empty($_POST)){
    $cont = 0;
    foreach($_POST as $fila){
        if($fila==null || $fila==0){
            $cont++;
        }
    }
    if($cont>0){
        echo "todos los campos son requeridos";
    }else{

        $nombre = trim($_POST['nombre']);        
        $apellido = trim($_POST['apellido']);
        $nuevo = array($nombre,$apellido);//vector

        $array = [];
        $nombre_fichero = 'datos.csv';
        
        if(file_exists($nombre_fichero)){                                    

            
            $array[] = $nuevo;//add
        } else {
            echo "El fichero $nombre_fichero no existe";
        }


        $outputBuffer = fopen($nombre_fichero, 'w');
        foreach($array as $linea) {
	        fputcsv($outputBuffer, $linea,";");		
        }
        fclose($outputBuffer);


        
    }
}else{

    echo'<script type="text/javascript">
    alert("Proceso terminado");
    window.location.href="../";</script>'; 


    $var = "Hola Pepe";
    echo "<script> test('".$var."'); </script>";
    echo "datos nulos";
}
?>
