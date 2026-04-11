<?php 
class LeerCsv{
    function vectorCc($archivo){
        $cont = 0;
        $vector_cc = array();
        if (($handle = fopen($archivo, "r")) !== FALSE) {                
            while (($datos = fgetcsv($handle, 1000, ";")) !== FALSE) {
                if($cont>=1){
                    $vector_cc[] = $datos[0]; 
                }
                $cont++;
            }
            fclose($handle);
        }
        $vector_lista_cc = array_unique($vector_cc);
        return $vector_lista_cc;
    }    
    function matrizDatos($archivo){
        $cont = 0;
        $array = array();
        if (($handle = fopen($archivo, "r")) !== FALSE) {                
            while (($datos = fgetcsv($handle, 1000, ";")) !== FALSE) {
                if($cont>=1){
                    $array[] = $datos;
                }
                $cont++;
            }
            fclose($handle);
        }
        return $array;
    }    
}